<?php

$gender = array("1" => "Mann", "2" => "Frau");

function getDays() {
    $days = array();

    for ($i = 1; $i < 32; $i++) {
        $days[] = $i;
    }

    return $days;
}

function getMonths() {
    $months = array();

    for ($i = 1; $i < 13; $i++) {
        $months[] = $i;
    }

    return $months;
}

function getYears() {
    $actualYear = date("Y");
    $startYear = $actualYear - 18;
    $endYear = $actualYear - 100;

    $years = array();

    for ($i = $startYear; $i < $endYear; $i++) {
        $years[] = $i;
    }

    return $years;
}
?>

