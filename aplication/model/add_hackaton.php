<?php
require_once('../config/connect.php');

$titre= $_POST['titre'];
$date_debut_participation=$_POST['date_debut_participation'];
$date_fin_participation= $_POST['date_fin_participation'];
$but_hackaton= $_POST['but_hackaton'];
$image="system/images/".$_POST['image'];
$description= $_POST['description'];
$date_debut_hackaton= $_POST['date_debut_hackaton'];
$heure_debut= $_POST['heure_debut'];
$date_fin_hackaton= $_POST['date_fin_hackaton'];
$heure_fin= $_POST['heure_fin'];
$lieu= $_POST['lieu'];
$organisateur= $_POST['organisateur'];
$aproopos= $_POST['aproopos'];
$validation= $_POST['validation'];



$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO hackaton (titre, date_debut_participation, date_fin_participation , but_hackaton ,image ,description ,date_debut_hackaton ,heure_debut ,date_fin_hackaton ,heure_fin ,lieu ,organisateur ,aproopos ,validation )
VALUES ('$titre', '$date_debut_participation', '$date_fin_participation' , '$but_hackaton' ,'$image' ,'$description' ,'$date_debut_hackaton' ,'$heure_debut' , '$date_fin_hackaton' ,'$heure_fin' ,'$lieu' ,'$organisateur' ,'$aproopos' ,'$validation')";

$base->exec($sql);
header('location:../admin/ajouter_hackaton.php');
?>