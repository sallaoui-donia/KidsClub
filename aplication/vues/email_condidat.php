
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<title>HACKATONS</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" /></head>
<script type="text/javascript" src="../contoles/c_hackton.js"></script>
<body >


<div id="menuadmn" >

		<div class="titre_adm">
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>CONDIDAT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="condidat.php">Acceuil </a></li>
		<li><a href="list_condidat.php">List Candidats </a></li>
		<li><a href="gagnion.php">Gagnant</a></li>
		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="email_condidat.php">Contacter </a></li>
		</ul>
		</div>
		<hr class="ligne">
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="../config/log_aout.php">Deconnexion</a></li>
		</ul>
		</div>
		<hr class="ligne">

</div>

<div id="mainadmin">
	<div id="recherche">
	  <form name="form" method="post" action="">
	   
	    <input name="textfield" type="text" size="40" class="iupt_rechr">
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			          <div style=" float:right; margin:0px;">
	    	           <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>
		<h1><em>Contacte</em></h1>

			<div id="centhh">
			<h4 class="h4">Ajouter Mails </h4> 
			<form name="form1" method="post" action="../model/add_mail_condidat.php" onSubmit="return verif();">
 
		  	<input name="date_heure" type="hidden" class="input_ins" id="date_heure" value="<?php echo $date=date("d/m/Y - H:i");?>" >
		 	<input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" placeholder="nom et prénom">
			<input name="adresse_mail" type="email" class="input_ins" id="adresse_mail" placeholder="Adresse mail">
			<textarea name="sujet" rows="6" class="input_ins" id="sujet" placeholder="Ajoute votre message"></textarea>
			

			
			
			
			  			  <button type="submit" value="submit" class="btn">valider</button><br>
  
			</form>

			</div>
			
	
	</div>

</div>

</body>
</html>

