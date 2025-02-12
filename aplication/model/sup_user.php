<?php
require_once('../config/connexion.php');

$get_id=$_GET['id'];

$sql = "Delete from personne where idC = '$get_id'";


$connexion->exec($sql);
echo "<script>alert('Supprime avec succee!'); window.location='../admin/utilisateur.php'</script>";
?>
