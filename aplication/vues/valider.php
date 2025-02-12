<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IO</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />

<style type="text/css">
table {
	font-family: verdana,arial,sans-serif;
	font-size:12px;
	color:#333333;
	border-color: #666666;
    width:95%;
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br> ORGANISATEUR</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		
		<li><a href="gere_demande.php">gérer demandes Parents</a></li>
	
		</ul>
		</div>
		
		<div  class="menuvert">
			<nav class="vertical">
		
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
	    	          <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
    
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
			<form action="../model/valider.php<?php echo '?ide='.$id; ?>" method="post" name="validation" id="validation">
 
		  <input name="nom_prenom" type="text" class="input_ins" id="nom_prenom" value="<?php echo $row['nom_prenom']; ?>">
		 
		  <input name="daten" type="text" class="input_ins" id="daten" value="<?php echo $row['daten']; ?>">
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


