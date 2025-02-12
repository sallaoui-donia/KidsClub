
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<title>HACKATONS</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />


</head>

<body >

div id="menuadmn" >

		<div class="titre_adm">
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br> ORGANISATEUR</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="organisateur.php">Acceuil </a></li>
		<li><a href="list_demande_etudiant.php">List demade</a></li>
		<li><a href="gere_demande.php">Gérer Demande </a></li>
		<li><a href="list_gagnion.php">Ganiion </a></li>
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
	  <form name="form1" method="post" action="">
	   
	    <input name="textfield" type="text" size="40" class="iupt_rechr">
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/logo00.png" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>
		<h1> Contactes</h1>


			<div id="centh">
			<h4 class="h4">Liste Contactes</h4> 

			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
				<td width="5%">ID</td>
				<td width="18%">Date et heure </td>
				<td width="17%">Nom et Prénom</td>
				<td width="17%">Adresse mail </td>
				<td width="17%">Sujet</td>
				 <?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 6;
								$result = $connexion->prepare("SELECT * FROM mail LIMIT $start_from, 6");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['date_heure']; ?></td>
				<td><?php echo $row['nom_prenom']; ?></td>
				<td><?php echo $row['adresse_mail']; ?></td>
				<td><?php echo $row['sujet']; ?></td>
			  </tr>
			   <?php } ?>
			</table>
			<div id="pagination">
				<?php 
			
				$result = $connexion->prepare("SELECT COUNT(id) FROM  mail");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 6); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='list_mail.php?page=".$i."'";
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

