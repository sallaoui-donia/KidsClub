  <?php
session_start(); 
include('../config/connexion.php');

if(isset($_POST['save'])) {

  $nom_prenom= $_POST['nom_prenom'];
    $image="system/images/".$_POST['image'];
      $sexe= $_POST['sexe'];
     $daten= $_POST['daten'];
$classe=$_POST['Classe'];
$id= $_SESSION['id'];
      
$sql = "INSERT INTO enfant (nom_prenom,image, sexe,daten,Classe,id)
VALUES ('$nom_prenom','$image','$sexe','$daten' ,'$classe','$id')";
$connexion->exec($sql);
	echo "<script>alert('Ajouté avec succée!'); window.location='../Vues/enfant.php'</script>";
     
   }


?>