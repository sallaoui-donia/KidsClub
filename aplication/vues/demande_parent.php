
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IA</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" /></head>

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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>Parent</p>
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
	<div>
	<div id="centhh">
        
          <form name="form1" method="post" action="resultatRech.php">
	    <input name="ville" type="text" class="iupt_rechr" id="ville" size="40" placeholder="Entre ville" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
        
	<h4 class="h4">LISTE DE CLUBS :</h4> 
		

						<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
			<td width="top">nom</td>
				<td width="top">Date de Creation</td>
				<td width="top">Adresse </td>
				<td width="top">Ville </td>
				
				<td width="top">Objective </td>
				<td width="top">prix </td>
				<td width="top">nom_Activite </td>
				<td width="top">type_Activite</td>
                  <td width="top"> image</td>
				<td width="17%">Action</td>
				 <?php
								require_once('../config/connexion.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 6;
								$result = $connexion->prepare("SELECT * FROM club WHERE   validation ='2'  LIMIT $start_from, 6");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['nom']; ?></td>
				<td><?php echo $row['date_creation']; ?></td>
				<td><?php echo $row['adresse']; ?></td>
				<td><?php echo $row['ville']; ?></td>
				<td><?php echo $row['objective']; ?></td>
				<td><?php echo $row['prix']; ?></td>
				<td><?php echo $row['nom_Activite']; ?></td>
				<td><?php echo $row['type_Activite']; ?></td>
				
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/></td>
							   
				<td><a href="Condidate.php?id=<?php echo $row['id']; ?>" style="text-decoration:none;" class="btn_ajout">Candidater</a></td>
                  <?php } ?>
			  </tr>
			 
			</table>
			<div id="pagination">
				<?php 
			
				$result = $connexion->prepare("SELECT COUNT(idC) FROM  club");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 6); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='demande_etudaint.php?page=".$i."'";
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
