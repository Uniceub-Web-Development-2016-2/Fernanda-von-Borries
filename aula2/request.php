<?php

class Request{

	private $method;
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;
	
	public function __construct($vProtocol, $vIp, $vResource, $vParameters, $vMethod){
		setMethod->$vMethod;
		setProtocol->$vProtocol;
		setIp->$vIp;
		setResource->$vResource;
		setParameters->$vParameters;
	}

	public function setMethod($vMethod){
  		 $this->method= $vMethod;
	}
	 public function getMethod(){
   		 return $this->method;
        }
	public function setProtocol($vProtocol){
                 $this->protocol= $vProtocol;
        }
         public function getProtocol(){
                 return $this->protocol;
        }
	public function setip($vIp){
                 $this->ip= $vIp;
        }
         public function getIp(){
                 return $this->ip;
	}
	 public function setResource($vResource){
                 $this->resource= $vResource;
        }
         public function getResource(){
                 return $this->resource;
        }
	public function setParameters($vParameters){
                 $this->parameters= $vParameters;
        }
         public function getParameters(){
                 return $this->parameters;
        }
	public function toString(){		
		$request = $this->protocol."://".$this->ip."/".$this->resource"?".$this->parameters;
		return $request;		
	}

}

$parameters = array("2145","0201");
$request = new Request("http","127.22.51.22","resource",$parameters,"POST");
echo $request->toString();

