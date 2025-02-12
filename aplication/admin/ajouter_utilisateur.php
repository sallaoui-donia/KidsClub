<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="icon" href="../../system/images/logo_adm.png" type="image/png">
<title>IA</title>
<link rel="stylesheet" type="text/css" href="../../system/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../../system/css/menu.css" />
 <link rel="stylesheet" type="text/css" href="../../system/csslogin/style.css" />
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
		<li><a href="lesmails.php">Contacter </a></li>
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

	<div>
		

			<div id="centhh" style="height: 950px;">
			<h4 class="h4">Ajouter Utilisateur</h4> 
	
 
		 <form  class="register-form" id="register-form" method="post" action="../model/add_user.php" onSubmit="return verif();" >

             
             
                 <div class="signup-image">
                        <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Téléchargez une autre photo ...</h6>
                            
          
                            
        <input type="file"name="image" class="text-center center-block file-upload"required/>
      </div></hr><br>
                       
                    </div>
             
                            <div class="form-group">
                                <div class="col-xs-6">
                                
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom_prenom" id="name" placeholder="Votre nom"required/>
                            </div>
                              </div> 
                         
                            <div class="form-group">
                                <div class="col-xs-6">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre email"required/>
                            </div>
                            </div>
                       
                            
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                               <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                              <input type="text" class="form-control" name="telephone" id="phone" placeholder="Entrez le téléphone" title="enter your phone number if any."required/>
                          </div>
                      </div>
                            <div class="form-group">
                          <div class="col-xs-6">
                             <label for="ncin"><i class = "zmdi zmdi-card"> </i></label>
                              <input type="number" class="form-control" name="ncin" id="mobile" placeholder="Entrez votre numéro de carte d'identité" title="enter your mobile number if any."required/>
                          </div>
                      </div>    <div class="form-group">
                          <div class="col-xs-6">
                             <label for="date"><i class = "zmdi zmdi-calendar"> </i></label>
                              <input type="date" class="form-control" name="dateN" id="date" placeholder="Entrez votre date de naissance" title="enter your mobile number if any."required/>
                          </div>
                      </div>
                            
                             <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="adresse"><i class = "zmdi zmdi-home"> </i></label>
                              <input type="text" name="adresse" class="form-control" id="location" placeholder="Entrez votre adresse" title="enter a location">
                          </div>
                      </div>
                            <div class="form-group">
                                 <div class="col-xs-6">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pasword" id="pass" placeholder="Mot de passe"required/>
                                </div></div>
                 
                            <div class="form-group">
                                
                                <input type="radio" name="id_statut" value="2" class="agree-term"required />
                                <label  class="label-agree-term">
                                    Gérant</label></div>
                                <div class="form-group">
                                    <input type="radio" name="id_statut" id="agree-term" value="3" class="agree-term"required />
                                <label  class="label-agree-term">
                                  Parent</label>
                                
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="save" id="signup" class="form-submit" value="Register"/>
                            </div>
              
                    </div>
                  
                 </form>
                    

			</div>
			
	
	</div>

</div>

</body>
</html>

