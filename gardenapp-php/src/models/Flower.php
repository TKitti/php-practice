<?php

  class Flower {
    public $color;
    public $currentWaterAmount;
    private $maxWaterAmount = 10;
    public $isWaterNeeded = false;

    function __construct ($inputColor) {
      $this->color = $inputColor;
      $this->currentWaterAmount = 8;
    }

    function waterFlower () {
      if ($this->currentWaterAmount < 9) {
        $this->currentWaterAmount += 2;
        $fp = fopen('src/models/flowerData.txt', 'a');
        fwrite($fp, $this->currentWaterAmount . "\n");
        fclose($fp);
        echo $this->currentWaterAmount;
      }
    }

    function modifyThirstWhenDrySeason () {
      if ($this->currentWaterAmount < 2) {
        echo $this->currentWaterAmount;
        echo " Your flower has died :(";
      } elseif ($this->currentWaterAmount >= 2 && $this->currentWaterAmount <= 4) {
        $this->currentWaterAmount -= 2;
        $fp = fopen('src/models/flowerData.txt', 'a');
        fwrite($fp, $this->currentWaterAmount . "\n");
        fclose($fp);
        echo $this->currentWaterAmount;
        echo " Your flower is fine but needs more water.";
      } else {
        $this->currentWaterAmount -= 2;
        $fp = fopen('src/models/flowerData.txt', 'a');
        fwrite($fp, $this->currentWaterAmount . "\n");
        fclose($fp);
        echo $this->currentWaterAmount;
        echo " Your flower still looks awesome!";
      }
    }

    function readFile () {
      $myfile = fopen("src/models/flowerData.txt", "r") or die("Unable to open file!");
      echo fread($myfile,filesize("src/models/flowerData.txt"));
      fclose($myfile);
    }

  }




?>