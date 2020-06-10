<?PHP
require "header.php" ;
require '_header.php' ;
if (isset($_GET['id']))
{
	$product = $DB->query('SELECT id FROM res WHERE id =:id', array('id' => $_GET['id'])) ;
	if(empty($product)) 
	{
		die("ce reservation n'existe pas") ;
	}
	$panier->add($product[0]->id) ;
}
?>
<section class="page-wrapper success-msg" align="centre">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        	<i class="tf-ion-android-checkmark-circle"></i>
          <h2 class="text-center" align="center">Thank you! For your confidence</h2>
          <a href="index.php" class="btn btn-main mt-20">Continue</a>
        </div>
      </div>
    </div>
  </div>
</section>
	</body>
	</html>

<?PHP
require "footer.php" ;
?>