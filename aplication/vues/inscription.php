  <?php

include('../config/connexion.php');

if(isset($_POST['save'])) {

  $nom_prenom= $_POST['nom_prenom'];
    $image="system/images/".$_POST['image'];
      $telephone= $_POST['telephone'];
      $adresse= $_POST['adresse'];
      $ncin= $_POST['ncin'];
     $dateN= $_POST['dateN'];
$email=$_POST['email'];
$pasword= $_POST['pasword'];
$id_statut= $_POST['id_statut'];
         $reqmail = $connexion->prepare("SELECT * FROM personne WHERE email = ?");
               $reqmail->execute(array($email));
               $emailexist = $reqmail->rowCount();
               if($emailexist == 0) {
                     $insertmbr = $connexion->prepare("INSERT INTO personne(nom_prenom,image,telephone,adresse,ncin,dateN,email,pasword,id_statut) VALUES(?,?,?,?,?,?,?,?,?)");
                     $insertmbr->execute(array($nom_prenom,$image,$telephone,$adresse,$ncin,$dateN,$email,$pasword,$id_statut));
                    				 echo "<script>alert('Votre compte a bien été créé!');</script>";

               } else {
                 
				 echo "<script>alert('Adresse email déjà utilisée!');</script>";
               }
     
   }

?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width-device-width, initial-scale=1">
<title>inscription</title>
 <!-- Font Icon -->
<link rel="stylesheet" href="../../system/fonts/material-icon/css/material-design-iconic-font.min.css">
     <!-- Main css -->
<link rel="stylesheet" type="text/css" href="../../system/csslogin/style.css" />

</head>
<body>
    
    
 <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">S'inscrire</h2>
                        <form  class="register-form" id="register-form" method="post" action="" onSubmit="return verif();" >
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
                    <div class="signup-image">
                        <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Téléchargez une autre photo ...</h6>
                            
          
                            
        <input type="file"name="image" class="text-center center-block file-upload"required/>
      </div></hr><br>
                       
                    </div>
                 </form>
                    
                </div>
            </div>
            </body>
            </html>