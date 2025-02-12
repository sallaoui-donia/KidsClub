
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
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../../system/images/signin.jpg" alt="sing up image"></figure>
                        <a href="inscription.php" class="signup-image-link">Créer compte</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Se connecter</h2>
                        <form  class="register-form" id="login-form" method="post" action="../model/Aut.php" onSubmit="return verif();" required>
                             <div class="form-group">
                                <div class="col-xs-6">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre email"   value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"    required/>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pasword" id="your_pass" placeholder="Mot de passe"    value="<?php if (isset($_POST['pasword'])) echo htmlentities(trim($_POST['pasword'])); ?>"   required/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="S'identifier"required/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Ou connectez-vous avec</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>  
    </body>
    </html>