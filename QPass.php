<?php
    $qpasses = [1, 2, 7, 8, 10, 11, 15];

    $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    $mwfAllowedPasses = [1,3,5,7,9];
    $tthsAllowedPasses = [0,2,4,6,8];

    $testDay = null;
    $todayInDay = $testDay ?? date('N');

    $daySchedule = [
        1 => $mwfAllowedPasses,
        2 => $tthsAllowedPasses,
        3 => $mwfAllowedPasses,
        4 => $tthsAllowedPasses,
        5 => $mwfAllowedPasses,
        6 => $tthsAllowedPasses,
        7 => []
    ];

    $allowedPass = $daySchedule[$todayInDay];

    function checkPass($qpass, $allowedPass){

        if (empty($allowedPass)) {
            echo "<span style='color:gray; font-weight:bold;'>Access denied. No QPass CN are allowed today</span>.<br><br>";
        }
        else if (in_array($qpass, $allowedPass)) {
            echo "<span style='color:green; font-weight:bold;'>Access granted. QPass CN $qpass is ALLOWED today</span>.<br><br>";
        }
        else {
            echo "<span style='color:red; font-weight:bold;'>Access denied. QPass CN $qpass is NOT ALLOWED today</span>.<br><br>";
        }
    }

    foreach ($qpasses as $key => $qpass) {

        $key++;

        echo "======== SAMPLE $key ======== <br>";
        echo "Day: " . $days[$todayInDay - 1] . "<br>";
        echo "Person's QPass CN: $qpass <br>";
        echo "Allowed QPasses today: " . implode(", ", $allowedPass) . "<br><br>";

        checkPass($qpass, $allowedPass);
    }
?>