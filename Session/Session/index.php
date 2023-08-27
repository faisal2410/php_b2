<?php
ob_start();
session_start();

//$_SESSION['country'] = "Bangladesh";
//$_SESSION['city'] = "Dhaka";

// session_unset();
// session_destroy();

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

if(isset($_POST['form1'])) {
    try {
        if($_POST['username']!='admin') {
            throw new exception("Username does not match");
        }
        if($_POST['password']!='1234') {
            throw new exception("password does not match");
        }

        $_SESSION['username'] = "admin";
        $_SESSION['password'] = "1234";

        print_r($_SESSION);

        header("location: welcome.php");

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" name="form1"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>