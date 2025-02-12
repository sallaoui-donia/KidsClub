<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IA</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />
<script type="text/javascript" src="../contoles/c_hackton.js"></script>

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
		<li><a href="Gerer_demd_etud.php">Gérer candidatures des parents</a></li>
		
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
	  <form name="form" method="post" action="">
	   
	   
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>

	<div id="centhh">
<h4 class="h4">Ajouter hackathon </h4> 
			
			 
			<form name="form1" method="post" action="../model/add_club_admin.php" onSubmit="return verif();">
			
 		  	<input name="code_club" type="hidden" class="input_date" id="code_club" value="1">
 		  	<input name="nom" type="text" class="input_ins" id="nom" placeholder="Nom" required>
 		  	<br>
 		  	<label>Date de Creation</label>
		 	<input name="date_creation" type="date" class="input_date" id="date_debut_participation" placeholder="Entrez Votre date de creation" required>
			<br><label>Adresse</label>
			<input name="adresse" type="text" class="input_date" id="date_fin_participation" placeholder="Entrez Votre Adresse" required>
			<input name="ville" type="text" class="input_ins" id="but_hackaton"placeholder="Entrez votre Ville" required>
			<textarea name="objective" rows="4" class="input_ins" id="description" placeholder="Entrez Votre objective" required></textarea>
			<input name="image" type="file" class="input_ins" id="image" placeholder="" required>
			<br>
			<label>Prix</label>
			<input name="prix" type="number" required class="input_date" id="date_debut_hackaton" placeholder="prix">
			<br>
			<label>Nom d'activité</label>
			<input name="nom_Activite" type="text" class="input_date" id="heure_debut"placeholder="Entrez nom d'activité de Club" required>
			<br>
			<input name="type_Activite" type="text" class="input_ins" id="lieu"placeholder="Type d'activité" required>
                
		
			<input name="validation" type="hidden" id="validation" value="0">

			
			
			
			  			  <button type="submit" value="submit" class="btn">valider</button><br>
  
			</form>

			</div>
			
	
	</div>

</div>

</body>
</html>

