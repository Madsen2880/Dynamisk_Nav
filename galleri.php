<?php

$billednavne = array("bil1.jpg", "bil2.jpg", "bil3.jpg", "bil4.jpg");
$billednavne = array (
    0 => "bil1.jpg",
    1 => "bil2.jpg",
    2 => "bil3.jpg"
);
/*
echo '<pre>';
print_r($billednavne);
echo '</pre>';*/

$antalBilleder = count($billednavne);
$billednummer = 0;

while ($billednummer < $antalBilleder){
    echo '<img src="img/' .$billednavne[$billednummer] . '">';
    $billednummer++;
}

foreach ($billednavne as $key => $value) {
    echo '<img src="img/'.$value .'" alt="'.$value.'" title="'.$value.'">';
}