<?php
  $floatNum = 5.6;

  // round to nearest whole num
  $nearest = round($floatNum);

  // round up
  $rounded_up = ceil($floatNum);

  // round down
  $rounded_down = floor($floatNum);

  // Display results
  echo "Rounded Values<br><br>";
  echo "floating number: " . $floatNum . "<br>";
  echo "rounded to nearest whole number (round): " . $nearest . "<br>";
  echo "rounded up (ceil): " . $rounded_up . "<br>";
  echo "rounded down (floor): " . $rounded_down . "<br>";
?>
