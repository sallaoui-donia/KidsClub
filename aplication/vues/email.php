<?php
	session_start();
	include('../config/connexion.php');

?>

<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IE</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />

<style type="text/css">
table {
	font-family: verdana,arial,sans-serif;
	font-size:12px;
	color:#333333;
	border-color: #666666;
    width:100%;
}

 td {
    text-align: left;
    border-bottom: 2px solid #ddd;  
}
 tr:nth-child(even) {background-color: #f2f2f2;}
</style>

</head>

<body >
              
<p>Bonjour <?php echo $_SESSION['nom_prenom']; ?></p>

  

<div id="menuadmn" >

		<div class="titre_adm">
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>PARENT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="parent.php">Acceuil</a></li>
      <li><a href="enfant.php">Gérer la liste de vos enfants</a></li>
		<li><a href="demande_parent.php">Gérer les inscriptions de vos enfants</a></li>
		<li><a href="resultat.php">Etats candidatures</a></li>
		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="email.php">Contacter </a></li>
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
	   
			          <div style=" float:right; margin:0px;">
	    	            <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>
		

			<div id="centhh">
			<h4 class="h4">AJOUTER MAIL : </h4> 
			<form name="form1" method="post" action="../model/add_email.php" onSubmit="return verif();">
 
		  	<input name="date_heure" type="hidden" class="input_ins" id="date_heure" value="<?php echo $date=date("d/m/Y - H:i");?>" >
		 	<input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" placeholder="nom et prénom" required>
			<input name="adresse_mail" type="email" class="input_ins" id="adresse_mail" placeholder="Adresse mail" required>
			<textarea name="sujet" rows="6" class="input_ins" id="sujet" placeholder="Ajoute votre message" required></textarea>
			

			
			
			
			  			  <button type="submit" value="submit" class="btn">valider</button><br>
  
			</form>

			</div>
			
	
	</div>

</div>

</body>
</html>

