
 <?php
	session_start();
	include('../config/connexion.php');

?>



<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IM</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />

<style type="text/css">
table {
	font-family: verdana,arial,sans-serif;
	font-size:12px;
	color:#333333;
	border-color: #666666;
    width:90%;
}

 td {
    text-align: left;
    border-bottom: 2px solid #ddd;  
}
 tr:nth-child(even) {background-color: #f2f2f2;}
</style>

</head>

<body >

<div id="menuadmn" >

		<div class="titre_adm">
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br> MEMBRE</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="membre.php">Acceuil </a></li>
		<li><a href="clubsG.php"> Gérer Club</a></li>
		<li><a href="mes_clubs.php"> Mes demandes </a></li>
		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="mail_membre.php">Contacter </a></li>
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
		<hr class="ligne">

</div>

<div id="mainadmin">
	<div id="recherche">
	  
	   
	 
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
    
	</div>
		


						<div id="centhh">
			<h4 class="h4">MODIFIER CLUB</h4> 
			<?php
					include('../config/connexion.php');
					$ID=$_GET['id'];
					$result = $connexion->prepare("SELECT * FROM club where idC='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['idC'];
					?>
					
			<form action="../model/modif_club.php"<?php echo '?idC='.$id; ?>"" method="post" name="validation" id="validation">
 
		  
		  <input name="nom" type="text" class="input_ins" id="nom" placeholder="Nom" value="<?php echo $row['nom']; ?>" required>                                                                                                      
 		  	<br>
 		  	<label>Date de Creation</label>
		 	<input name="date_creation" type="date" class="input_date" id="date_debut_participation" placeholder="Entrez Votre date de creation" value="<?php echo $row['date_creation']; ?>"required>
			<br><label>Adresse</label>
			<input name="adresse" type="text" class="input_date" id="date_fin_participation" placeholder="Entrez Votre Adresse" value="<?php echo $row['adresse']; ?>"required>
			<input name="ville" type="text" class="input_date" id="but_hackaton"placeholder="Entrez votre Ville" value="<?php echo $row['ville']; ?>"required>
		<br>
               <img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/> 
			<input name="image" type="file" class="input_date" id="image" placeholder=""  required>
                <br>
			<label>Objective</label>
                <input name="objective" type="text" class="input_date" id="objective"placeholder="" value="<?php echo $row['objective']; ?>"required>
                
                	
             <br>
			<label>Prix</label>
			<input name="prix" type="number" required class="input_date" id="date_debut_hackaton"value="<?php echo $row['prix']; ?>" placeholder="prix">
			<br>
			<label>Nom d'activité</label>
			<input name="nom_Activite" type="text" class="input_date" id="heure_debut" value="<?php echo $row['nom_Activite']; ?>"required>
			<br>
				<input name="type_Activite" type="text" class="input_date" id="heure_debut" value="<?php echo $row['type_Activite']; ?>"required>
                
			<input name="validation" type="hidden" id="validation" value="1">

  			  <button type="submit" value="submit" class="btn">valider</button><br>
 

 <?php } ?>
</form>

			</div>
			
	
	</div>

</div>

</body>
</html>