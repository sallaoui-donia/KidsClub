
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IC</title>
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>CONDIDAT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		
		<li><a href="list_condidat.php">List Candidats </a></li>
		<li><a href="gagnion.php">Gagnant</a></li>
		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="email_condidat.php">Contacter </a></li>
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
	    	          <img src="../../system/images/logo01.jpg" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>
	

			<div id="centhh">
			<h4 class="h4">List de hackathons</h4> 

			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
				<td width="17">Responsable</td>
				<td width="26%">But Hackaton</td>
				<td width="17%">Titre</td>
				<td width="17%">Affiche</td>
				<td width="17%">Prime</td>
				<?php
								require_once('../config/connect.php');
							
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton WHERE valid ='10'" );
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				<td valign="top"><?php echo $row['responsable']; ?></td>
				<td valign="top"><?php echo $row['but_hackaton']; ?></td>
				<td valign="top"><?php echo $row['titre']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/></td>
				<td><?php $v=$row['valid'];if($v==10) { echo '<img src="../../system/images/first.png" width="40" height="40">';} else { echo 'Autre';}?></td>
				
			  </tr>
			   <?php } ?>
			</table>
			
		  </div>
	
	</div>

</div>

</body>
</html>

