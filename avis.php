<?PHP
require 'header.php' ;
 require '_header.php';
	if (isset($_GET['id']))
{
	$offre = $DB->query('SELECT * FROM offre WHERE id =:id', array('id' => $_GET['id'])) ;
}
?>
<body>
	
					   <?PHP
					
					foreach($offre as $of):
					?>
	<div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="offres/<?= $of->photo; ?>" />
                        </div>
                        <h3> Nom d'offre :<?PHP echo $of->nom_offre;  ?></h3>
						<h3> Nom du sponsor :<?PHP echo $of->nom_sponsor;  ?></h3>
						<h3> La Destination :<?PHP echo $of->destination;  ?></h3>
						<form method="post" action="AjouterComment.php" align="center">
					Noter /5  <input type="number" value="" name="note" required="" min="1" max="5" align="center">
							<br>
					<textarea type="text" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="" align="center">Comment...</textarea>
							<br>
					<input type="submit" value="Submit Now" align="center">
					</form>
                    </div>
                </div>

						
	<?PHP
          endforeach; 
	?>
       
			</div>
			</div>
		</div>
	
	


	
<?PHP
require 'footer.php'
?>