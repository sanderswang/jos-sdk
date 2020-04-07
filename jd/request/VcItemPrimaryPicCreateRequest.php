<?php
class VcItemPrimaryPicCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.primaryPic.create";
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
                                    	                                            		                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $imageList;
                              public function setImageList($imageList ){
                 $this->imageList=$imageList;
                 $this->apiParas["image_list"] = $imageList;
              }

              public function getImageList(){
              	return $this->imageList;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $skuIdLong;
                              public function setSkuIdLong($skuIdLong ){
                 $this->skuIdLong=$skuIdLong;
                 $this->apiParas["sku_id_long"] = $skuIdLong;
              }

              public function getSkuIdLong(){
              	return $this->skuIdLong;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $imageListLong;
                              public function setImageListLong($imageListLong ){
                 $this->imageListLong=$imageListLong;
                 $this->apiParas["image_list_long"] = $imageListLong;
              }

              public function getImageListLong(){
              	return $this->imageListLong;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $skuIdLucency;
                              public function setSkuIdLucency($skuIdLucency ){
                 $this->skuIdLucency=$skuIdLucency;
                 $this->apiParas["sku_id_lucency"] = $skuIdLucency;
              }

              public function getSkuIdLucency(){
              	return $this->skuIdLucency;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $imageListLucency;
                              public function setImageListLucency($imageListLucency ){
                 $this->imageListLucency=$imageListLucency;
                 $this->apiParas["image_list_lucency"] = $imageListLucency;
              }

              public function getImageListLucency(){
              	return $this->imageListLucency;
              }
                                                                                                                                        	                   			private $isPublishSchedule;
    	                                                            
	public function setIsPublishSchedule($isPublishSchedule){
		$this->isPublishSchedule = $isPublishSchedule;
         $this->apiParas["is_publishSchedule"] = $isPublishSchedule;
	}

	public function getIsPublishSchedule(){
	  return $this->isPublishSchedule;
	}

                        	                   			private $publishTime;
    	                                                            
	public function setPublishTime($publishTime){
		$this->publishTime = $publishTime;
         $this->apiParas["publish_time"] = $publishTime;
	}

	public function getPublishTime(){
	  return $this->publishTime;
	}

                                                    	}





        
 

