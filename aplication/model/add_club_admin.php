<?php
include('../config/connexion.php');

$code_club=$_POST['code_club'];
$nom= $_POST['nom'];
$date_creation=$_POST['date_creation'];
$adresse= $_POST['adresse'];
$ville= $_POST['ville'];
$image="system/images/".$_POST['image'];
$objective= $_POST['objective'];
$prix= $_POST['prix'];
$nom_Activite= $_POST['nom_Activite'];
$type_Activite= $_POST['type_Activite'];
$validation= $_POST['validation'];


$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO club (code_club,nom, date_creation,adresse,ville,image,objective,prix ,nom_Activite,type_Activite,validation)
VALUES ('$code_club','$nom','$date_creation','$adresse' ,'$ville' ,'$image' ,'$objective' ,'$prix' ,'$nom_Activite','$type_Activit',$validation)";
$connexion->exec($sql);



echo "<script>alert('Ajout avec succee!'); window.location='../admin/clubs.php'</script>";
?>