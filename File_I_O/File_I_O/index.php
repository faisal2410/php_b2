<?php
// $dir_content = scandir("/laragon");
// echo "<pre>";
// print_r($dir_content);
// echo "</pre>";

// if($fh = fopen('city.txt','r')) {
//     while(!feof($fh)) {
//         $line = fgets($fh);
//         echo $line.'<br>';
//     }
//     fclose($fh);
// }

// $file = file_get_contents('city.txt');
// echo nl2br($file);

// $file_lines = file('city.txt');
// foreach($file_lines as $line) {
//     echo $line.'<br>';
// }

// $filename = 'country.txt';
// $file = fopen($filename,'w');
// if($file == false) {
//     echo 'Error in opening file';
//     exit();
// }
// fwrite($file, "USA\nAustralia\nBangladesh");
// fclose($file);

$filename = 'country.txt';
$file = fopen($filename,'a');
if($file == false) {
    echo 'Error in opening file';
    exit();
}
fwrite($file, "\nBangladesh\nUSA");
fclose($file);
