<?php

class Math
{
        private $num1;
        private $num2;

        public function __construct($num1,$num2)
        {
                $this->num1 = $num1;
                $this->num2 = $num2;
        }
        public function sumAttributes()
        {
                return $this->num1 + $this->num2;
        }
        public function sum($num1,$num2)
        {
            if($num1 < 0|| $num2 < 0)
                            return "Can not sum";
            return $num1 + $num2;
        }
       public function sumALl($numbersArray)
	{
		$sum=0;
		foreach($numbersArray as $number)
		{
		   $sum = $sum + $number;	
		}
	}
}


$math = new Math(5,7);
echo $math->sumAttributes();
echo "</br>";
echo $math->sum(-5,7);
$array = array(3,4,7,-9,4,1,23);
$math->sumAll($array);







