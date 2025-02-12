<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IO</title>
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br> ORGANISATEUR</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		
		<li><a href="gere_demande.php">gérer demandes d'etudiants</a></li>
		<li><a href="list_gagnion.php">Gagnant</a></li>
		</ul>
		</div>
		
		<div  class="menuvert">
			<nav class="vertical">
		
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
	    	          <img src="../../system/images/logo01.jpg" width="200" height="49">
	  				</div>
    
	</div>
	<div>
	
			<div id="centhh">
			<h4 class="h4">list candidats</h4> 

	   <form name="form1" method="post" action="">
			    <input name="code_hack" type="text" class="iupt_rechr" id="code_hack" size="40" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>	       
      	<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
                <td width="top">Id</td> 
				<td width="top">Responsable</td>
				<td width="top">Membre1</td>
				<td width="top">Membre2</td>
				<td width="top">Membre3</td>
			<td width="top">Membre4</td>
			<td width="top">Description</td>
				<td width="top">Prime</td>
				
				<td width="top">Action</td>
<?PHP //var_dump('test'); 	?>
				 <?php
							
								require_once('../config/connect.php');
								
								//$code_hack=0;
								if (isset($_POST['code_hack']))
								{
									$code_hack=$_POST['code_hack'];
								
							
								//var_dump($code_hack);
								//die;
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton
								WHERE code_hack='$code_hack'");
								$result->execute();
								
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
			  </tr>
			  <tr>
				
			
			<td valign="top"><?php echo $row['id']; ?></td>
				<td valign="top"><?php echo $row['responsable']; ?></td>
				<td valign="top"><?php echo $row['membre1']; ?></td>
				<td valign="top"><?php echo $row['membre2']; ?></td>
				<td valign="top"><?php echo $row['membre3']; ?></td>
				<td valign="top"><?php echo $row['membre4']; ?></td>
				<td valign="top"><?php echo $row['description_projet']; ?></td>
				
				<td><?php $v=$row['valid'];if($v==10) { echo '<img src="../../system/images/first.png" width="40" height="40">';} else { echo 'Autre';}?></td>
				<td><a href="prime_hack.php?id=<?php echo $row['id']; ?>"><img src="../../system/images/valider.png" width="26" height="26"></a></td>
				 
			  </tr>
			  </tr>
			   <?php }
			   } ?>
		 </table>
			</form>
			
			
			</div>
		  </div>
  </div>
</div>

</body>
</html>

