<?php
require_once('../config/connexion.php');
$get_id=$_REQUEST['ide'];
$participation= $_POST['participation'];


$sql = "UPDATE enfant SET participation ='$participation' WHERE ide= '$get_id' ";

$connexion->exec($sql);
echo "<script>alert('valide avec succée!'); window.location='../vues/condidate.php'</script>"


?>
