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
	  <form name="form1" method="post" action="rech_club.php">
	   
	    <input name="recherch" type="text" class="iupt_rechr" id="recherch" size="40">
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/logo01.jpg">
	  				</div>
      </form>
	</div>
	<div>
		

			<div id="centhh">
			<h4 class="h4">Demandes De Gérants</h4> 
			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
				<td width="5%">ID</td>
				<td width="18%">nom</td>
				<td width="17%">date_creation</td>
				<td width="26%">adresse </td>
				<td width="20%">image</td>
				<td width="17%">ville</td>
                  <td width="17%">objective</td>
                   <td width="17%">prix</td>
                  <td width="17%">nom_Activité</td>
                  <td width="17%">type_Activité</td>
				<td width="17%">Action</td>
				 <?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 3;
								$result = $connexion->prepare("SELECT * FROM club WHERE idC<>1 LIMIT $start_from, 3");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['idC'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['idC']; ?></td>
				<td><?php echo $row['nom']; ?></td>
				<td><?php echo $row['date_creation']; ?></td>
				<td><?php echo $row['adresse']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:180px; height:90px;"/></td>
                  <td><?php echo $row['ville']; ?></td>
                  <td><?php echo $row['objective']; ?></td>
                  <td><?php echo $row['prix']; ?></td>
                  <td><?php echo $row['nom_Activite']; ?></td>
                  <td><?php echo $row['type_Activite']; ?></td>
				<td><?php $v=$row['validation'];if($v==2) { echo 'Accepté';} elseif($v==0) { echo 'non traité';}else { echo 'réfusé';}?></td>
				
                <td><a href="valid_club.php?id=<?php echo $row['idC']; ?>"><img src="../../system/images/valider.png" width="26" height="26"></a></td>
                 
                
			  </tr>
			   <?php } ?>
			</table>
			<div id="pagination">
				<?php 
			
				$result = $connexion->prepare("SELECT COUNT(idC) FROM  club");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 3); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='clubs.php?page=".$i."'";
							if($page==$i)
							{
							echo "idC=active";
							}
							echo ">";
							echo "".$i."</a> "; 
				}; 
				?>
			</div>
			

</div>

</body>
</html>

