<?php
require_once('../config/connexion.php');
$get_id=$_REQUEST['idC'];
$validation= $_POST['validation'];


$sql = "UPDATE club SET validation ='$validation' WHERE idC = '$get_id' ";

$connexion->exec($sql);
echo "<script>alert('valide avec succée!'); window.location='../admin/clubs.php'</script>"


?>

