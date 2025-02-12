<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IA</title>
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br> ADMINISTARTION</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="admin.php">Acceuil </a></li>
		<li><a href="utilisateur.php">Gérer Utilisateur </a></li>
		<li><a href="hackatons.php">Gérer clubs</a></li>
		<li><a href="Gerer_demd_etud.php">Gérer candidatures Parents</a></li>
	
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
	<div>
		</div>
<div id="mainadmin">
	<div id="recherche">
	  
	   
	 
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg" width="200" height="49">
	  				</div>
    
	</div>
	<div>
		

			<div id="centhh">
			 			<h4 class="h4">Liste de candidats</h4> 


	   <form name="form1" method="post" action="">
	 
	    <input name="code_hack" type="text" class="iupt_rechr" id="code_hack" size="40" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
      
			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
			  	<td width="17%">Responsable</td>
				<td width="17%">Membre1</td>
				<td width="17%">Membre2</td>
				<td width="17%">Membre3</td>
				<td width="17%">Membre4</td>
				<td width="17%">description projet</td>
				<td width="top">Etat</td>
				<td width="top">Action</td>
				
			

				 <?php
								require_once('../config/connect.php');
								
								$titre=0;
								if (isset($_POST['titre']))
								{
									$titre=$_POST['titre'];
								}
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton 
								WHERE titre='$titre' && code_hack='1' ");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['responsable']; ?></td>
				<td><?php echo $row['membre1']; ?></td>
				<td><?php echo $row['membre2']; ?></td>
				<td><?php echo $row['membre3']; ?></td>
				<td><?php echo $row['membre4']; ?></td>
				<td><?php echo $row['description_projet']; ?></td>
							<td valign="top"><?php $v=$row['valid'];if($v==1) { echo 'Accepté';} elseif($v==0) { echo 'non traité';} else { echo 'Refusé';}?></td>
				<td valign="top"><a href="accepter_demande_etud.php?id=<?php echo $row['id']; ?>"><img src="../../system/images/valider.png" width="26" height="26"></a></td> 
				
				
			  </tr>
			   <?php } ?>
			</table>
			</form>
		
			
			</div>
		  </div>
  </div>
</div>

</body>
</html>


