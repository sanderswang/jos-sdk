<?php
class AssetActivityQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asset.activity.query";
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
                                                        		                                    	                        	                        	                        	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                        	                   			private $activityId;
    	                                                            
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                            }





        
 

