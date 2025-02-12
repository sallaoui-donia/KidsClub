<?php
require_once('../config/connect.php');

$code_group= $_POST['code_group'];
$responsable=$_POST['responsable'];
$membre1= $_POST['membre1'];
$membre2= $_POST['membre2'];
$membre3= $_POST['membre3'];
$membre4= $_POST['membre4'];
$description_projet= $_POST['description_projet'];
$id_hackaton= $_POST['id_hackaton'];
$valid= $_POST['valid'];

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO demade_etudiant (code_group, responsable, membre1 , membre2 , membre3 , membre4 ,description_projet ,id_hackaton,valid )
VALUES ('$code_group', '$responsable', '$membre1' ,'$membre2' ,'$membre3' ,'$membre4' ,'$description_projet' ,'$id_hackaton' ,'$valid')";

$base->exec($sql);
	echo "<script>alert('candidate avec succeé!'); window.location='../vues/demande_etudaint.php'</script>";


?>