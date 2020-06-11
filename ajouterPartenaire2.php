<?PHP
include "../entities/partenaire2.php";
include "../core/partenaireC2.php";

if (isset($_POST['id']) and isset($_POST['debutContrat']) and isset($_POST['finContrat']) and isset($_POST['natureContrat']) )
{

    $id=$_POST['id'];
    $debutContrat =$_POST['debutContrat'];
    $finContrat=$_POST['finContrat'];
    $natureContrat=$_POST['natureContrat'];
   
    
    $partenairevar2 = new partenaire2($id,$debutContrat,$finContrat,$natureContrat);
    $partenaireCvar2= new partenaireC2() ;
    $partenaireCvar2->ajouterPartenaire2($partenairevar2);
    Var_dump($partenairevar2);
    //header('Location: tables2.php');
    die("ghghj");
}
    else{
        echo "verifier les champs";
    }

?>