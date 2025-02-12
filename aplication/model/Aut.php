

<?php
session_start();

	if (!(isset($_POST['email']) and  isset($_POST['pasword'])))
	{
		header('location:../../index.php');
		die();
	}
	
	$pasword=htmlspecialchars($_POST['pasword']);
	$email=htmlspecialchars($_POST['email']);
	
	include('../config/connexion.php');

	$reponse=$connexion->prepare('SELECT * from personne INNER JOIN statut ON personne.id_statut=statut.id_statut WHERE email=? AND pasword=?');
	$reponse->execute(array($email,$pasword));
$resultat=$reponse->fetch();
	
	if ($resultat==false)
	{
		header('location:../../index.php');
		die();
	}
	else
	{
		if ($resultat['droit']=="administrateur")
		{
            $_SESSION['id']='administrateur';
			$_SESSION['nom_prenom']=$resultat['nom_prenom'];
            $_SESSION['ncin']=$resultat['ncin'];
            $_SESSION['dateN']=$resultat['dateN'];
			header('location:../admin/admin.php');
			die();
		}
		

		if ($resultat['droit']=="gerant")
		{
			$_SESSION['id_statut']='gerant';
            $_SESSION['id']=$resultat['id'];
            $_SESSION['ncin']=$resultat['ncin'];
            $_SESSION['dateN']=$resultat['dateN'];
            $_SESSION['nom_prenom']=$resultat['nom_prenom'];
            $_SESSION['ncin']=$resultat['ncin'];
            $_SESSION['dateN']=$resultat['dateN'];
			header('location:../vues/membre.php?id='.$_SESSION['id']);
			die();
		}
		
		
		if ($resultat['droit']=="parent")
		{
			$_SESSION['id_statut']='parent';
                $_SESSION['id']=$resultat['id'];
            $_SESSION['ncin']=$resultat['ncin'];
            $_SESSION['dateN']=$resultat['dateN'];
            $_SESSION['nom_prenom']=$resultat['nom_prenom'];
            $_SESSION['ncin']=$resultat['ncin'];
            $_SESSION['dateN']=$resultat['dateN'];
			header('location:../vues/etudiant.php');
			die();
		}
		
	}
	header('location:../../index.php');
		die();

?>>


	
	

	header('location:../../index.php');
		die();

?>
