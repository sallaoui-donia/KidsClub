<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IA</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />


</head>

<body >

<div id="menuadmn" >

		<div class="titre_adm">
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br> ADMINISTARTION</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
			<li><a href="admin.php">Acceuil </a></li>
		<li><a href="utilisateur.php">Gérer Utilisateur </a></li>
		<li><a href="clubs.php">Gérer clubs</a></li>
		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="lesmails.php">Contacter </a></li>
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
	  <form name="form1" method="post" action="">
	   
	
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>

			<div id="centhh">
			<h4 class="h4">Validation</h4> 
			<?php
					include('../config/connexion.php');
					$ID=$_GET['id'];
					$result = $connexion->prepare("SELECT * FROM club where idC='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['idC'];
					?>
			<form action="../model/valid_club.php<?php echo '?idC='.$id; ?>" method="post" name="validation" id="validation">
 
		  <input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" value="<?php echo $row['nom']; ?>">
		 
		  <input name="email" type="text" class="input_ins" id="email" value="<?php echo $row['date_creation']; ?>">
  <hr class="input_hr">
  <p class="input_ins">
  			    <label>
  			      <input name="validation" type="radio" value="2" checked  >
  			      Accepté </label>
  			    <br>
	      <label>
  			      <input type="radio" name="validation" value="3">
  			      Réfusé</label>
	      <br>
		   <label>
  			      <input type="radio" name="validation" value="0">
  			     non traité </label>
		  
   		      </p>
  			  <button type="submit" value="submit" class="btn">valider</button><br>
  

 <?php } ?>
</form>

			</div>
			
	
	</div>

</div>

</body>
</html>


