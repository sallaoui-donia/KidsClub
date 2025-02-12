<?php
	session_start();
	include('../config/connexion.php');
					$ID=$_GET['id'];
					$result = $connexion->prepare("SELECT * FROM enfant where ide='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['ide'];
				





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

</div><div id="mainadmin">
            
<div id="centhh">
<h4 class="h4">MODIFIER LES INFORMATIONS DE VOTRE ENFANT :</h4> 
			
			 
			<form name="form1" method="post" action="../model/update_enfant.php<?php echo '?id='.$id; ?>"onSubmit="return verif();">
                	<label>Nom de votre enfant</label>
			<input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" value="<?php echo $row['nom_prenom']; ?>" required>
 		  	<br>
                <label>Sexe  :</label><br><br>
		 	<input type="radio" name="sexe" value="f">Masculin<br>
             <input type="radio" name="sexe" value="m">Féminin
                <br>
			<br><label>Classe</label>
			<input name="Classe" type="text" class="input_ins" id="Classe" value="<?php echo $row['Classe']; ?>"required>
			<br><label>Date de naissance</label>
			<input name="daten" type="date" required class="input_date" id="date_debut_hackaton" value="<?php echo $row['daten']; ?>">
			<br>
            <img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/> 
		<input name="image" type="file" class="input_ins" id="image" placeholder="" required>
                <label>Parent</label>
			<input name="nom_pernom" type="text" class="input_ins" id="nom_prenom" value=" <?php echo $_SESSION['nom_prenom']; ?>" required>
          
			
			<?php } ?>
			  			   <input type="submit" name="save" id="signup" class="btn" value="Register"/>
  
			</form>

			</div>
			
	
	</div>

</div>

</body>
</html>

	
			
			
			
			
			
			
			
			
	

			