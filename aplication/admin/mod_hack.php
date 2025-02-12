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
		<li><a href="Gerer_demd_etud.php">Gérer candidatures de parents</a></li>
		<li><a href="gagnant.php">Gagnant</a></li>
		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="list_mail.php">Contacter </a></li>
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
	   
	    <input name="textfield" type="text" size="40" class="iupt_rechr">
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>

						<div id="centhh">
			<h4 class="h4">Modifier Club</h4> 
			<?php
					include('../config/connexion.php');
					$ID=$_GET['id'];
					$result = $connexion->prepare("SELECT * FROM club where id='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['id'];
					?>
					
			<form action="../model/modif_club.php<?php echo '?id='.$id; ?>" method="post" name="validation" id="validation">
 
		  
		 
	<input name="code_hack" type="hidden" class="input_date" id="code_club" value="1">
		  <input name="nom" type="text" class="input_ins" id="nom" placeholder="Nom" value="<?php echo $row['nom']; ?>" required>
 		  	<br>
 		  	<label>Date de Creation</label>
		 	<input name="date_creation" type="date" class="input_date" id="date_debut_participation" placeholder="Entrez Votre date de creation" value="<?php echo $row['date_creation']; ?>"required>
			<br><label>Adresse</label>
			<input name="adresse" type="text" class="input_date" id="date_fin_participation" placeholder="Entrez Votre Adresse" value="<?php echo $row['adresse']; ?>"required>
			<input name="ville" type="text" class="input_ins" id="but_hackaton"placeholder="Entrez votre Ville" value="<?php echo $row['ville']; ?>"required>
			<textarea name="objective" rows="4" class="input_ins" id="description"  value="<?php echo $row['objective']; ?>"required></textarea>
			<input name="image" type="file" class="input_ins" id="image" placeholder=""  required>
			<br>
			<label>Prix</label>
			<input name="prix" type="number" required class="input_date" id="date_debut_hackaton"value="<?php echo $row['prix']; ?>" placeholder="prix">
			<br>
			<label>Nom d'activité</label>
			<input name="nom_Activite" type="text" class="input_date" id="heure_debut" value="<?php echo $row['nom_Activite']; ?>"required>
			<br>
			<input name="type_Activite" type="text" class="input_ins" id="lieu" value="<?php echo $row['type_Activite']; ?>"required>
                
			<input name="validation" type="hidden" id="validation" value="1">

  			  <button type="submit" value="submit" class="btn">valider</button><br>
 

 <?php } ?>
</form>

			</div>
			
	
	</div>

</div>

</body>
</html>