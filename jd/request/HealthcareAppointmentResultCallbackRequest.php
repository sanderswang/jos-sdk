<?php
class HealthcareAppointmentResultCallbackRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.healthcare.appointmentResultCallback";
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
                                                        		                                    	                   			private $msg;
    	                        
	public function setMsg($msg){
		$this->msg = $msg;
         $this->apiParas["msg"] = $msg;
	}

	public function getMsg(){
	  return $this->msg;
	}

                        	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $reportId;
    	                        
	public function setReportId($reportId){
		$this->reportId = $reportId;
         $this->apiParas["reportId"] = $reportId;
	}

	public function getReportId(){
	  return $this->reportId;
	}

                        	                   			private $jdAppointmentId;
    	                        
	public function setJdAppointmentId($jdAppointmentId){
		$this->jdAppointmentId = $jdAppointmentId;
         $this->apiParas["jdAppointmentId"] = $jdAppointmentId;
	}

	public function getJdAppointmentId(){
	  return $this->jdAppointmentId;
	}

                        	                        	                   			private $resultDate;
    	                        
	public function setResultDate($resultDate){
		$this->resultDate = $resultDate;
         $this->apiParas["resultDate"] = $resultDate;
	}

	public function getResultDate(){
	  return $this->resultDate;
	}

                        	                   			private $channelType;
    	                        
	public function setChannelType($channelType){
		$this->channelType = $channelType;
         $this->apiParas["channelType"] = $channelType;
	}

	public function getChannelType(){
	  return $this->channelType;
	}

                        	                   			private $appointmentNo;
    	                        
	public function setAppointmentNo($appointmentNo){
		$this->appointmentNo = $appointmentNo;
         $this->apiParas["appointmentNo"] = $appointmentNo;
	}

	public function getAppointmentNo(){
	  return $this->appointmentNo;
	}

                        	                   			private $resultType;
    	                        
	public function setResultType($resultType){
		$this->resultType = $resultType;
         $this->apiParas["resultType"] = $resultType;
	}

	public function getResultType(){
	  return $this->resultType;
	}

                            }





        
 

