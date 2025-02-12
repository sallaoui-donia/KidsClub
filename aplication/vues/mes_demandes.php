
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>ETUDIANT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="etudiant.php">Acceuil </a></li>
		<li><a href="demande_etudaint.php">Condidaté Hackatons </a></li>
		<li><a href="mes_demandes.php">Mes Demandes </a></li>
		<li><a href="resultat.php">Résultat </a></li>
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
	  
	   
	 
			          <div style=" float:right; margin:0px;">
	    	           <img src="../../system/images/logo11.png" width="200" height="49">
	  				</div>
    
	</div>
	<div>
		<h1>Mes Demandes </h1>

			<div id="centhh">
			<h4 class="h4">Recherche club</h4> 

	   <form name="form1" method="post" action="">
	    <input name="code_group" type="text" class="iupt_rechr" id="code_group" size="40" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
			       
      
			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
				<td width="5%">Code </td>
				<td width="18%">Titre</td>
				<td width="26%">date</td>
				<td width="17%">Lieu</td>
				<td width="17%">Afiche</td>
				<td width="17%">Déscription</td>
				<td width="17%">Etat</td>

				 <?php
								require_once('../config/connect.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 3;
								$code_group=0;
								if (isset($_POST['code_group']))
								{
									$code_group=$_POST['code_group'];
								}
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton
								WHERE code_group='$code_group' LIMIT $start_from, 3");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['titre']; ?></td>
				<td><?php echo $row['date_debut_participation']; ?></td>
				<td><?php echo $row['lieu']; ?></td>
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php $v=$row['validation'];if($v==1) { echo 'Accepter';} else { echo 'Refuser';}?></td>
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

