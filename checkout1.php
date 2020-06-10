<?php
require 'header.php';
require '_header.php';
//require_once "connexion.php" ;
require_once "C:/wamp64/www/agence/agence/Back/core/commandeC.php"; 
include "C:/wamp64/www/agence/agence/Back/entites/commande.php"; 

if(!isset($_SESSION['panier']))
{
header('Location:index.php');
}

if (!isset($_SESSION['l']) && !isset($_SESSION['p'])) 
{
echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=ajoutclient.php">'; 
}
if(isset($_GET['ajout_id']))
  {
		$id_client=$_SESSION['l'];
        $dateCommande= date("Y-m-d");
        $prix_total=$_SESSION['prix_total'];
	  $test=true;
    if($test==true)
	{
				$id_produit=$_SESSION['product_id'];
          $commande =new commande($id_client,$dateCommande,$prix_total,$id_produit);
                $c= new CommandeC();       
                $c->ajoutercommandes($commande);
   				unset($_SESSION['panier']);
		
		
		//mysqli_query($con,$sql_add_author) ;

	}
}
?>
<body>
	<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">nombre du personne</th>
                      <th class="">prix</th>
                    </tr>
                  </thead>
                  <tbody>
					 <tr>
                          <?php
						 $quantity=0;
						 ?>
						 <?php
   								$ids=array_keys($_SESSION['panier']);
   										if(empty($ids))
   														{
											$products=array();
   											}else{
   											$products=$DB->query('SELECT * FROM res WHERE id IN('.implode(',',$ids).')');
   														}
   										foreach ($products as $product):
 								?>
                          <td><?= $product->nb?></td>
                          <td><?= $product->price ?>D</td>

                        </tr>
                        
                        <?php endforeach; ?>
                  </tbody>
					 <tfoot>
				 <tr>
                          <th>Total</th>
                          <td><?= $panier->total();?>D</td>
                        </tr>
						  </tfoot>
							
				
                </table>
					 <a href="checkout1.php?ajout_id=true" class="btn btn-main pull-right">Place order</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php require 'footer.php';
?>