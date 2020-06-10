<?PHP
include "../core/partenaireC.php";
$partenaireCvar=new partenaireC();
if (isset($_POST["id"])){
	$partenaireCvar->supprimerPartenaire($_POST["id"]);
	header('Location: afficherPartenaire.php');
}

?>