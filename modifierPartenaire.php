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
include"../../entities/partenaire.php" ;
include"../../core/partenaireC.php";
if(isset($_GET['id']))
{
$partenaireCvar= new partenaireC();
$result=$partenaireCvar->recupererPartenaire($_GET['id']);
foreach($result as $row)
{
$id=$row['id'];
$nom=$row['nom'];
$adresse=$row['adresse'];
$numero=$row['numero'];

?>
<form method="POST">
<table>
<caption>Modifier Partenaire</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero ?>"></td>
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
$partenairevar=new partenaire($_POST['id'],$_POST['nom'],$_POST['adresse'],$_POST['numero']);
$partenaireCvar->modifierPartenaire($partenairevar,$_POST['id_ini']);
echo $_POST['id_ini'];
header('Location: tables.php');
}
?>
</body>
</HTML>
