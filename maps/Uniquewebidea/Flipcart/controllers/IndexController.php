<?php
class Uniquewebidea_Flipcart_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Flipcart"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("flipcart", array(
                "label" => $this->__("Flipcart"),
                "title" => $this->__("Flipcart")
		   ));

      $this->renderLayout(); 
	  
    }
	
	
	
	public function amazonproductAction()
	{
	
		$catarr['Books']=473; //
		$catarr['Jewelry']=461; //
		$catarr['Clothing & Accessories']=459; //
		$catarr['Cell Phones & Accessories']=248; //
		$catarr['Watches']=460; //
		//$catarr['Industrial & Scientific']=461;
		$catarr['Office Products & Supplies']=475; //
		$catarr['Baby']=469; //
		$catarr['Grocery & Gourmet Food']=471; //
		$catarr['Sports & Outdoors']=476; //
		$catarr['Tools & Home Improvement']=466; //
		$catarr['Automotive']=472;//
		$catarr['Electronics']=241; //
		
		$catarr['Beauty']=463;//
		$catarr['Health & Personal Care']=463;//
		
		$catarr['Magazine Subscriptions']=473; //
		$catarr['Movies & TV']=474; //
		$catarr['MP3 Downloads']=474; //
		$catarr['Music']=474;//
		$catarr['Musical Instruments']=474; //
		$catarr['Software']=477; //
		$catarr['Shoes']=462; //
		
		$catarr['Toys & Games']=468; //
		      
           
		 
		
	  $amazon=new Uniquewebidea_Flipcart_Block_Index();
	    echo'<pre>';
	   foreach ($catarr as $key => $data) {
		  // echo $key.'<br>';
			  $products = $amazon->getamazon($key);
			 $OperationRequest= $products->OperationRequest;
			  $Items= $products->Items;
			  
				$Request= $Items->Request->ItemSearchRequest->SearchIndex;
				$Item= $Items->Item;
			   $catid=$catarr[trim($Request)];
	                     $flag=1;
					  foreach($Items->Item as $pro)
					  {  
					
						 print_r($pro);
                            
							echo'<hr>';
						  $flag++;
						   $ASIN=$pro->ASIN;
						   $DetailPageURL=$pro->DetailPageURL;
							$LargeImage=$pro->LargeImage->URL;
						 
						   $PackageQuantity=$pro->ItemAttributes->PackageQuantity;
							$PartNumber=$pro->ItemAttributes->PartNumber;
							$Title=$pro->ItemAttributes->Title;
							 $FormattedPrice=$pro->OfferSummary->LowestNewPrice->FormattedPrice;
							 $Label=$pro->ItemAttributes->Label;
							 
							  $pr=Mage::getModel('catalog/product')->loadByAttribute('sku',$ASIN);
						 $FormattedPrice= preg_replace("/[^0-9 .]/", "", $FormattedPrice);
							 if (!$pr){
								 
								Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID); 
								$product = Mage::getModel('catalog/product');
								
								$product
								->setTypeId('simple')
								->setAttributeSetId(4) 
								->setSku($ASIN) 
								->setWebsiteIDs(array(1)) ;
												 
									$product
								->setCategoryIds(array($catid))
								->setStatus(Mage_Catalog_Model_Product_Status::STATUS_ENABLED)
								->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)   ;

							   $product->setStockData(array(
										'use_config_manage_stock' => 0, 
										'manage_stock'            => 1, 
										'is_in_stock'             => 1,
										'qty'                     => 5,
									));

					 
									$product
										->setName($Label) 
										->setShortDescription($Title) 
										->setProductfrom('amazon')  
										->setProductimgurl($LargeImage) 
										->setProurl($DetailPageURL) 
										->setPrice((int)$FormattedPrice)
										
										->setTaxClassId(2)    
										->setWeight(87);		
									  $product->save();
							 }else
								 {
									 
								
										$pr->setPrice($FormattedPrice);
									   

										$pr->save();
									 
									 
								 }
							
							
						
						  
					  }
   	  
	  

	  }
       	   
		
	}
	
	public function flipcartproductAction()
	{
		
         $cpBlock = $this->getLayout()->getBlockSingleton('Uniquewebidea_Flipcart_Block_Index'); 
		 
		  $catarr['air_conditioners']=241; //
		  $catarr['air_coolers']=241; //
		  $catarr['audio_players']=248; //	
		  $catarr['automotive']=472; //
		  
		  $catarr['baby_care']=469; //
		  $catarr['bags_wallets_belts']=459; //	
		 
		 $catarr['cameras']=247; //
		 $catarr['camera_accessories']=247; //
		 $catarr['computer_components']=246; //
		 $catarr['computer_peripherals']=246; //
		 $catarr['computer_storage']=246; //
		  
		 $catarr['desktops']=245; //
		  
		 $catarr['e_learning']=473; //
         $catarr['eyewear']=459; //

          $catarr['food_nutrition']=463;  //
		  $catarr['fragrances']=463; //		
		  $catarr['furniture']=467; //
		 
         $catarr['gaming']=468; //
		 $catarr['grooming_beauty_wellness']=463; //
		 
		  $catarr['home_and_kitchen_needs']=467; //
		   $catarr['home_appliances']=241;  //
		   $catarr['home_decor_and_festive_needs']=467; //
		  $catarr['home_entertainment']=241; //	
		  $catarr['home_furnishing']=466; //
		  $catarr['home_improvement_tools']=466; //	
		  $catarr['household_supplies']=467; //
		 
          $catarr['jewellery']=461;	//
		  
		  $catarr['kids_footwear']=478; //
		  $catarr['kids_clothing']=478; //
		  $catarr['kitchen_appliances']=241; //
		 
		  $catarr['laptops']=245; //
		  $catarr['landline_phones']=246; //
		  $catarr['laptop_accessories']=246;
		  $catarr['luggage_travel']=459; //
		  
		  
		  $catarr['mens_clothing']=459; //
		  $catarr['mens_footwear']=462; //
		  $catarr['microwave_ovens']=241; // 
		  $catarr['music_movies_posters']=474; //
		  $catarr['mobiles']=248; // 
		  $catarr['mobile_accessories']=248; //	 
		 
		  $catarr['network_components']=246; //
	
		 // $catarr['pet_supplies']=416;
		 
		   $catarr['refrigerator']=241; //
		 
		   $catarr['software']=477; //
		   $catarr['stationery_office_supplies']=475; //
		   $catarr['sports_fitness']=476; //
		   $catarr['sunglasses']=459; //
		 
		   $catarr['televisions']=241; //
		   $catarr['tv_video_accessories']=241; //
		   $catarr['tablets']=248; //
           $catarr['tablet_accessories']=248;  //
		   $catarr['toys']=468; //
		  	 
		   $catarr['video_players']=246; //
		             
           $catarr['watches']=460; //
		   $catarr['womens_clothing']=459; //
		 
		 //$catarr['wearable_smart_devices']=438;
		       
		  $catarr['washing_machine']=241; //
				 
		 $catarr['womens_footwear']=462; //
		 
       
		
        
					 
		 
		 $pagefeed = $cpBlock->getcategory(); 
		 
		 Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
		  
		 foreach ($pagefeed as $key => $data) {
			
			
			 $url=base64_encode($data['availableVariants']['v0.1.0']['get']);
			 
			 $url = base64_decode($url);

			$flipkart=new Uniquewebidea_Flipcart_Block_Index();
			
			
			$hidden = isset($_GET['hidden'])?false:true;

			$catid=$catarr[$key];
			
			$products = $flipkart->getfcproduct($url);
			
			
		foreach ($products as $product) {
			
			//echo'<pre>'; print_r($product);die('stop');
						$inStock = $product['productBaseInfo']['productAttributes']['inStock'];
						if(!$inStock)
							continue;
						
						// echo'<pre>'; print_r($product); die;
			//The API returns these values nested inside the array.
			//Only image, price, url and title are used in this demo
			$productId = $product['productBaseInfo']['productIdentifier']['productId'];
			$title = $product['productBaseInfo']['productAttributes']['title'];
			$productDescription = $product['productBaseInfo']['productAttributes']['productDescription'];

			//We take the 200x200 image, there are other sizes too.
			$productImage = array_key_exists('200x200', $product['productBaseInfo']['productAttributes']['imageUrls'])?$product['productBaseInfo']['productAttributes']['imageUrls']['200x200']:'';
			$sellingPrice = $product['productBaseInfo']['productAttributes']['sellingPrice']['amount'];
			$productUrl = $product['productBaseInfo']['productAttributes']['productUrl'];
			$productBrand = $product['productBaseInfo']['productAttributes']['productBrand'];
			$color = $product['productBaseInfo']['productAttributes']['color'];
			$productUrl = $product['productBaseInfo']['productAttributes']['productUrl'];

			
		    $pr=Mage::getModel('catalog/product')->loadByAttribute('sku',$productId);
		
			 if (!$pr){
				 
				Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID); 
				$product = Mage::getModel('catalog/product');
				$rand = rand(1, 9999);
				$product
				->setTypeId('simple')
				->setAttributeSetId(4) 
				->setSku($productId) 
				->setWebsiteIDs(array(1)) ;
								 
					$product
				->setCategoryIds(array($catid))
				->setStatus(Mage_Catalog_Model_Product_Status::STATUS_ENABLED)
				->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)   ;

			   $product->setStockData(array(
						'use_config_manage_stock' => 0, 
						'manage_stock'            => 1, 
						'is_in_stock'             => 1,
						'qty'                     => 5,
					));

     
					$product
						->setName($title) 
						->setShortDescription($productDescription) 
						->setProductfrom('flipcart')  
						->setProductimgurl($productImage) 
						->setProurl($productUrl) 
						->setPrice($sellingPrice)
						
						->setTaxClassId(2)    
						->setWeight(87);		
					  $product->save();
			 }else
			 {
				 
			
					$pr->setPrice($sellingPrice);
				   

					$pr->save();
				 
				 
			 }
				  
		}	  
		  
		
		 
		 }
	
		
		
	}
	
	
	
}