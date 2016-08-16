<?php

class Request{

        private $method;
        private $protocol;
        private $remote_ip;
        private $server_ip;
        private $resource;
        private $parameters;

        public function __construct($vMethod, $vProtocol, $vServer_ip, $vRemote_ip,  $vResource, $vParameters){
                $this->method = $vMethod;
                $this->protocol = $vProtocol;
                $this->server_ip = $vServer_ip;
                $this->remote_ip = $vRemote_ip;
                $this->resource = $vResource;
                $this->parameters = $vParameters;
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
        public function setServer_ip($vServer_ip){
                 $this->server_ip= $vServer_ip;
        }
         public function getServer_ip(){
                 return $this->server_ip;
        }
        public function setRemote_ip($vRemote_ip){
                 $this->remote_ip= $vRemote_ip;
        }
         public function getRemote_ip(){
                 return $this->remote_ip;
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
                $request = $this->protocol.'://'.$this->server_ip.'/'.$this->resource.'?';

                foreach ($this->parameters as $key=>$value){
                        $request=$request.$key.'='.$value.'&amp';
                }
                        $request=substr($request,0,-4);

                return utf8_encode($request);
        }

}

//$parameters = array("2145","0201");
//$request = new Request("POST","http","127.22.51.22","127.22.51.22", "resource",$parameters);
//echo $request->toString();


