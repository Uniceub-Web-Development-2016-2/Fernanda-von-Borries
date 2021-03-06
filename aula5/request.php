﻿<?php
class Request
{
	private $method;
	private $protocol;
	private $server_ip; 
	private $remote_ip; 
	private $resource;
	private $parameters;
	private $body;
	
	public function __construct($method, $protocol, $server_addr, $client_addr, $path, $query, $body)
	{
		$this->method = $method;
		$this->protocol = $protocol;
		$this->server_ip = $server_addr;
		$this->remote_ip = $client_addr;
		$this->resource = $path;
		$this->setParameters($query);
		$this->body = $body; 
	}	
	
	public function toString(){
                $request = "";
                $Inc = 1;
                foreach($this->parameters as $param) {
                        $request .= "P".$Inc."=".$param."&amp";
                        $Inc++;
        }
        return $this->protocol.'://'.$this->server_ip.'/'.$this->resource.'?'.$request;
        }
	
	public function setMethod($method){
                 $this->method= $method;
        }
    public function getMethod(){
                 return $this->method;
        }
    public function setProtocol($protocol){
                $this->protocol= $protocol;
        }
    public function getProtocol(){
                 return $this->protocol;
        }
    public function setServer_ip($server_ip){
                 $this->server_ip= $server_ip;
        }
    public function getServer_ip(){
                 return $this->server_ip;
        }
    public function setRemote_ip($remote_ip){
                 $this->remote_ip= $remote_ip;
        }
    public function getRemote_ip(){
                 return $this->remote_ip;
        }
    public function setResource($resource){
                 $this->resource= $resource;
        }
    public function getResource(){
                 return $this->resource;
        }
    public function setParameters($parameters){
             	parse_str($paramsString, $paramsArray);
       		 	$this->parameters = $paramsArray;
        }
    public function getParameters(){
                 return $this->parameters;
        }
}
