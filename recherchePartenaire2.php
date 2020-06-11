<?PHP
include "../core/partenaireC2.php";
$partenaireCvar2=new partenaireC2();
if (isset($_POST["id"])){
	$partenaireCvar2->supprimerPartenaire2($_POST["id"]);
	header('Location: afficherPartenaire2.php');
}

?>