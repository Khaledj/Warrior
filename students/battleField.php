<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


   class BattleField extends BaseBattleField
   {
     static function createMyWarrior() {

     	$mywarrior = new PokemonWarrior ($GLOBALS['warriorID']);
    	$mywarrior->SetImageUrl("https://vignette.wikia.nocookie.net/naruto/images/d/d1/Itachi_apparence.png/revision/latest/scale-to-width-down/180?cb=20170128172932&path-prefix=fr");

     	$weapon = new Weapon ("katana",1000000000);
     	$weapon->SetImageUrl("https://www.dhresource.com/0x0s/f2-albu-g1-M01-D2-A7-rBVaGFXv5E6APktRAAETsS6BoOg753.jpg/
        japanese-anime-naruto-fourth-hokage-yondaime.jpg");
     	$mywarrior->SetWeapon($weapon);

     	$mywarrior->saveNew();
   }

    static function createOtherWarrior() {

      $otherwarrior = new PokemonWarrior ("Sasuke");
      $otherwarrior->SetImageUrl("http://static.tvtropes.org/pmwiki/pub/images/sasuke_uchiha_1.png");

      $weapon = new Weapon ("katana",100);
      $weapon->SetImageUrl("https://images-na.ssl-images-amazon.com/images/I/51b%2BZe6Wo5L._SY355_.jpg");
      $otherwarrior->SetWeapon($weapon);
      
      $otherwarrior->saveNew();



       $otherwarrior = new PokemonWarrior("Sangoku");
       $otherwarrior->SetImageUrl("https://i.ebayimg.com/images/g/IpQAAOSwKrhVYxaN/s-l300.jpg");

       $weapon = new Weapon ("baton",100);
       $weapon->SetImageUrl("https://i.skyrock.net/7339/67917339/pics/2844890326_1.jpg");
       $otherwarrior->SetWeapon($weapon);

       $otherwarrior->saveNew();
      
       $otherwarrior = new PokemonWarrior("Luffy");
       $otherwarrior->SetImageUrl("https://vignette.wikia.nocookie.net/onepiece/images/5/59/Monkey_D._Luffy_Infobox.png/revision/latest/scale-to-width-down/270?cb=20170617172443&path-prefix=fr");

       $weapon = new Weapon ("épée",100);
       $weapon->SetImageUrl("https://li0.rightinthebox.com/images/384x384/201607/nezm1469105906792.jpg");
       $otherwarrior->SetWeapon($weapon);
      
       $otherwarrior->saveNew();

   }
}

    




   
  
