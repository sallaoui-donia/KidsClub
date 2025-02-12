<?php
	session_start();
	include('../config/connexion.php');

?>



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

<p>Bonjour <?php echo $_SESSION['nom_prenom']; ?></p>

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
			<h4 class="h4">Entre code hackathon et valider les candidatures</h4> 

	   <form name="form1" method="post" action="valider.php">
			    <input name="code_hack" type="text" class="iupt_rechr" id="code_hack" size="40" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>	       
     	<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
					<td width="5%">ID</td>
                  <td width="16%">Nom Club</td>
				<td width="16%">Nom et Prénom</td>
				<td width="19%">image </td>
				<td width="16%">sexe </td>
                  <td width="16%">daten</td>
                  <td width="16%">Classe</td>
                 <td width="17%">Action</td>

			 <?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 3;
                           
								$result = $connexion->prepare("SELECT * FROM 
								club INNER JOIN enfant
								ON club.id=enfant.id WHERE participation ='1'  LIMIT $start_from, 6");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['idC'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['ide']; ?></td>
				<td><?php echo $row['nom_prenom']; ?></td>
                  <td><?php echo $row['nom']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:180px; height:90px;"/></td>
				<td><?php echo $row['sexe']; ?></td>
				<td><?php echo $row['daten']; ?></td>
                  <td><?php echo $row['Classe']; ?></td>
                  
             <td><?php $v=$row['validation'];if($v==2) { echo 'Accepté';} elseif($v==0) { echo 'non traité';}else { echo 'réfusé';}?></td>
				
                <td><a href="valider.php?id=<?php echo $row['ide']; ?>"><img src="../../system/images/valider.png" width="26" height="26"></a></td>
                 
                
			  </tr>
			   <?php } ?>
			</table>

			

</div>

</body>
</html>

