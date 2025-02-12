<html lang="fr"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="file:///C|/system/images/logo_adm.png" type="image/png">
<title>IE</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding:0px;
  border-bottom: 1px solid #ddd;
  
}
tr:nth-child(even) {background-color: #f2f2f2;}

 
</style>
</head>
<body >

	   
	    
			          <div style=" float:right; margin:0px;">
	    	          <img src="../../system/images/log.jpg">
	  				</div>
  
								<a  href="aplication/vues/connection.php" class="bt">se connecter</a>
								<a  href="aplication/vues/inscription.php" class="bt">s'inscrire</a>
					
		

<div id="centhh">
			<h4 class="h4">Liste hackathons inter Isi KEF</h4> 
	

						<table width="100%" border="0"  class="gridtable">
			  <tr class="table">
				
				<td width="18%">Titre</td>
				<td width="17%">But Hackathon</td>
				<td width="26%">Description </td>
				<td width="26%">Date debut de candidater </td>
				<td width="26%">Date fin de candidater </td>
				<td width="26%">Date de hackathon </td>
				<td width="26%">Lieu </td>
				<td width="26%">Organisateur </td>
				<td width="40%">Affiche</td>
				 <?php
								require_once('../config/connect.php');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
								$start_from = ($page-1) * 6;
								$result = $base->prepare("SELECT * FROM hackaton WHERE  code_hack=1 || validation ='2'  LIMIT $start_from, 6");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				
				<td><?php echo $row['titre']; ?></td>
				<td><?php echo $row['but_hackaton']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['date_debut_participation']; ?></td>
				<td><?php echo $row['date_fin_participation']; ?></td>
				<td><?php echo $row['date_debut_hackaton']; ?></td>
				<td><?php echo $row['lieu']; ?></td>
				<td><?php echo $row['organisateur']; ?></td>
				
				<td><img src="../../<?php echo $row['image']; ?>"  style="width:120px; height:70px;"/></td>
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
							echo "<a href='hackathons.php?page=".$i."'";
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


