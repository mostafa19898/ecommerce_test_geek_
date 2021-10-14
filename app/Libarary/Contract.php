<?php 

// make method without code 

interface mobile {
    public function pressHome();
}


class Iphone implements mobile{
   public  $name ;
   public function pressHome(){
      echo "welcome Iphone";
   } 
}

class sony  implements mobile  {
   public $name ;
   public function pressHome(){
         echo "welcome sony";
   }
}

class nokia implements mobile  {
    public $name ;
    public function PressHome(){
         echo  "welcome nokia";
    }
}

$obj_Iphone =  new Iphone();
$obj_sony =  new sony();
$obj_nokia =  new nokia();
