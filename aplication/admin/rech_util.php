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
	  <form name="form1" method="post" action="rech_util.php">
	   
	    <input name="recherch" type="text" class="iupt_rechr" id="recherch" size="40">
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/logg.png" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div>
		<h1> Gérer Utilisateurs</h1>

			<div id="centhh">
			<h4 class="h4">List des Utilisateurs </h4> 
			

			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
					<td width="5%">ID</td>
				<td width="16%">Nom et Prénom</td>
				<td width="19%">image</td>
				<td width="16%">telephone </td>
                  <td width="18%">adresse </td>
                  <td width="16%">ncin </td>
                  <td width="16%">dateN </td>
                  <td width="18%">email </td>
                   <td width="18%">Motpasse </td>
				<td width="17%">Action</td>
				 <?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 10;
								$recherch=0;
								if (isset($_POST['recherch']))
								{
									$recherch=$_POST['recherch'];
								}
								$result = $connexion->prepare("SELECT * FROM personne WHERE nom_prenom like \"%$recherch%\" LIMIT $start_from, 10");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
			<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nom_prenom']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:180px; height:90px;"/></td>
				<td><?php echo $row['telephone']; ?></td>
                  <td><?php echo $row['adresse']; ?></td>
				<td><?php echo $row['ncin']; ?></td>
				<td><?php echo $row['dateN']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['pasword']; ?></td>
							   <?php } ?>
				<td><a href="mod_util.php?id=<?php echo $row['id']; ?>"><img src="../../system/images/modifier.JPG"></a>
				<a  href="../model/sup_user.php?id=<?php echo $row['id']; ?>" onClick="return confirm('attention cette operation ne peut pas etre recuperer');"><img src="../../system/images/suprimer.JPG"></a>
				</td>
			  </tr>
			 
			</table>
			<div id="pagination">
				<?php 
			
				$result = $connexion->prepare("SELECT COUNT(id) FROM  personne");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 10); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='utilisateur.php?page=".$i."'";
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

