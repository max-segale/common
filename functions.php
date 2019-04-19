<?php

// mysql query
function sqlQuery($query) {
    global $sqlHost, $sqlUser, $sqlPass, $dbName;
    $mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    if ($result = $mysqli->query($query)) {
        return $result;
    }
    $mysqli->close();
}

// return datetime object as string
function dateTimeStr($dateTime) {
    return $dateTime->format('Y-m-d H:i:s');
}

// add full vendor prefixes to a css property or value
function vFix($property, $value, $toValue) {
    $vendors = ['-webkit-', '-moz-', '-ms-'];
    foreach ($vendors as $v) {
        $propCSS .= "$v$property: ";
        if ($toValue) {
            $propCSS .= $v;
        }
        $propCSS .= "$value;
    ";
    }
    if ($toValue) {
        foreach ($vendors as $v) {
            $propCSS .= "$property: $v$value;
    ";
        }
    }
    $propCSS .= "$property: $value;";
    return $propCSS;
}

?>
