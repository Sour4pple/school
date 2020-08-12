
	 var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
  	 if (document.Formular.Name.value == "") {
     alert("Bitte Ihren Namen eingeben!");
     document.Formular.Name.focus();
     return false;
  	}
  	 if (document.Formular.Vorname.value == "") {
     alert("Bitte Ihren Vornamen eingeben!");
     document.Formular.Vorname.focus();
     return false;
 	  }
  	 if (document.Formular.Strasse.value == "") {
     alert("Bitte Ihre Strasse eingeben!");
     document.Formular.Strasse.focus();
     return false;
  	 }
  	 if (document.Formular.Ort.value == "") {
     alert("Bitte Ihren Wohnort eingeben!");
     document.Formular.Ort.focus();
     return false;
  	}
  	 if (document.Formular.PLZ.value == "") {
     alert("Bitte Ihre PLZ eingeben!");
     document.Formular.PLZ.focus();
     return false;
  	}
  	if (document.Formular.Mail.value == "") {
    alert("Bitte Ihre E-Mail-Adresse eingeben!");
    document.Formular.Mail.focus();
    return false;
  }
 	

  if (!document.Formular.Mail.value.match(format)) {
    alert("Keine E-Mail-Adresse!");
    document.Formular.Mail.focus();
    return false;
  }
  var chkZ = 1;
  for (i = 0; i < document.Formular.PLZ.value.length; ++i)
    if (document.Formular.PLZ.value.charAt(i) < "0" ||
        document.Formular.PLZ.value.charAt(i) > "9")
      chkZ = -1;
  if (chkZ == -1) {
    alert("PLZ keine Zahl!");
    document.Formular.PLZ.focus();
    return false;
  }
  
  
