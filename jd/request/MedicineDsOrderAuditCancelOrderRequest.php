<?php
class MedicineDsOrderAuditCancelOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.medicine.ds.order.auditCancelOrder";
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
                                                        		                                    	                   			private $rejectReason;
    	                        
	public function setRejectReason($rejectReason){
		$this->rejectReason = $rejectReason;
         $this->apiParas["rejectReason"] = $rejectReason;
	}

	public function getRejectReason(){
	  return $this->rejectReason;
	}

                        	                   			private $cancelOrderId;
    	                        
	public function setCancelOrderId($cancelOrderId){
		$this->cancelOrderId = $cancelOrderId;
         $this->apiParas["cancelOrderId"] = $cancelOrderId;
	}

	public function getCancelOrderId(){
	  return $this->cancelOrderId;
	}

                        	                   			private $outOfDeptActual;
    	                        
	public function setOutOfDeptActual($outOfDeptActual){
		$this->outOfDeptActual = $outOfDeptActual;
         $this->apiParas["outOfDeptActual"] = $outOfDeptActual;
	}

	public function getOutOfDeptActual(){
	  return $this->outOfDeptActual;
	}

                        	                        	                   			private $rejectType;
    	                        
	public function setRejectType($rejectType){
		$this->rejectType = $rejectType;
         $this->apiParas["rejectType"] = $rejectType;
	}

	public function getRejectType(){
	  return $this->rejectType;
	}

                        	                   			private $auditType;
    	                        
	public function setAuditType($auditType){
		$this->auditType = $auditType;
         $this->apiParas["auditType"] = $auditType;
	}

	public function getAuditType(){
	  return $this->auditType;
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





        
 

