<head>
<Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
        <TITLE>Publicity (add) Page</TITLE> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>


<?PHP 
include "../core/sponsorsC.php";
$sponsorsCvar =new sponsorsC();
$listeSponsors=$sponsorsCvar->afficherSponsors();
?>
<center>
<div id="source0">

<table border="3">
<tr>
<td>ids</td>
<td>nomsponsor</td>
<td>telephone</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</div>

</center>
<?PHP
$sponsorsCvar =new sponsorsC();
if (isset($_GET['but8'])) 
{   
 if (empty($_GET['idd'])){
	$sponsorsCvar =new sponsorsC();
	$listeSponsors=$sponsorsCvar->afficherSponsors();
 }
 else {
 $idd= $_GET['idd'];
 $sponsorsCvar2 =new sponsorsC();
$listeSponsors=$sponsorsCvar2->afficherSponsors2($idd);
 }
}
else 
$listeSponsors=$sponsorsCvar->afficherSponsors();
?>
<?PHP
foreach($listeSponsors as $row){
	?>
	<tr>
	<td><?PHP echo $row['ids']; ?></td>
	<td><?PHP echo $row['nomsponsor']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><form method="POST" action="supprimerSponsors.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['ids']; ?>" name="ids">
	
	</form>
	</td>
	
	
	
	<td><a href="modifierSponsors.php?ids=<?PHP echo $row['ids']; ?>">
	Modifier</a></td>
	</tr>
	
	<?PHP
}
?>   
<form method="GET" >

<input type="text" name="idd" placeholder="Rechercher par identifiant" >
		  <input type="submit"  name="but8" value="Rechercher " >	
</form>



<?PHP 

?>
</table>