
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<title>Kid'sClub</title>
<link rel="stylesheet" type="text/css" href="system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="system/css/bt.css" />
<style>
.mySlides {display: none;width:100%; z-index:0; position: absolute;}
#menu{background:rgba(0,0,0,0.2); width:100%; height:80px; z-index:1;top:0px; position:absolute;}
.mn{background:rgba(0,0,0,0.01); color:#FFFFFF; width:100%; height:60px; z-index:2;top:410px; position: absolute; text-align:center;}
/* Slideshow container */
.slid {
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #fff;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 40px;
  width: 100%;
  text-align: center;
}
.tab{ z-index:0;margin:0 auto;}

</style>

</head>

<body >
<div id="entet">

<div class="slid">

						<div class="mySlides">
						  <img src="system/images/hero_3.jpg" style="width:100%; height:600px">
						  	<div class="text" > <div style="font-family: fantasy;">Bienvenue sur notre site</div>
          					<h1  style="color:#fff; font-size:20px;  font-family: emoji;">Apportez une vie amusante à vos enfants</h1>
		  					</div>
						</div>
						
						<div class="mySlides">
						  <img src="system/images/hero_1.jpg" style="width:100%; height:600px">
						  <div class="text"><div style="font-family: fantasy;color: #ffc107;">Aire de jeux incroyable pour vos enfants</div>
          					<h1  style="color:#fff; font-size:16px;">Trouvez et participez à des clubs a vos enfants</h1>
						  </div>
						</div>
						
						<div class="mySlides">
						  <img src="system/images/hero_2.jpg" style="width:100%; height:600px">
						  	<div class="text"><div style="font-family: fantasy;">Toute la Tunisie</div>
          					<h1  style="color:#fff; font-size:16px;font-family: emoji;">Le Kids club c'est le spécialiste des activités d'éveil et de jeu pour les enfants et leur parents !</h1>
		  					</div>
						</div></div>

						<div id="menu">
						<img src="system/images/logo11.png" style=" float:left;text-align:center;margin-block-start: 1em;
    margin-block-end: 0em;">
								<ul style="font-family: emoji;" >
								<li ><a href="#">Accueil</a></li>
								<li><a href="#FAQ">Nos Activités</a></li>
                                    <li><a href="#clubs">Les kid'sClub</a></li>
								<li><a href="#apropos">A propos</a></li>
								<li><a href="#contact">Contact</a></li>
								</ul>
						</div>
						<div class="mn">
								<a  href="aplication/vues/connection.php" class="bt"style="font-family:emoji">se connecter</a>
								<a  href="aplication/vues/inscription.php" class="bt" style="background-color: #0033cc;font-family:emoji;">s'inscrire</a>
						</div>
</div>
<br>


<script>

	var myIndex = 0;
					carousel();
					
					function carousel() {
						var i;
						var x = document.getElementsByClassName("mySlides");
						for (i = 0; i < x.length; i++) {
						  x[i].style.display = "none";  
						}
						myIndex++;
						if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
						setTimeout(carousel, 1300);    
					}
</script>
</div>
<div id="FAQ" style="background:#FFFFFF;" >
	<div id="Gmenu" style="background:#FFFFFF;">
			<div class="menuG"style="background:#FFFFFF;">
	<img src="system/images/jeux.PNG"></img><br>
		<h3 style="font-size:24px; text-align:center;margin-block-start: 0em;
    margin-block-end: 0em;color: #16c3b0;">Jeux d'intérieur</h3>
			</div>
	<div class="menuG"style="background:#FFFFFF;">
	<img src="system/images/jeux3.png"></img><br>
		<h3 style="font-size:24px; text-align:center;margin-block-start: 0em;
    margin-block-end: 0em;color: #71bc42!important;">Jeu et événement en plein air</h3>
	  </div>
			<div class="menuG"style="background:#FFFFFF;">
	<img src="system/images/jeux2.PNG"></img><br>
		<h3 style="font-size:24px; text-align:center;margin-block-start: 0em;
    margin-block-end: 0em;color: #dc3545!important;">Camping pour les enfants</h3>
			</div>
			
	
	</div>
	
	<div id="Presentation">
        
			 <div align="center"><img src="system/images/pp.png"></div>
        
			<div class="pp2" style="background-image:url(system/images/img_1.jpg); background-repeat:no-repeat; background-size: cover;"></div>
			
		
                <div class="pp">
                    <h3 style="font-size:36px; text-align:center; margin-top:100px;font-family: emoji "><span>DANSE</span><br></h3> <p class="p" style=" text-align:center;font-family: emoji;">L’éveil et l’initiation à la danse développent chez l’enfant une sensibilité artistique, l'apprentissage psychomoteur en même temps que le développement de l'imaginaire. Il permet à la fois d’extérioriser l’énergie du corps et d’acquérir concentration et détente.Il s'agit surtout pour les enfants d'être bien dans leurs corps… et leurs tutus !</p>
            </div>  
			


			
			<div class="pp" style="background-image:url(system/images/img_4.jpg); background-repeat:no-repeat; background-size: cover;"></div>
			
			   <div class="pp">
                    <h3 style="font-size:36px; text-align:center; margin-top:100px;font-family: emoji "><span>EVEIL THEATRE</span><br></h3> <p class="p" style=" text-align:center;font-family: emoji;">Dans un esprit ludique d’expression corporelle, les enfants vont travailler leur respiration, leur voix (chantée et parlée), leur élocution, le travail sur scène, l’improvisation, l’expression de leurs émotions, l’utilisation de l’espace et la relaxation. Ils vont développer l’affirmation de soi, l’écoute, la mémoire, le contrôle de la timidité et l’imagination</p>
            </div>  
			<div class="pp2" style="background-image:url(system/images/img_5.jpg); background-repeat:no-repeat; background-size: cover;"></div>
			
   <div class="pp">
                    <h3 style="font-size:36px; text-align:center; margin-top:100px;font-family: emoji "><span>EVEIL KARATE</span><br></h3> <p class="p" style=" text-align:center;font-family: emoji;">L'Eveil karaté pour enfants est basé sur des apprentissages moteurs et le développement harmonieux du corps. Dans un cadre ludique,. Cette discipline favorise le développement de leur concentration, la maîtrise de soi, la confiance en soi, les relations sociales mais aussi bien sûr le plaisir de découvrir, d’apprendre et de grandir en s’amusant !</p>
            </div>  
</div> 



<div id="apropos">
			  <div align="center"><img src="system/images/titre00.png"></div>
			
			
								<div class="event">
												<div class="day"><img src="system/images/dd.png"></div>
						
														
														
													
													<div class="event-content"> 
												
														<h1 class="titr" style="font-family: fantasy;color: #ffc107;">Apportez une vie amusante à vos enfants</h1>
														<p class="texte"style="color: #495057; font-size:20px;  font-family: emoji;">Le Kids Club offre un large choix d’activités extra scolaires ludiques et pédagogiques animées par des profs expérimentés et diplômés. Qu’elles soient sportives, artistiques, ou linguistique, nos activités s’adaptent à tous les âges et tous les niveaux. Nouveau, découvrez nos formules afterschool pour accueillir les enfants après l'école.</p>
								  </div>
  </div>
    <div id="clubs">
								  
			  <div align="center"><img src="system/images/03.png"></div>

  <div>
  
    <table width="800" border="0" align="center">
      <tr>
        <td>&nbsp;</td>
      </tr>
	   <?php
								require_once('aplication/config/connexion.php');
								
								$result = $connexion->prepare("SELECT * FROM club LIMIT 1");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['idC'];
		?>
      <tr>
        <td width="800" height="400" valign="top" ><div class="evnt">
      <img src="<?php echo $row['image']; ?>" width="800" height="400" />   
      <div  class="event_text"> 
        <?php echo $row['nom']; ?><br><?php echo $row['nom_Activite']; ?><br><?php echo $row['ville']; ?><br><a  href="#suite" class="bt"> Lire la suite</a></div>
      </div></td>
      </tr>
		<?php } ?>
    </table>
  </div>
			  <div align="center"><img src="system/images/titre044.png"></div>
			
			<table width="600" border="0" align="center">
			 <tr>
			   
		      </tr>
			   <?php
										require_once('aplication/config/connexion.php');
										
										$result = $connexion->prepare("SELECT * FROM club LIMIT 4");
										$result->execute();
										for($i=0; $row = $result->fetch(); $i++){
										$id=$row['idC'];
				?>
			 
			  <tr>
				<td width="800" align="center"><img src="<?php echo $row['image']; ?>"  style="border-radius:60px; width:120px; height:120px;"/></td>
			    <td width="800" valign="top"><?php echo $row['nom']; ?></td>
			    <td width="800" valign="top"><?php echo $row['nom_Activite']; ?><?php echo $row['ville']; ?></td>
			 <?php } ?>
			  </tr>
			</table>
  </div>

