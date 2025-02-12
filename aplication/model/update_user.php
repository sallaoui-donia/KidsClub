<?php

require_once('../config/connexion.php');
$get_id=$_REQUEST['id'];
$nom_prenom= $_POST['nom_prenom'];
$image="system/images/".$_POST['image'];
$telephone= $_POST['telephone'];
$adresse= $_POST['adresse'];
$ncin= $_POST['ncin'];
$email= $_POST['email'];
$dateN= $_POST['dateN'];
$pasword= $_POST['pasword'];
$id_statut= $_POST['id_statut'];


$sql = "UPDATE personne SET nom_prenom ='$nom_prenom',image='$image' ,telephone='$telephone',adresse='$adresse', ncin='$ncin',email ='$email', dateN ='$dateN', pasword ='$pasword', id_statut ='$id_statut'  WHERE id = '$get_id' ";

$connexion->exec($sql);
echo "<script>alert('Modifiee avec succee!'); window.location='../admin/utilisateur.php'</script>";


?>

 