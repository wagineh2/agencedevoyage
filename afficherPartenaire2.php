<head>
<Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
        <TITLE>crud Partenaire</TITLE> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>


<?PHP 
include "../core/partenaireC2.php";
$partenaireCvar2 =new partenaireC2();
$listePartenairee2=$partenaireCvar2->afficherPartenairee2();
?>
<center>
<div id="source0">

<table border="3">
<tr>
<td>id</td>
<td>Debut Contrat </td>
<td>Fin Contrat</td>
<td>Nature Contrat</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</div>

</center>

<?PHP
foreach($listePartenairee2 as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['debutContrat']; ?></td>
	<td><?PHP echo $row['finContrat']; ?></td>
	<td><?PHP echo $row['natureContrat']; ?></td>
	<td><form method="POST" action="supprimerPartenaire2.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	
	
	
	<td><a href="modifierPartenaire2.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>