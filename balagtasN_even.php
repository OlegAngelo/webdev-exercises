<?php
  echo "Even Numbers <br><br>";

  $variables = [12.2, 'banana', 74, 3, 23.23];

  function determineNum($param) {
    $isNum = is_numeric($param);
    $roundedVal = $isNum ? round($param) : "non numeric";
    $isEven = $isNum ?
                $roundedVal % 2 == 0 ?
                  "EVEN" : "ODD"
              : "non numeric";

    echo "Variable: $param <br>";
    echo "Is numeric? ", is_numeric($param) ? "YES" : "NO", " <br>";
    echo "Rounded value: ", $roundedVal, "<br>";
    echo "Is Even? ", $isEven, "<br><br><br><br>";
  }

  foreach ($variables as $key => $variable) {
    $key++;
    echo "=== SAMPLE $key === <br>";
    determineNum($variable);
  }
?>
