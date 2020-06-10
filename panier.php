<?PHP
class panier
{
	private $DB ;
	private $Pourcentage;
	public $code;
	 public function __construct($DB)
	 {
		 if(!isset($_SESSION))
		 {
			 session_start();
		 }
		 if(!isset($_SESSION['panier']))
			{
		$_SESSION['panier'] = array() ;
			}
		 $this->DB = $DB ;
		 
		 if(isset($_GET['delPanier']))
		 {
			 $this->del($_GET['delPanier']) ;
		 }
		 
		 if(isset($_POST['panier']['quantity']))
		 {
			 $this->recalc() ;
		 }
	 }
	public function count(){

     	return array_sum($_SESSION['panier']);

        }
	
	public function recalc()
{
  foreach ($_SESSION['panier'] as $product_id => $value) {
    if(isset($_POST['panier']['quantity'][$product_id])){
      if($_POST['panier']['quantity'][$product_id]>0)
      $_SESSION['panier'][$product_id]=$_POST['panier']['quantity'][$product_id];
  }
    }
  }
	
	public function total()
	{
		$total = 0 ;
		$ids = array_keys($_SESSION['panier']) ;
					if(empty($ids))
					{
						$products = array() ;
					}
					else{
						$products = $this->DB->query('SELECT * FROM res WHERE id IN('.implode(',',$ids).')') ;
					}
		foreach($products as $product_id => $product)
		{
			$total += $product->price * $_SESSION['panier'][$product->id];
		}
		return $total ;
	}
	public function add($product_id){

if(isset( $_SESSION['panier'][$product_id])){
 $_SESSION['panier'][$product_id]++;
}
else{
	$_SESSION['panier'][$product_id]=1;
}


}
	public function newtotal($code=NULL)
				{
						$this->code=$code;
						if ((! empty($_POST['couponcode'])) && $this->code==NULL)$this->code=$_POST['coupon_code'];
						if ($this->Pourcentage==NULL)$this->Pourcentage=promocode::Upd($this->code);
						if (! empty($this->Pourcentage))
						{
							$newtotal=$this->total()*((100-$this->Pourcentage)/100);
	            return $newtotal;
						}
						else {
							return $this->total();
						}
        }
	
	public function del($product_id)
	{
		unset($_SESSION['panier'][$product_id]) ;
	}
}
?>