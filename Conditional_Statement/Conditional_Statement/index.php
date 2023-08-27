<?php
//$a = 10;
// if($a == 20) {
//     echo "The value is 10";
// }

// if($a == 10):
//     echo "Bangladesh<br>";
//     echo "USA<br>";
//     echo "Canada<br>";
// endif;

// if($a == 10) {
//     echo 'Bangladesh';
// } else {
//     echo 'USA';
// }

// if($a == 10):
//     echo 'Bangladesh';
// else:
//     echo 'USA';
// endif;

$age = 12;
// if($age < 18) {
//     echo "His age is ".$age." and He is not adult yet";
// } elseif($age == 18) {
//     echo "His age is ".$age." and he just reached in adult age";
// } else {
//     echo "His age is ".$age." and he is over 18";
// }

if($age < 18):
    echo "His age is ".$age." and He is not adult yet";
elseif($age == 18):
    echo "His age is ".$age." and he just reached in adult age";
else:
    echo "His age is ".$age." and he is over 18";
endif;


?>