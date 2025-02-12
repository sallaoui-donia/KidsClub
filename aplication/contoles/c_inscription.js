// JavaScript Document
function verif() 
{ 
	 
	if (document.form1.nom_prenom.value == "")
	{
		alert ('vous aver oublier votre nom_prenom');
		document.form1.nom_prenom.focus();
		return false;
	}
	if (document.form1.log.value == "")
	{
		alert ('vous aver oublier votre login');
		document.form1.log.focus();
		return false;
	}
	if (document.form1.pasword.value == "")
	{
		alert ('vous aver oublier votre pasword');
		document.form1.pasword.focus();
		return false;
	}
	if (document.form1.email.value == "")
	{
		alert ('vous aver oublier votre pasword');
		document.form1.email.focus();
		return false;
	}


}