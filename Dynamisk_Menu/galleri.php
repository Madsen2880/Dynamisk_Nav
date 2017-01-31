<?php

$billednavne = array("billede2.jpg","billede22.jpg","billede3.jpg","illu.jpg");




$antalBilleder = count($billednavne);
$billednummer = 0;

while ($billednummer < $antalBilleder){
    echo '<img src="img/' .$billednavne[$billednummer] . '">';
    $billednummer++;
}
