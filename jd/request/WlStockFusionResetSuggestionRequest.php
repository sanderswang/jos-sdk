<?php
class WlStockFusionResetSuggestionRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wl.stock.fusion.resetSuggestion";
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
                                                             	                        	                                                                                                                                                                                                                                                                                        private $rowsOfPage;
                              public function setRowsOfPage($rowsOfPage ){
                 $this->rowsOfPage=$rowsOfPage;
                 $this->apiParas["rowsOfPage"] = $rowsOfPage;
              }

              public function getRowsOfPage(){
              	return $this->rowsOfPage;
              }
                                                                                                                                                                                                                                                                                                                       private $page;
                              public function setPage($page ){
                 $this->page=$page;
                 $this->apiParas["page"] = $page;
              }

              public function getPage(){
              	return $this->page;
              }
                                                                                                                                                                                                                                                                                                                       private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                       private $lotNo;
                              public function setLotNo($lotNo ){
                 $this->lotNo=$lotNo;
                 $this->apiParas["lotNo"] = $lotNo;
              }

              public function getLotNo(){
              	return $this->lotNo;
              }
                                                                                                                }





        
 

