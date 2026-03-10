<?php
    $celsius = 0;

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead style='background-color: #03e8fc;'><tr><th>Celsius</th><th>Fahrenheit</th></tr></thead>";
    echo "<tbody>";

    do {
        if ($celsius !== null) {
            echo "<tr><td>" . $celsius . "°</td><td>" . ($celsius * 9/5 + 32) . "°</td></tr>";
            $celsius++;
        }
    } while ($celsius <= 100)
?>