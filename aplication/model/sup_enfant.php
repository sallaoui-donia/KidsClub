<?php
require_once('../config/connexion.php');

$get_id=$_GET['id'];

$sql = "Delete from enfant where ide = '$get_id'";


$connexion->exec($sql);
echo "<script>alert('Supprime avec succee!'); window.location='../vues/enfant.php'</script>";
?>
