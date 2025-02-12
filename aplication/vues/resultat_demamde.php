
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>ETUDIANT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="parent.php">Acceuil</a></li>
      <li><a href="demande_parent.php">Gérer la liste de vos enfants</a></li>
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
	   
	    <input name="textfield" type="text" size="40" class="iupt_rechr">
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg" width="200" height="49">
	  				</div>
      </form>
	</div>
	<div id="centhh">
		<h4 class="h4">Ajouter hackathon </h4>

						<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
				<td width="5%">ID</td>
				<td width="18%">responsable</td>
				<td width="17%"> membre1</td>
				<td width="26%">description de projet</td>
				<td width="17%"></td>
				<td width="17%">Etat</td>
				 <?php
								require_once('../config/connect.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 6;
								$code_group=0;
								if (isset($_POST['code_group']))
								{
									$code_group=$_POST['code_group'];
								}
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton
								WHERE code_group='$code_group' LIMIT $start_from, 6");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['responsable']; ?></td>
				<td><?php echo $row['membre1']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/></td>
				<td><?php $v=$row['valid'];if($v==1) { echo '<a href="list_condidat.php" style="text-decoration:none;" class="btn_ajout">Accepte</a>';} elseif($v==0) { echo 'non traite';}else { echo 'refuse';}?></td>
			  </tr>
			  
			   <?php } ?>
			</table>
			<div id="pagination">
				<?php 
			
				$result = $base->prepare("SELECT COUNT(id) FROM  hackaton");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 6); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='resultat.php?page=".$i."'";
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

