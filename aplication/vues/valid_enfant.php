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
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" /></head>

<body >


<div id="menuadmn" >

		<div class="titre_adm">
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>ETUDIANT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="etudiant.php">Acceuil </a></li>
		<li><a href="demande_etudaint.php">Candidater </a></li>
		<li><a href="resultat.php">Liste Candidatures </a></li>
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
	  <form name="form1" method="post" action="">
	  
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>
    
			<div id="centhh">
			<h4 class="h4">Validation</h4> 
			<?php
					include('../config/connexion.php');
					$ID=$_GET['id'];
					$result = $connexion->prepare("SELECT * FROM enfant where ide='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['ide'];
					?>
			<form action="../model/valid_enfant.php<?php echo '?ide='.$id; ?>" method="post" name="participation" id="participation">
 
		  <input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" value="<?php echo $row['nom_prenom']; ?>">
		 
		  <input name="daten" type="text" class="input_ins" id="daten" value="<?php echo $row['daten']; ?>">
  <hr class="input_hr">
  <p class="input_ins">
  			    <label>
  			      <input name="participation" type="radio" value="0" checked  >
  			      Enfant </label>
  			    <br>
	      <label>
  			      <input type="radio" name="participation" value="1">
  			     Enfant Ajouteé</label>
	      <br>
		  
		  
   		      </p>
  			  <button type="submit" value="submit" class="btn">valider</button><br>
  

 <?php } ?>
</form>

			</div>
			
	
	</div>

</div>

</body>
</html>


