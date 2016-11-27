<?php
class Receitas{
        private $id_recipe;
        private $title_recipe;
        private $category_recipe;
        private $ingredientes_recipe;
        private $txt_recipe;
        private $nationality_recipe;
		private $difficulty_recipe;
		private $cod_users;
		private $cod_admin;
		
  
	 public function __construct($title_recipe, $category_recipe, $ingredientes_recipe, $txt_recipe,$nationality_recipe,$difficulty_recipe)
    	{
        $this->title_recipe = $title_recipe;
        $this->category_recipe = $category_recipe;
        $this->ingredients_recipe = $ingredients_recipe;
        $this->txt_recipe = $txt_recipe;
        $this->nationality_recipe= $nationality_recipe;
        $this->difficulty_recipe=$difficulty_recipe;
        $this->comment_recipe=$comment_recipe;
   		}
		 
      
        public function setTitle($title_recipe){
                $this->title_recipe = $title_recipe;
        }
        public function getTitle(){
                return $this->title_recipe;
        }
         public function setCategory($category_recipe){
                $this->category_recipe = $category_recipe;
        }
        public function getCategory(){
                return $this->category_recipe;
        }
		  public function setIngredients($ingredients_recipe){
                $this->ingredients_recipe = $ingredients_recipe;
        }
        public function getIngredients(){
                return $this->ingredients_recipe;
        } 
		public function setTxt($Txt_recipe){
                $this->txt_recipe = $txt_recipe;
        }
		public function getTxt(){
                return $this->txt_recipe;
        }
		public function setNationality($nationality_recipe){
                $this->nationality_recipe = $nationality_recipe;
        }
		public function getNationality(){
                return $this->nationality_recipe;
        }
		public function setDifficult($difficult_recipe){
                $this->difficult_recipe = $difficult_recipe;
        }
		public function getDiffiiculty(){
                return $this->difficulty_recipe;
        }
        
}
