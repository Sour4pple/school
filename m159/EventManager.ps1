<# Meta Info
    Name: Event Manager
    Version: 0.1
    Date: 2016.04.10
    
    By: Tim Buehler
    Module : 159
    School/Class: TBZ/St13a
#>

clear-host

###### import modules
Import-Module ActiveDirectory #Special thing about: Directories can be accessed like a normal drive. 


###### Variables
#Definitions
$Domain = 'schoollab'
$TLD = 'local'
$ADRootDirectory = 'AD:\DC=' + $domain + ',DC=' +$TLD 

#Constant
$ascii=$NULL;For ($a=33;$a –le 126;$a++) {$ascii+=,[char][byte]$a }


###### Functions
Function GET-Temppassword() { #source https://blogs.technet.microsoft.com/heyscriptingguy/2013/06/03/generating-a-new-password-with-windows-powershell/

Param(

[int]$length=10,

[string[]]$sourcedata

)
 

For ($loop=1; $loop –le $length; $loop++) {

            $TempPassword+=($sourcedata | GET-RANDOM)

            }

return $TempPassword
}

function Create-OU #check if OU exist, if not, it creates it
{
    param(
        [string]$OU
    )

if ('OU=' + $OU | Test-Path) #Creates Temp-Users OU
    {} 
else {
    New-ADOrganizationalUnit -Name $OU
}

}


###### Mainpart
#Editing OUs
Set-Location $ADRootDirectory
Create-OU -ou Event-Users
Set-Location OU=Event-Users

#Do until; Repeats User Input Menu, until $action -eq x
do {

    # User Input Menu
    Write-host 'Welcome to the Event Manager'
    Write-Host '1 = Get Events'
    Write-Host '2 = New Event'
    Write-Host '3 = Delete or Backup Event'
    Write-Host 'x = Exit'
    $action = Read-Host -Prompt 'Please Enter a Number'

    if ($action -eq 1){
        #Get Events; Displays OUs which were created as Events before
        Set-Location $AdRootDirectory
        Set-Location 'OU=Event-Users'
        Get-ChildItem | Write-Host
    }

    elseif ($action -eq 2)
    {
        #New Event
        $EventName = Read-Host -Prompt 'Enter event name'
        $EventStart =  Read-host -Prompt 'Enter evenet start (dd.mm.yyyy hh:mm:ss)'
        $EventEnd = Read-host -Prompt 'Enter evenet end (dd.mm.yyyy hh:mm:ss)'
        $InputFile = Read-host -Prompt 'Enter the path of User File'
        $OutputFiles = Read-Host -Prompt 'Where do you want to save generated Usernames and Passwords?'
    
        #Formating Date Input into Date Variables
        $EventStart = Get-Date $EventStart
        $EventEnd = Get-Date $EventEnd

        #Creating OU with given EventName
        Create-OU -ou $EventName
        Set-Location OU=$EventName

        #Saves Content from Input File into $users
        [array]$users = Get-Content $InputFile

        #Does Action foreach item in Array $users
        foreach ($item in $users)
        {
            #Generates Password
            $TempPassword = GET-Temppassword -length 8 -sourcedata $ascii
            #Converting it to a second var as SecureString
            $SecureTempPassword = ConvertTo-SecureString $TempPassword -AsPlainText -Force
        
            #Creating the each User with some parameters
            New-ADUser `
            -Name $item `
            -AccountPassword $currentPassword `
            -CannotChangePassword $true `
            -PasswordNeverExpires $true `
            -AccountExpirationDate $EventEnd `
            -ChangePasswordAtLogon $false `
            -Enabled $true `
            -KerberosEncryptionType AES256 #Powershell ISE doesnt Recognize this parameter, looked up on technet.com
        
            #Saves User and Password in a File for each User at the user defined path
            [array]$UserLoginData = $item,$temppassword
            $UserLoginData | Out-file $OutputFiles\$item.txt
        }
    }

    elseif ($action -eq 3)
    {
        #Delete or Backup Event
        Set-Location $ADRootDirectory
        $DeleteEvent = Read-Host -Prompt 'Enter the OU you want to Delete'
        $OutputFile = Read-Host -Prompt 'Where do you want to Save you backup?'
        
        $OutputFile = $OutputFiles + '\' + $deleteEvent + '.txt'
        
        #Get User of the soon deleted OU
        $users = get-aduser $DeleteEvent
        
        #Save Users 
        $users | Out-File $OutputFile

        #Removes OU
        Remove-ADOrganizationalUnit $DeleteEvent -Recursive

        
    }

    else
    {
        #Error, Wrong or No Input
        Write-Host 'Ungültige Eingabe'
    }

}
until ($action -eq 'x')
#Fin