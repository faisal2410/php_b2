<?php

// echo $_REQUEST['name'];
// echo $_REQUEST['email'];

if($_REQUEST['name'] == 'Arefin') {
    header("location: index.php?message=success");
} else {
    header("location: index.php?message=error");
}