// JavaScript Document
function verif() 
{ 
	 
	if (document.form1.titre.value == "")
	{
		alert ('vous aver oublier de remplir le champ du titre');
		document.form1.titre.focus();
		return false;
	}
	if (document.form1.but_hackaton.value == "")
	{
		alert ('vous aver oublier de remplir le champ du but hackaton');
		document.form1.but_hackaton.focus();
		return false;
	}

}