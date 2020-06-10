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
include"../entities/sponsors.php" ;
include"../core/sponsorsC.php";
if(isset($_GET['ids']))
{

$sponsorsCvar= new sponsorsC();
$result=$sponsorsCvar->recupererSponsors($_GET['ids']);
foreach($result as $row)
{
$ids=$row['ids'];
$nomsponsor=$row['nomsponsor'];
$telephone=$row['telephone'];

?>
<form method="POST">
<table>
<caption>Modifier Sponsors</caption>
<tr>
<td>ids</td>
<td><input type="number" name="ids" value="<?PHP echo $ids ?>"></td>
</tr>
<tr>
<td>nomsponsors</td>
<td><input type="text" name="nomsponsor" value="<?PHP echo $nomsponsor?>"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="number" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['ids'];?>"></td>
</tr>
</table>
</form>
<?PHP 
}
}
else{
	echo'er !';
}
if(isset($_POST['modifier']))
{
$sponsorsvar=new sponsors($_POST['ids'],$_POST['nomsponsor'],$_POST['telephone']);
$sponsorsCvar->modifierSponsors($sponsorsvar,$_POST['id_ini']);
echo $_POST['id_ini'];
header('Location: tables.php');
}
?>
</body>
</HTML>
