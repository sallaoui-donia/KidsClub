
		<?php   
$servername="localhost";
$username="root";
$password="";
$basename="kidsclub";
try
{
$connexion=new PDO ("mysql:host=$servername;dbname=$basename",$username,$password);
}
catch(PDOException $e){ echo "Connection failed:".$e->getMessage();
}
?>

	
