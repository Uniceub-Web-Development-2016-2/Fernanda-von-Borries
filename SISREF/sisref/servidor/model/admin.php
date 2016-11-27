<?php
class Request{
        private $id_admin;
        private $name_admin;
        private $password_admin;
        private $family_name__admin;
        private $email_admin;
        private $date_admin;
		private $cpf_admin;
	
		
  
	 public function __construct($id_admin,$name_admin,$password_admin,$family_name_admin,$email_admin,$date_admin, $cpf_admin)
    	{
        $this->id_admin = $id_admin;
        $this->name_admin= $name_admin;
        $this->password_admin = $password_admin;
        $this->family_name_admin = $family_name_admin;
        $this->email_admin= $email_admin;
        $this->date_admin=$date_admin;
		 $this->cpf_admin=$cpf_admin;
   		}
		 
      
        public function setId($id_admin){
                $this->id_admin = $id_admin;
        }
        public function getId(){
                return $this->id_admin;
        }
       
		 public function setName($name_admin){
                $this->name_admin = $name_admin;
        }
        public function getName(){
                return $this->name_admin;
        }
		 public function setPassword($password_admin){
                $this->password_admin = $password_admin;
        }
        public function getPassword(){
                return $this->password_admin;
        }
        
		 public function setEmail($email_admin){
                $this->email_admin = $email_admin;
        }
        public function getEmail(){
                return $this->email_admin;
        }
		 public function setFamilyName($family_name_admin){
                $this->nfamily_ame_admin = $family_name_admin;
        }
        public function getFamilyName(){
                return $this->family_name_admin;
        }
		 public function setDate($date_admin){
                $this->date_admin = $date_admin;
        }
        public function getDate(){
                return $this->date_admin;
        }
		public function setCpf($cpf_admin){
                $this->date_admin = $cpf_admin;
        }
        public function getCpf(){
                return $this->cpf_admin;
        }
}
