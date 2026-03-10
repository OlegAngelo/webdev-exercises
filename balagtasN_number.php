<?php
  echo "Number Format <br><br>";

  $num = 100000099;

  echo "Value: $num <br>";

  echo "Decimals: 4 <br>";
  echo "Decimal point: . <br>";
  echo "Value separator: , <br><br>";

  // number_format(number,decimals,decimalpoint,separator)
  echo "Result: ", number_format ($num, 4, '.', ',');
?>
