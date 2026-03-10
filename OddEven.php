<?php
    $max = 100;

    function isEven(int $num): bool {
        return $num % 2 === 0;
    }

    echo "max number = $max";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead style='background-color: #03e8fc;'><tr><th>Odd</th><th>Even</th></tr></thead>";
    echo "<tbody>";

    $odd = null; // set to null for last row being empty
    for ($num = 1; $num <= $max; $num++) {
        if (isEven($num)) {
            echo "<tr><td>" . ($odd ?? '') . "</td><td>$num</td></tr>";
            $odd = null; // reset odd
        } else {
            $odd = $num;
        }
    }

    // handle last odd number if max is odd
    if ($odd !== null) {
        echo "<tr><td>$odd</td><td></td></tr>";
    }

    echo "</tbody></table>";
?>