</div>




<div id="contact">
			<div> 
			<p style="text-align:center"><img src="system/images/titre05.png"></p>
			</div>
			<div class="row">
			<div class="cols">
				<form action="aplication/model/contact_index.php" method="post">
                      <div>
						 <input name="date_heure" type="hidden"  id="date_heure"  value="<?php echo $date=date("d/m/Y - H:i");?>">
					  </div>
					  <div>
						 <input name="nom_prenom" type="text" class="input" id="nom_prenom" size="60" placeholder="Nom et Prenom">
					  </div>
					  <div>
						 <input name="adresse_mail" type="email" class="input" id="adresse_mail" size="60" placeholder="Adresse mail">
					  </div>
					  <div>
					  <textarea name="sujet" cols="60" rows="6" class="input" id="sujet" placeholder="Votre message"></textarea>
					  </div>
					  <div>
					  <button type="submit" value="submit" class="btn btn-primary">Envoyer</button><br>
					  </div>
				  </form>
			  </div>
			</div>
			
		
</div>


<div id="pied">

						
								<ul>
									<li ><a href="#">Accueil</a></li>
								<li><a href="#FAQ">Nos Activités</a></li>
                                    <li><a href="#clubs">Les kid'sClub</a></li>
								<li><a href="#apropos">A propos</a></li>
								<li><a href="#contact">Contact</a></li>
								</ul>
						

</div>

</body>
</html>

