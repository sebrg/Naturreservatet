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

        public $picture;
        public $name;
        public $sound;

        function __construct($name, $picture, $sound)
        {  
            
            $this->name = $name;
            $this->picture = $picture;
            $this->sound = $sound;
            
        }
        
        abstract function makeSound();    
    }

    class Ape extends Animals {
      function __construct($name) {
          $this->picture = "./img/apa.jpg";
          $this->name = $name;
          $this->sound = "oo-oo-oo";
          
      }

        function makeSound()
        {
            return $this->name . $this->sound; //Fixa alert när man klickar på bild..
        }
    }

    class Giraffe extends Animals {
        function __construct($name) {
            $this->picture = "./img/giraffe.jpg";
            $this->name = $name;
            $this->sound = "moooo-aar";
        }
        function makeSound()
        {
            return $this->name . $this->sound;
        }
    }

    class Tiger extends Animals {
        function __construct($name) {
            $this->picture = "./img/tiger.jpg";
            $this->name = $name;
            $this->sound = "raaawr";
        }
        function makeSound()
        {
            return $this->name . $this->sound; 
        }
    }

    class Coco extends Animals {
        function __construct($name) {
            $this->picture = "/img/coco.jpg";
            $this->name = $name;
            $this->sound = "dooinkk";
        }
        function makeSound()
        {  
            return $this->name . $this->sound;  
        }
    }

    $myApes = $_POST["apes"];
    $myGiraffes =  $_POST["giraffe"];
    $myTigers = $_POST["tiger"];
    $myCocos =  $_POST["coco"];

    $myAnimals = array();
    $data = file_get_contents("https://randomuser.me/api/");
    $name = json_decode($data)->results[0]->name->first;


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
        $sound = $value->sound;
        echo "<img onclick=alert('$name'+'...$sound') style='width: 250px;' src='". $value->picture ."'>";
        echo "<br>";
        echo "<h2> $value->name </h3>";
        echo "<h5> $value->sound </h3>";     
    }
    

?>

</body>
</html>