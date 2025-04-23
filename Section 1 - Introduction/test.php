<?php
// $ourCollNumber = 2 + 2;
// echo $ourCollNumber;

$catName = 'Mewosalot';

echo 'The name of the cat is ' . $catName . " and that is the truth.";
echo "\n";
echo "The name of the cat is {$catName} and that is the truth.";
echo "\n";


function doubleMe($x) {
    return $x * 2;
};

function tripleMe($x) {
    return $x * 3;
};

echo "\n";
// echo doubleMe(5);
// echo doubleMe(55);
echo tripleMe(doubleMe(50));
$ourCoolNumberEquals =  tripleMe(doubleMe(3));

echo "\n";
if ($ourCoolNumberEquals > 200) {
    echo "The number is large enought";
} else {
    echo "The number is not large enought";
}