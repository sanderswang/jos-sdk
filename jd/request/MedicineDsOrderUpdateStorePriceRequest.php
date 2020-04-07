<?php
class MedicineDsOrderUpdateStorePriceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.medicine.ds.order.updateStorePrice";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $storePrice;
    	                        
	public function setStorePrice($storePrice){
		$this->storePrice = $storePrice;
         $this->apiParas["storePrice"] = $storePrice;
	}

	public function getStorePrice(){
	  return $this->storePrice;
	}

                        	                        	                   			private $outerId;
    	                        
	public function setOuterId($outerId){
		$this->outerId = $outerId;
         $this->apiParas["outerId"] = $outerId;
	}

	public function getOuterId(){
	  return $this->outerId;
	}

                        	                   			private $exStoreId;
    	                        
	public function setExStoreId($exStoreId){
		$this->exStoreId = $exStoreId;
         $this->apiParas["exStoreId"] = $exStoreId;
	}

	public function getExStoreId(){
	  return $this->exStoreId;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                            }





        
 

