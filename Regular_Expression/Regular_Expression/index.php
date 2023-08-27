<?php
// $str = "arefindev@gmail.com";
// if(preg_match("/^[a-zA-Z0-9]+@+[0-9a-zA-Z]+\.[a-zA-Z]{2,5}$/", $str)) {
//     echo 'Email is valid';
// } else {
//     echo 'Email is not valid';
// }

$str = "Bangladesh is a nice country. Bangladesh is a very good country.";
echo preg_replace("/bangladesh/i","USA",$str);

?>