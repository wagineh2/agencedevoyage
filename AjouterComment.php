<?PHP
include "User.php" ;
include "UserC.php" ;
require 'header.php';
require '_header.php';
require "C:/wamp/www/agence/Back/core/loginC.php" ;
		if (!isset($_SESSION['l']) && !isset($_SESSION['p'])) 
{
echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=ajoutclient.php">'; 
}			
						
$id_client= $_SESSION['i'];
$Userr= new loginC();
	$listeAbonementt=$Userr->rechercherclients($id_client);
	while($donnee=$listeAbonementt->fetch())
{
	
		$email = $donnee['email'];  
	
}
	$Avis=new Avis($id_client,$email,$_POST['note'],$_POST['comment']);
$AvisC=new AvisC() ;
$AvisC->AjouterAvis($Avis) ;



?>