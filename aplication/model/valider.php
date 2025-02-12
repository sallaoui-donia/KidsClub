<?php
require_once('../config/connexion.php');
$get_id=$_REQUEST['ide'];
$validation= $_POST['validation'];


$sql = "UPDATE enfant SET validation ='$validation' WHERE ide = '$get_id' ";

$connexion->exec($sql);
echo "<script>alert('valide avec succée!'); window.location='../vues/valider_p.php'</script>"


?>
