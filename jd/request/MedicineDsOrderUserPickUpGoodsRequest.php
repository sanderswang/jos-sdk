<?php
class MedicineDsOrderUserPickUpGoodsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.medicine.ds.order.userPickUpGoods";
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
                                                        		                                    	                   			private $pickUpCode;
    	                        
	public function setPickUpCode($pickUpCode){
		$this->pickUpCode = $pickUpCode;
         $this->apiParas["pickUpCode"] = $pickUpCode;
	}

	public function getPickUpCode(){
	  return $this->pickUpCode;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $operateMan;
    	                        
	public function setOperateMan($operateMan){
		$this->operateMan = $operateMan;
         $this->apiParas["operateMan"] = $operateMan;
	}

	public function getOperateMan(){
	  return $this->operateMan;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                            }





        
 

