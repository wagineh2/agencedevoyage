<?PHP
include "../core/sponsorsC.php";
$sponsorsCvar=new sponsorsC();
if (isset($_POST["ids"])){
	$sponsorsCvar->supprimerSponsors($_POST["ids"]);
	header('Location: tables.php');
}

?>