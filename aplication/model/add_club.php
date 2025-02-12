<?php
include('../config/connexion.php');
session_start();

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
$id= $_SESSION['id'];





$sql = "INSERT INTO club (code_club,nom, date_creation,adresse,ville,image,objective,prix ,nom_Activite,type_Activite,validation,id)
VALUES ('$code_club','$nom','$date_creation','$adresse' ,'$ville' ,'$image' ,'$objective' ,'$prix' ,'$nom_Activite','$type_Activite',$validation,$id)";
$connexion->exec($sql);
	echo "<script>alert('Ajouté avec succée!'); window.location='../Vues/mes_clubs.php'</script>";


?>