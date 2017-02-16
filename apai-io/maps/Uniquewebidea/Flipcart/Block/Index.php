<?php  

require_once "flipkart/clusterdev.flipkart-api.php";
  require_once"amazon/amazon_api_class.php";
class Uniquewebidea_Flipcart_Block_Index extends Mage_Core_Block_Template{   


  public function __construct(){
        parent::__construct();
		$helper = Mage::helper('flipcart');	
		
		
			$flipkart = new \clusterdev\Flipkart("goebazarg", "0bc76c9b804a4a68ba4098910b0211fe", "json");


			$dotd_url = 'https://affiliate-api.flipkart.net/affiliate/offers/v1/dotd/json';
			$topoffers_url = 'https://affiliate-api.flipkart.net/affiliate/offers/v1/top/json';

				$home = $flipkart->api_home();

				
				if($home==false){
					$list='Error: Could not retrieve API homepage';
					
				}

				
				$home = json_decode($home, TRUE);

				$list = $home['apiGroups']['affiliate']['apiListings'];
        
	     $this->setFlipcart($list);
		 
		
}

	public function getfcproduct($url)
	{
		
		$flipkart = new \clusterdev\Flipkart("goebazarg", "0bc76c9b804a4a68ba4098910b0211fe", "json");
		
		
		$details = $flipkart->call_url($url);
		
		$details = json_decode($details, TRUE);
		
		$products = $details['productInfoList'];
		
		return $products;
		
	}
	
	public function getcategory()
	{
		
		$flipkart = new \clusterdev\Flipkart("goebazarg", "0bc76c9b804a4a68ba4098910b0211fe", "json");


			$dotd_url = 'https://affiliate-api.flipkart.net/affiliate/offers/v1/dotd/json';
			$topoffers_url = 'https://affiliate-api.flipkart.net/affiliate/offers/v1/top/json';

				$home = $flipkart->api_home();

				
				if($home==false){
					$list='Error: Could not retrieve API homepage';
					
				}

				
				$home = json_decode($home, TRUE);

				$list = $home['apiGroups']['affiliate']['apiListings'];
				
				
				return $list;
		
		
	}
	
	public function getamazon($buety)
	{
		
		

			$obj = new AmazonProductAPI();
			
			try
			{
				$result = $obj->searchProducts("a ", $buety,   "TITLE");
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			return $result ;
		
	}


}