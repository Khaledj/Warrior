<?php

require_once __DIR__ . "/../base/localWarrior.php";
//require_once __DIR__ . "/../base/distantWarrior.php";


$GLOBALS['warriorID'] = 'Itachi';

 // //Définissez vos class de combattants
 // abstract class Warrior extends DistantWarrior {
 //    public $id;
 //    public $name;
 //    public $speed;
 //    public $life;
 //    public $shield;
 //    public $imageUrl;
 //    public $weapon;
  
 //   function __construct($id){
 //    	$this->id = $id;
 //    	$this->speed = 30;
 //    	$this->life = 100;
 //    	$this->shield = 20;
 //    }

 //   function SetWeapon($weapon){
 //   	$this->weapon=$weapon;
 // 	}

 //   function SetImageUrl($url){
 //   $this->imageUrl=$url;
 //   }

 // };

 abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;
  
   function __construct($id){
    	$this->id = $id;
    	$this->speed = 30;
    	$this->life = 100;
    	$this->shield = 20;

    }

   function SetWeapon($weapon){
   	$this->weapon=$weapon;
 	}

   function SetImageUrl($url){
   $this->imageUrl=$url;
   }

 };


class StartrekWarrior extends Warrior {   
   public $mentalPower;

   function power() {
   return $this ->mentalPower;
   }
   

   function __construct($id){
   parent::__construct($id);
   $this->mentalPower=8;
   }
  
}
class MarvelWarrior extends Warrior {
   public $superPower;

   function power() {
   return $this->superPower ;
   }

   function __construct($id){
   parent::__construct($id);
   $this->superPower=100;
   }
}

class PokemonWarrior extends Warrior {
  public $level;

 function power() {
 return $this->level;
 }

  function __construct($id){
  parent::__construct($id);
  $this->level=1;
  }
 
}

class Weapon  {
	public $id;
	public $strength;
	public $imageUrl;
	
function __construct($id,$strength){
 $this->id=$id;
 $this->strength=$strength;
}

function SetImageUrl($url){
	$this->imageUrl=$url;
}

}