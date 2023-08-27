<?php
if(!isset($_COOKIE['un']) || !isset($_COOKIE['pw'])) {
    header('location: index.php');
} else {
    if($_COOKIE['un'] == 'arefin' && $_COOKIE['pw']== '1234') {
        ?>
        <h2>Welcome to dashboard</h2>
        <p>
            <a href="logout.php">Logout</a>
        </p>
        <?php
    } else {
        header('location: index.php');
    }
}
