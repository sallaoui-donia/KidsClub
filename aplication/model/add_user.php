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
                    				echo "<script>alert('Ajout avec succee!'); window.location='../admin/utilisateur.php'</script>";

               } else {
                 
				 echo "<script>alert('Adresse email déjà utilisée!');</script>";
               }
     
   }


?>