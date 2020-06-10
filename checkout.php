<?php require 'header.php';
require '_header.php';
if (isset($_GET['del']))
{
	$panier->del($_GET['del']) ;
}  

require_once("../core/panier.php");
?>
<body>
<form method="post" action="checkout.php">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">photo</th>
					<th class="">nombre du place</th>
                     
						<th class="">prix par personne</th>
                    </tr>
                  </thead>
                  <tbody>
					  <?PHP
					$ids = array_keys($_SESSION['panier']) ;
					if(empty($ids))
					{
						$products = array() ;
					}
					else{
						$products = $DB->query('SELECT * FROM res WHERE id IN('.implode(',',$ids).')') ;
					}
					
					foreach($products as $product):
					?>
                    <tr class=" ">
                      <td class="">
                        <div class="product-info">
                          <img src="res/<?= $product->photo; ?>" />
                        </div>
                      </td>
                      <td class="product-quantity"><input type="number" min="1" max="<?=$product->nb; ?>" name ="panier[quantity][<?=$product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></td>
						 
						<td class=""><?PHP echo number_format($product->price,2,',',' '); ?>D</td>
                      <td class="">
						
                        <a href="checkout.php?del=<?= $product->id ; ?>" class="product-remove" >Remove</a>
                      </td>
					  
                    </tr>
					  <?php 
					    $_SESSION['product_id']=$product->id; 
            $_SESSION['nb']=$_SESSION['panier'][$product->id];
            $_SESSION['price']=$product->price; 
          
          endforeach; ?>
                  </tbody>
                </table>
				<div align="center">Prix Total : <?PHP echo number_format($panier->total(),2,',',' ') ; ?>D </div>
	<a href="checkout1.php?prix_total=<?= $panier->total(); ?>" class="btn btn-main pull-right">Checkout</a>
        			  <input type="submit" value="Recalculer" class="btn btn-main pull-centre"><br>      
		</form>
				
			<?php
$_SESSION['prix_total']=$panier->total();
?>
	</body>
	</html>

<?PHP
require_once 'footer.php' ;
?>