<HTML>
<head>

<Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
        <TITLE>Modifier Crud </TITLE> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>


</head>
<body>
<?PHP
include"../../entities/partenaire2.php" ;
include"../../core/partenaireC2.php";
if(isset($_GET['id']))
{
$partenaireCvar2= new partenaireC2();
$result=$partenaireCvar2->recupererPartenaire2($_GET['id']);
foreach($result as $row)
{
$id=$row['id'];
$debutContrat=$row['debutContrat'];
$finContrat=$row['finContrat'];
$natureContrat=$row['natureContrat'];

?>
<form method="POST">
<table>
<caption>Modifier Contrat</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Debut Contrat</td>
<td><input type="date" name="debutContrat" value="<?PHP echo $debutContrat ?>"></td>
</tr>
<tr>
<td>Fin Contrat</td>
<td><input type="date" name="finContrat" value="<?PHP echo $finContrat ?>"></td>
</tr>
<tr>
<td>Nature Contrat</td>
<td><input type="text" name="natureContrat" value="<?PHP echo $natureContrat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP 
}
}
if(isset($_POST['modifier']))
{
$partenairevar2=new partenaire2($_POST['id'],$_POST['debutContrat'],$_POST['finContrat'],$_POST['natureContrat']);
$partenaireCvar2->modifierPartenaire2($partenairevar2,$_POST['id_ini']);
echo $_POST['id_ini'];
header('Location: tables2.php');
}
?>
</body>
</HTML>
