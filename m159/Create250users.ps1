#Creates 250 named user in ascii encoded text file
#Tim Buehler
#TBZ\M159

#definitions
$path = 'C:\Temp'
$file = '250users.txt'
$fullpath = $path + '\' + $file
[array]$users = $null
$x = 0 #reset var X

#counting and adding users to variable users
do
{
 $currentuser = "user$x"
 $users += $currentuser

 $x += 1
}
until ($x -eq 250)

#writes users to file 
$users | out-file $fullpath -Encoding ascii