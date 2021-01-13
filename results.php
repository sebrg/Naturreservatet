<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>

<?php 
    abstract class Animals {

        public $image;
        public $name;
        
        function __construct($name, $picture)
        {
           
            $this->name = $name;
            $this->picture = $picture;
           
        }
        
        abstract function makeSound();
        
    }

    class Ape extends Animals {
      function __construct($name) {
          $this->picture = "./img/apa.jpg";
          $this->name = $name;
      }

        function makeSound()
        {
            return $this->name . "afawfaw"; //Fixa alert när man klickar på bild..
        }
    }

    class Giraffe extends Animals {
        function __construct($name) {
            $this->picture = "./img/giraffe.jpg";
            $this->name = $name;
        }
        function makeSound()
        {
            return $this->name . "afawfaw"; 
        }
    }

    class Tiger extends Animals {
        function __construct($name) {
            $this->picture = "./img/tiger.jpg";
            $this->name = $name;
        }
        function makeSound()
        {
            return $this->name . "afawfaw"; 
        }
    }

    class Coco extends Animals {
        function __construct($name) {
            $this->picture = "/img/coco.jpg";
            $this->name = $name;
        }
        function makeSound()
        {  
          return $this->name . "afawfaw";   
        }
    }

    $myApes = $_POST["apes"];
    $myGiraffes =  $_POST["giraffe"];
    $myTigers = $_POST["tiger"];
    $myCocos =  $_POST["coco"];

    $myAnimals = array();

    for ($i=0; $i < $myApes ; $i++) { 
        $ape = new Ape($name);
        array_push($myAnimals, $ape);

    }
    for ($i=0; $i < $myGiraffes ; $i++) { 
        $giraffe = new Giraffe($name);
        array_push($myAnimals, $giraffe);

    }
    for ($i=0; $i < $myTigers ; $i++) { 
        $tiger = new Tiger($name);
        array_push($myAnimals, $tiger);

    }
    for ($i=0; $i < $myCocos ; $i++) { 
        $cocos = new Coco($name);
        array_push($myAnimals, $cocos);

    }

    foreach ($myAnimals as $value) {
        echo "<img style='width: 150px;' src='". $value->picture ."'>";   
        echo "<br>";
       
        
    }


?>


    
</body>
</html>