<?php
	session_start();
	include('../config/connexion.php');

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

</div>
<div id="mainadmin">
	<div id="recherche">
	  <form name="form1" method="post" action="">
	   
			          <div style=" float:right; margin:0px;">
	    	         <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
      </form>
	</div>

			
			<div id="centh" style="height:450px;">
			<h4 class="h4">Enfants</h4> 
			<a class="btn_ajout" href="ajouter_enfant.php" style="text-decoration:none;">Ajouter</a>

			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
					<td width="5%">ID</td>
				<td width="16%">Nom et Prénom</td>
				<td width="19%">image </td>
				<td width="16%">sexe </td>
                  <td width="16%">daten</td>
                  <td width="16%">Classe</td>
        
				<td width="20%">Action</td>
							 <?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 3;
                                $id= $_SESSION['id'];
								$result = $connexion->prepare("SELECT * from enfant  WHERE id=$id LIMIT $start_from, 3");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['ide'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['ide']; ?></td>
				<td><?php echo $row['nom_prenom']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:180px; height:90px;"/></td>
				<td><?php echo $row['sexe']; ?></td>
				<td><?php echo $row['daten']; ?></td>
                  <td><?php echo $row['Classe']; ?></td>
               
				<td>
				<a href="modif_enfant.php?id=<?php echo $row['ide']; ?>"onClick="return confirm('Vous pouvez modifier ..!');"><img src="../../system/images/modifier.JPG"></a>
				<a  href="../model/sup_enfant.php?id=<?php echo $row['ide']; ?>" onClick="return confirm('attention cette operation ne peut pas etre recuperer');">
				<img src="../../system/images/suprimer.jpg"></a>		
				
				</td>
			  </tr>
			   <?php } ?>
			</table>
			<div id="pagination">
				<?php 
			
				$result = $connexion->prepare("SELECT COUNT(ide) FROM enfant");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records /8 ); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='enfantr.php?page=".$i."'";
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

</body>
</html>

