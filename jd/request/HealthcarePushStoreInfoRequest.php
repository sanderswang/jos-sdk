<?php
class HealthcarePushStoreInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.healthcare.pushStoreInfo";
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
                                                        		                                    	                   			private $storeAddr;
    	                        
	public function setStoreAddr($storeAddr){
		$this->storeAddr = $storeAddr;
         $this->apiParas["storeAddr"] = $storeAddr;
	}

	public function getStoreAddr(){
	  return $this->storeAddr;
	}

                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $storeType;
    	                        
	public function setStoreType($storeType){
		$this->storeType = $storeType;
         $this->apiParas["storeType"] = $storeType;
	}

	public function getStoreType(){
	  return $this->storeType;
	}

                        	                   			private $storePhone;
    	                        
	public function setStorePhone($storePhone){
		$this->storePhone = $storePhone;
         $this->apiParas["storePhone"] = $storePhone;
	}

	public function getStorePhone(){
	  return $this->storePhone;
	}

                        	                   			private $channelType;
    	                        
	public function setChannelType($channelType){
		$this->channelType = $channelType;
         $this->apiParas["channelType"] = $channelType;
	}

	public function getChannelType(){
	  return $this->channelType;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $reportSupport;
    	                        
	public function setReportSupport($reportSupport){
		$this->reportSupport = $reportSupport;
         $this->apiParas["reportSupport"] = $reportSupport;
	}

	public function getReportSupport(){
	  return $this->reportSupport;
	}

                        	                   			private $storeLevel;
    	                        
	public function setStoreLevel($storeLevel){
		$this->storeLevel = $storeLevel;
         $this->apiParas["storeLevel"] = $storeLevel;
	}

	public function getStoreLevel(){
	  return $this->storeLevel;
	}

                        	                   			private $storeLat;
    	                        
	public function setStoreLat($storeLat){
		$this->storeLat = $storeLat;
         $this->apiParas["storeLat"] = $storeLat;
	}

	public function getStoreLat(){
	  return $this->storeLat;
	}

                        	                   			private $storeLng;
    	                        
	public function setStoreLng($storeLng){
		$this->storeLng = $storeLng;
         $this->apiParas["storeLng"] = $storeLng;
	}

	public function getStoreLng(){
	  return $this->storeLng;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $countyName;
    	                        
	public function setCountyName($countyName){
		$this->countyName = $countyName;
         $this->apiParas["countyName"] = $countyName;
	}

	public function getCountyName(){
	  return $this->countyName;
	}

                        	                   			private $operateType;
    	                        
	public function setOperateType($operateType){
		$this->operateType = $operateType;
         $this->apiParas["operateType"] = $operateType;
	}

	public function getOperateType(){
	  return $this->operateType;
	}

                        	                        	                   			private $storeHours;
    	                        
	public function setStoreHours($storeHours){
		$this->storeHours = $storeHours;
         $this->apiParas["storeHours"] = $storeHours;
	}

	public function getStoreHours(){
	  return $this->storeHours;
	}

                            }





        
 

