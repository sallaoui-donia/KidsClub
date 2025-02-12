

<?php
include('../config/connexion.php');

$get_id=$_REQUEST['idC'];
$nom= $_POST['nom'];
$image="system/images/".$_POST['image'];
$date_creation=$_POST['date_creation'];
$adresse= $_POST['adresse'];
$ville= $_POST['ville'];
$objective= $_POST['objective'];
$prix= $_POST['prix'];
$nom_Activite= $_POST['nom_Activite'];
$type_Activite= $_POST['type_Activite'];
$validation= $_POST['validation'];




$sql = "UPDATE  club SET nom='$nom' , image='$image' ,date_creation='$date_creation' , adresse='$adresse' , ville='$ville',objective='$objective' , prix='$prix' , nom_Activite='$nom_Activite' ,type_Activite='$type_Activite' , validation='$validation' WHERE id = '$get_id'";




$connexion->exec($sql);
echo "<script>alert('Modifiée avec succeé!'); window.location='../vues/clubsG.php'</script>";


?>

