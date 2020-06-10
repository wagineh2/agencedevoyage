<?PHP
include "../../core/partenaireC.php";
$partenaireCvar=new partenaireC();
if (isset($_POST["id"])){
	$partenaireCvar->supprimerPartenaire($_POST["id"]);
	header('Location: tables.php');
}

?>