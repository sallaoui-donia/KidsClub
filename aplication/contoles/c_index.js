// JavaScript Document
function verif() 
{ 
	 
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

}