
<?php
require_once('../config/connect.php');
$get_id=$_REQUEST['id'];
$valid= $_POST['valid'];


$sql = "UPDATE demade_etudiant SET valid ='$valid' WHERE id = '$get_id' ";

$base->exec($sql);
header('location:../admin/gagnant.php');


?>