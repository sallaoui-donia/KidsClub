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
		<li><a href="hackatons.php">Gérer Hackathon</a></li>
		<li><a href="Gerer_demd_etud.php">Gérer candidatures etudiants</a></li>
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
	  
	   
	 
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/logo01.jpg" width="200" height="49">
	  				</div>
    
	</div>
	<div>
	<div id="centhh">
			<h4 class="h4">Gagnant</h4> 
			<?php
					include('../config/connect.php');
					$ID=$_GET['id'];
					$result = $base->prepare("SELECT * FROM demade_etudiant where id='$ID'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['id'];
					?>
			<form action="../model/prime_etudi.php<?php echo '?id='.$id; ?>" method="post" name="validation" id="validation">
 
		  <input name="code_hack" type="text" class="input_ins" id="code_hack" value="<?php echo $row['code_group']; ?>">
		 
		  <input name="responsable" type="text" class="input_ins" id="responsable" value="<?php echo $row['responsable']; ?>">
  <hr class="input_hr">
  <p class="input_ins">
  			    <label>
  			      <input name="valid" type="radio" value="10" checked  >
  			      First
  			    </label>
  			    <br>
	      <label>
  			      <input type="radio" name="valid" value="0">
  			      Autre
	      </label>
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


