<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  
  function averageCoding () {
    return 5 * 6 * 17;
  }
  echo averageCoding();


  #############################################################

  function cuboid ($aSide, $bSide, $cSide) {
    $surface = 2*($aSide + $bSide + $cSide);
    $volume = $aSide * $bSide * $cSide;

    return "Surface: $surface \n Volume: $volume";
  }

  echo "<br>";
  echo cuboid(5,6,3);

  #################################################################

  $a = 24;
  $out = 0;

  if ($a % 2 === 0) {
    $out++;
  }

  echo "<br>";
  echo $out;

  $b = -9;
  $out2 = "";

  if ($b > 10 && $b < 20) {
    $out2 = 'Sweet';
  } elseif ($b < 10) {
    $out2 = 'Less!';
  } elseif ($b > 10) {
    $out2 = 'More!';
  }

  echo "<br>";
  echo $out2;
  
  ##############################################################

  function findSubstring ($str, $keyword) {
    return strpos($str, $keyword) > -1 ? strpos($str, $keyword) : -1;
  }

  echo "<br>";
  echo findSubstring('this is what I\'m searching in', 'searching');
  echo "<br>";
  echo findSubstring('this is what I\'m searching in', 'not');

  ######################################################################

  function printMatrix ($size) {
    for ($i = 0; $i < $size; $i++) {
      for ($k = 0; $k < $size; $k++) {
        if ($k === ($size - $i -1)) {
          echo '1';
        } else {
          echo '0';
        }
      }
      echo "<br>";
    }
  }

  echo "<br>";
  echo printMatrix(4);

  #################################################################

  $colors = array(array("lime", "forest green", "olive", "pale green"), array("orange red", "red", "tomato"), array("orchid", "violet", "pink", "hot pink"));
  echo "<br>";
  print_r($colors);

  function printElements ($multiArray) {
    for ($i = 0; $i < sizeof($multiArray); $i++) {
      for ($k = 0; $k < sizeof($multiArray); $k++) {
        echo $multiArray[$i][$k] . " ";
      }
      echo "<br>";
    }
  }

  echo "<br>";
  echo printElements($colors);


  #############################################################

  class TelephoneNumber {
    public $name;
    private $number;


    function __construct ($inputName, $inputNumber) {
      $this->name = $inputName;
      $this->number = $inputNumber;
    }

    public function getNumber() {
      echo $this->number;
    }
  }

  $PetersNum = new TelephoneNumber("Peter", "555-698");
  echo "<br>";
  echo $PetersNum->getNumber();


  ?>
</body>
</html>