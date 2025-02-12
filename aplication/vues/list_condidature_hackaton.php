
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IC</title>
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
		<img src="../../system/images/logo_adm.png" style="float:left;"><p>ESPACE<Br>CANDIDAT</p>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">INTERFACE</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="condidat.php">Acceuil </a></li>
		<li><a href="list_condidat.php">List Candidats </a></li>

		</ul>
		</div>
		<hr class="ligne">
		<h4 style="margin:10px;">ADDONS</h4>
		<div  class="menuvert">
			<nav class="vertical">
		<ul>
		<li><a href="email_condidat.php">Contact </a></li>
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
		

			<div id="centhh">
			<h4 class="h4">Recherche Hackaton</h4> 

	   <form name="form1" method="post" action="">
	 
	    <input name="code_hack" type="text" class="iupt_rechr" id="code_hack" size="40" >
		  			  <button type="submit" value="submit" class="logo_rechr">Recherche</button>
      
			<table width="95%" border="0" align="center" class="table">
			  <tr class="table">
			  	<td width="17%">Responsable</td>
				<td width="17%">Membre1</td>
				<td width="17%">Membre2</td>
				<td width="17%">Membre3</td>
				<td width="17%">Membre4</td>
				<td width="17%">description projet</td>
				<td width="18%">Titre</td>
				
			

				 <?php
								require_once('../config/connect.php');
								
								$titre=0;
								if (isset($_POST['titre']))
								{
									$titre=$_POST['titre'];
								}
								$result = $base->prepare("SELECT * FROM 
								hackaton INNER JOIN demade_etudiant
								ON  hackaton.id=demade_etudiant.id_hackaton 
								WHERE titre='$titre' && valid='1' ");
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
				
				<td></td>
			  </tr>
			   <?php } ?>
			</table>
			</form>
		
			
			</div>
		  </div>
  </div>
</div>

</body>
</html>

