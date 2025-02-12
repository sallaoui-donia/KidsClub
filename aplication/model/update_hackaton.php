<?php
require_once('../config/connect.php');
$get_id=$_REQUEST['id'];
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

$sql = "UPDATE hackaton SET titre='$titre' , date_debut_participation='$date_debut_participation' , date_fin_participation='$date_fin_participation' , but_hackaton='$but_hackaton' ,image='$image' ,description='$description' , date_debut_hackaton='$date_debut_hackaton' , heure_debut='$heure_debut' , date_fin_hackaton='$date_fin_hackaton' , heure_fin='$heure_fin' , lieu='$lieu' , organisateur='$organisateur' , aproopos='$aproopos' , validation='$validation'  WHERE id = '$get_id' ";

$base->exec($sql);
header('location:../vues/hackatons.php');


?>

