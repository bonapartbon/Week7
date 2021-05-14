<!-- The benefit of multiple inheritence is that it can take on more than one base class, but its downside is that it can create confusion when two basic classes are using the same-name method. -->
<?php
  
class Dog {
  public function DogBark() {
     echo "Woof";
  }
}

trait Cat {
  public function CatMeow() {
     echo "Meow";
  }
}
  
class Pet extends Dog {
   use Cat;
   public function PetAction() {
      echo "<br>WoofandMeow";
  } 
}
  
$print = new Pet();
$print->DogBark();
$print->CatMeow();
$print->PetAction();
?>

