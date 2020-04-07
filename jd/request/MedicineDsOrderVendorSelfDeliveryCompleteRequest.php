<?php
class MedicineDsOrderVendorSelfDeliveryCompleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.medicine.ds.order.vendorSelfDeliveryComplete";
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

                        	                   			private $reqTimestamp;
    	                        
	public function setReqTimestamp($reqTimestamp){
		$this->reqTimestamp = $reqTimestamp;
         $this->apiParas["reqTimestamp"] = $reqTimestamp;
	}

	public function getReqTimestamp(){
	  return $this->reqTimestamp;
	}

                            }





        
 

