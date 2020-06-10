<?PHP 
require 'header.php';
 require '_header.php';
?>

<div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Nos offre</h3>
                       
                    </div>
                </div>
            </div>
			
            <div class="row">
              
	<?PHP $offre = $DB->query('SELECT * FROM offre') ;  ?>
			<?PHP foreach ( $offre as  $of) :?>
   <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                             <img src="offres/<?= $of->photo;?>" alt="">
                        </div>
                        <div class="content">
                             <p class="d-flex align-items-center"><?PHP echo $of->nom_offre; ?> <a href="avis.php?id=<?= $of->id; ?>">Note</a>  </p>
                            
                        </div>
                    </div>
                </div>
	<?PHP endforeach ?>
            </div>
        </div>
    </div>

<?PHP 
require "footer.php" 
?>