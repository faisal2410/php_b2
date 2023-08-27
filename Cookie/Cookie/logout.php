<?php
setcookie('un', '', time()-1);
setcookie('pw', '', time()-1);
header('location: index.php');
?>