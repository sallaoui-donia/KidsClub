
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<title>HACKATONS</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />


</head>

<body >


<div id="menuadmn" >

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
	  
	   
	 
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg" width="200" height="49">
	  				</div>
    
	</div>
	<div>
		<h1>Les Demandes </h1>

			<div id="centhh">
			<h4 class="h4">List Demande Accepter</h4> 

	   <form name="form1" method="post" action="">

			       
      	<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
			  	<td width="17%">Responsable</td>
				<td width="17%">Mombre1</td>
				<td width="17%">Mombre2</td>
				<td width="17%">Mombre3</td>
				<td width="17%">Mombre4</td>
				<td width="17%">Propositionb</td>
				<td width="18%">Titre</td>
				<td width="26%">date</td>
				<td width="17%">Lieu</td>
				<td width="17%">Déscription</td>

				 <?php
								require_once('../config/connect.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 3;
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton
								WHERE validation=1 
								 LIMIT $start_from, 3");
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
				<td><?php echo $row['titre']; ?></td>
				<td><?php echo $row['date_debut_participation']; ?></td>
				<td><?php echo $row['lieu']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td></td>
			  </tr>
			   <?php } ?>
			</table>
			</form>
			<div id="pagination">
				<?php 
			
				$result = $base->prepare("SELECT COUNT(id) FROM  hackaton");
				$result->execute(); 
				$row = $result->fetch(); 
				$total_records = $row[0]; 
				$total_pages = ceil($total_records / 3); 
				  
				for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='condidate.php?page=".$i."'";
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

