<?php


$dreamcatcher = array();

echo " Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$amount = readline("");


for ($i = 1; $i <= $amount; $i++) {
    echo  "Wat is jouw naam?" . PHP_EOL;
    $name = readline("");

    echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
    $amountD = readline("");

    $catcher = array();
    for ($f = 1; $f <= $amountD; $f++) {

        echo "Wat is jouw droom?" . PHP_EOL;
        $wdream = readline("");

        array_push($catcher, $wdream);
    }
    $dreamcatcher[$name] = $catcher;
}

foreach ($dreamcatcher as $name => $wdream) {
    foreach ($wdream as $catcher) {
        echo "$name heeft als droom: $catcher" . PHP_EOL;
    }
}
