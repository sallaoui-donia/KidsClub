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
			<h4 class="h4">Modifeir Utilisatuer </h4> 
			<?php
					include('../config/connexion.php');
					$ID=$_GET['id'];
					$result = $connexion->prepare("SELECT * FROM personne where id='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['id'];
					?>
             
                
			<form name="form1" method="post" action="../model/update_user.php<?php echo '?id='.$id; ?>">
 
		  <input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" value="<?php echo $row['nom_prenom']; ?>"required>
               <img src="../../<?php echo $row['image']; ?>"  style="width:180px; height:90px;"/>
                  <input name="image" type="file" class="input_ins" id="image" >
		   <input name="telephone" type="number" class="input_ins" id="telephone" value="<?php echo $row['telephone']; ?>"required>
            <input name="adresse" type="text" class="input_ins" id="adresse" value="<?php echo $row['adresse']; ?>"required>  
                <input name="ncin" type="number" class="input_ins" id="ncin" value="<?php echo $row['ncin']; ?>"required> 
                <input name="dateN" type="date" class="input_ins" id="dateN" value="<?php echo $row['dateN']; ?>"required> 
		  <input name="email" type="email" class="input_ins" id="email" value="<?php echo $row['email']; ?>"required>
  <hr class="input_hr">
		 
			<input name="pasword" type="text" class="input_ins" id="pasword" value="<?php echo $row['pasword']; ?>"required>
			<p class="input_ins">
  			    <br>
  			    <label>
  			      <input type="radio" name="id_statut" value="2">
  			      Gérant</label>
  			    <br>
  			    <label>
  			      <input type="radio" name="id_statut" value="3">
  			      Parent</label>
  			    
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

