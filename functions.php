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

?>
