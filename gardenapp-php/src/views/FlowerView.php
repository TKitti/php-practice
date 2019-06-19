<form method="post">
  <label>
    <?php 
      echo "You have one $tulip->color flower whose water level is $tulip->currentWaterAmount.";
    ?>
  </label>
  <input type="submit" name="water" value="let's water this flower" />
  <input type="submit" name="dry" value="it's dry season" />
</form>

<?php


if(isset($_POST["water"])){
   $tulip->waterFlower();
}

if(isset($_POST["dry"])){
  $tulip->modifyThirstWhenDrySeason();
}

?>