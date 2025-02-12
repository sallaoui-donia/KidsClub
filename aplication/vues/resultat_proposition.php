
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
	<div>
		<h1>Mes Demandes </h1>

			<div id="centhh">
			<h4 class="h4">Recherche Candidature</h4> 
		

	   <form name="form1" method="post" action="">
	    <input name="nom" type="text" class="iupt_rechr" id="code_hack" size="40" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			       
      
			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
				<td width="5%">id </td>
				<td width="18%">nom</td>
				<td width="18%">adresse</td>
				<td width="17%">nom_Activité</td>
				<td width="17%">image</td>
				<td width="40%">type_Activité</td>
				<td colspan="2">Etat</td>
			<?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 3;
								$id= $_SESSION['id'];
								if (isset($_POST['nom']))
								{
									$nom=$_POST['nom'];
								}
								$result = $connexion->prepare("SELECT * from club
								WHERE  nom='$nom' LIMIT $start_from, 3");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['idC'];
                                    
                                    ?>
				
			  </tr>
			  <tr>
				<td><?php echo $row['idC']; ?></td>
				<td><?php echo $row['nom']; ?></td>
				<td><?php echo $row['adresse']; ?></td>
				<td><?php echo $row['nom_Activite']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/></td>
				<td><?php echo $row['type_Activite']; ?></td>
				<td width="17%"><?php $v=$row['validation'];if($v==2) { echo 'Accepté';} elseif($v==0) { echo 'non traité';}else { echo 'réfusé';}?></td>
				
				<td width="17%"><?php $v=$row['validation'];if($v==2) { echo '<a href="gere_demande.php" style="text-decoration:none;" class="btn_ajout">Gérant</a>';} else { echo '';}?></td>
			  </tr>
			   <?php } ?>
			</table>
			</form>
			<div id="pagination">
				<?php 
			
				$result = $connexion->prepare("SELECT COUNT(idC) FROM  club WHERE nom='$nom'");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 3); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='mes_hackaton.php?page=".$i."'";
							if($page==$i)
							{
							echo "id=active";
							}
							echo ">";
							echo "".$i."</a> "; 
				}; 
				?>
				
		
			</div>
                
                
                
                
                
                
			
			</div>
		  </div>
  </div>
</div>

</body>
</html>

