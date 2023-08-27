<?php
//$arr = [12,34,12,45,67,78,89,99,12,45,32];
//echo count($arr);
//echo var_dump($arr);
// echo '<pre>';
// echo print_r($arr);
// echo '</pre>';
//echo var_dump(in_array(34, $arr));
//echo max($arr);
//echo min($arr);

//$new_arr = array_values(array_unique($arr));

// echo '<pre>';
// echo print_r($new_arr);
// echo '</pre>';

// $date_of_birth = "2002-02-24";
// $arr = explode("-",$date_of_birth);

// echo '<pre>';
// echo print_r($arr);
// echo '</pre>';

// $arr = ["Bangladesh", "Canada", "USA"];
// $str = implode("::", $arr);
// echo $str;

// $arr = [12,34,12,45,67,78,89,99,12,45,32];
$arr = [
    "Bangladesh" => 64,
    "USA" => 100,
    "Canada" => 300
];
//sort($arr);
//rsort($arr);
//asort($arr);
//ksort($arr);
//arsort($arr);
krsort($arr);
echo '<pre>';
echo print_r($arr);
echo '</pre>';
?>