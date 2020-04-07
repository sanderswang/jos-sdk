<?php
class MedicineDsOrderOrderStockOutRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.medicine.ds.order.orderStockOut";
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
                                                        		                                    	                   			private $carrierName;
    	                        
	public function setCarrierName($carrierName){
		$this->carrierName = $carrierName;
         $this->apiParas["carrierName"] = $carrierName;
	}

	public function getCarrierName(){
	  return $this->carrierName;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                   			private $operateMan;
    	                        
	public function setOperateMan($operateMan){
		$this->operateMan = $operateMan;
         $this->apiParas["operateMan"] = $operateMan;
	}

	public function getOperateMan(){
	  return $this->operateMan;
	}

                        	                   			private $carrierId;
    	                        
	public function setCarrierId($carrierId){
		$this->carrierId = $carrierId;
         $this->apiParas["carrierId"] = $carrierId;
	}

	public function getCarrierId(){
	  return $this->carrierId;
	}

                            }





        
 

