<?php
class Request{
        private $id_user;
        private $name_user;
        private $password_user;
        private $family_name_user;
        private $email_user;
        private $date_user;
		private $cpf_user;
	
		
  
	 public function __construct($id_user,$name_user,$password_user,$family_name_user,$email_user,$date_user, $cpf_user)
    	{
        $this->id_user = $id_user;
        $this->name_user = $name_user;
        $this->password_user = $password_user;
        $this->family_name_user = $family_name_user;
        $this->email_user= $email_user;
        $this->date_user=$date_user;
		   $this->cpf_user=$cpf_user;
   		}
		 
      
        public function setId($id_user){
                $this->id_user = $id_user;
        }
        public function getId(){
                return $this->id_user;
        }
       
		 public function setName($name_user){
                $this->name_user = $name_user;
        }
        public function getName(){
                return $this->name_user;
        }
		 public function setPassword($password_user){
                $this->password_user = $password_user;
        }
        public function getPassword(){
                return $this->password_user;
        }
        
		 public function setEmail($email_user){
                $this->email_user = $email_user;
        }
        public function getEmail(){
                return $this->email_user;
        }
		 public function setFamilyName($family_name_user){
                $this->nfamily_ame_user = $family_name_user;
        }
        public function getFamilyName(){
                return $this->family_name_user;
        }
		 public function setDate($date_user){
                $this->date_user = $date_user;
        }
        public function getDate(){
                return $this->date_user;
        }
		 public function setCpf($cpf_user){
                $this->cpf_user = $cpf_user;
        }
        public function getCpf(){
                return $this->cpf_user;
        }
}
