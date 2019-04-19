<?php

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