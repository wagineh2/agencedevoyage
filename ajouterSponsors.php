<?PHP
include "../entities/sponsors.php";
include "../core/sponsorsC.php";

if (isset($_POST['ids']) and isset($_POST['nomsponsor']) and isset($_POST['telephone']) )
{
    $ids=$_POST['ids'];
    $nomsponsor=$_POST['nomsponsor'];
    $telephone=$_POST['telephone'];
    
    $sponsorsvar = new sponsors($ids,$nomsponsor,$telephone);
    $sponsorsCvar= new sponsorsC() ;
    $sponsorsCvar->ajouterSponsors($sponsorsvar);
    header('Location: tables.php');
}
    else{
        echo "verifier les champs";
    }

?>