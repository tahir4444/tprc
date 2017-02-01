<?php  
class THR_Away_Model_Carrier_Fastaway extends Mage_Shipping_Model_Carrier_Abstract implements Mage_Shipping_Model_Carrier_Interface {

	protected $_code = 'hunterexpress';  
	
	protected $_found	=	array();

	/** 
	* Collect rates for this shipping method based on information in $request 
	* 
	* @param Mage_Shipping_Model_Rate_Request $data 
	* @return Mage_Shipping_Model_Rate_Result 
	*/  
	public function collectRates(Mage_Shipping_Model_Rate_Request $request) {
		
		// print_r($request->getData());
		//echo $this->getConfigData('api_key');
		// echo $request->getDestRegionId();
		
		
		$check_price	=	$this->_checkPriceFromFastAway($request);
		
		//print_r($check_price);
		
		$result = Mage::getModel('shipping/rate_result');
		$method = Mage::getModel('shipping/rate_result_method');
		
		
		if(!empty($check_price)) {
			
			$result->append($this->_getStandardShippingRate($check_price));
			
			/*foreach ($check_price as $found_methods) :
			///print_r($found_methods);
				// $method->setCarrier($this->_code);
				// $method->setCarrierTitle($found_methods->serviceName);
				// $method->setMethod($found_methods->serviceCode);
				// $method->setMethodTitle($found_methods->serviceName);
				// $method->setPrice($found_methods->fee);
				// $method->setCost('0.00');
				// $result->append($method); 
				
				$result->append($this->_getStandardShippingRate($found_methods));
				
				$this->_found[$found_methods->serviceCode]	=	$found_methods->serviceName;
				break;*/
			endforeach;
			
			return $result;
		}
		
		///print_r($this->_found);
		
		
	}
	
	protected function _getStandardShippingRate($found_methods) {
		
		$rate = Mage::getModel('shipping/rate_result_method');
		/* @var $rate Mage_Shipping_Model_Rate_Result_Method */

		$rate->setCarrier($this->_code);
		/**
		* getConfigData(config_key) returns the configuration value for the
		* carriers/[carrier_code]/[config_key]
		*/
		$rate->setCarrierTitle($this->getConfigData('title'));

		$rate->setMethod($found_methods->serviceCode);
		$rate->setMethodTitle($found_methods->serviceName);

		$rate->setPrice($found_methods->fee);
		$rate->setCost(0);

		return $rate;
		
	}
	
	private function _checkPriceFromFastAway($request) {
		
		$dest_state	=	$request->getDestRegionCode();
		// echo $request->getCity();
		$city	=	$request->getDestCity();
		
		$dest_postcode	=	$request->getDestPostcode();
		
		 // $packageValue = $request->getPackageValue();
        // $packageValueDiscout = $request->getPackageValueWithDiscount();
        $packageWeight = $request->getPackageWeight();
        $packageQty = $request->getPackageQty();
        // $packageCurrency = $request->getPackageCurrency();
		
		$data = '{
				"customerCode": "DUMMY",
				"fromLocation": {
						"suburbName": "BRISBANE",
						"postCode": "4000",
						"state": "QLD"
					},
					"toLocation": {
						"suburbName": "' . $city . '",
						"postCode": "' . $dest_postcode . '",
						"state": "' . $dest_state . '"
					},
				"goods": [{
					"pieces": "' . $packageQty . '",
					
					"weight": "3",
					"width": "10",
					"height": "20",
					"depth": "12",
					"typeCode": "ENV"
				}]
			}';
		//"weight": "' . $packageWeight . '",
		$username = 'hxws';
		$password = 'hxws';
		// $url = 'https://sandbox.hunterexpress.com.au/sandbox/rest/hxws/quote/get-quote';
		$url = 'https://sandbox.hunterexpress.com.au:443/sandbox/rest/hxws/quote/get-quote';
		
		
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, 1);
		// curl_setopt($curl, CURLOPT_VERBOSE, true); //added by thr
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Basic '.base64_encode($username.':'.$password)));
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_HEADER,  false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec ($curl);

		curl_close($curl);

		return json_decode($response);
		
	}

	/**
	* Get allowed shipping methods
	*
	* @return array
	*/
	public function getAllowedMethods() {
		return array($this->_code => $this->getConfigData('name'));
		//return array($this->_found);
	}
}