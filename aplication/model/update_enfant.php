

<?php
session_start();
include('../config/connexion.php');
if(isset($_POST['save'])) {
$get_id=$_REQUEST['id'];
$nom_prenom= $_POST['nom_prenom'];
$image="system/images/".$_POST['image'];
$sexe=$_POST['sexe'];
$classe= $_POST['Classe'];
$daten= $_POST['daten'];




$sql = "UPDATE  enfant SET nom_prenom='$nom_prenom' , image='$image' ,sexe='$sexe' , Classe='$classe' , daten='$daten' WHERE ide = '$get_id'";




$connexion->exec($sql);
echo "<script>alert('Modifiée avec succeé!'); window.location='../vues/enfant.php'</script>";
}

?>
