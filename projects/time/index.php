<?php
$a = 1;
while ($a == 1) {
    $tz = date("Z");  //timezone offset of server in seconds

    $est  = 3600 * -5;  // -0500 gmt
    $cst  = 3600 * -6;
    $mst  = 3600 * -7;
    $pst  = 3600 * -8;
    $hast = 3600 * -10;

    $loop = 12;

    while ($loop >= -1){
        $time = 3600 * $loop;
        echo date("h:i A", strtotime("now +" . ($time - $tz) . " seconds"));
        echo "<br>";
        $loop = $loop + -1;
    }
    if (ob_get_contents()) ob_end_clean();
    sleep(1);
}


// add (or subtract) the appropriate number of seconds from the offset to recalculate the time

?> 