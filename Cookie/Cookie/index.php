<?php
if(isset($_POST['form1'])) {

    if($_REQUEST['username']=='arefin' && $_REQUEST['password']=='1234') {
        
        setcookie('un', $_REQUEST['username'], time() + (86400));
        setcookie('pw', $_REQUEST['password'], time() + (86400));
        setcookie('chk', $_REQUEST['chk'], time() + (86400));
        header('location: welcome.php');

    } else {
        header('location: index.php');
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
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Remember?</td>
                <td>
                    <input type="hidden" name="chk" value="0">
                    <input type="checkbox" name="chk" value="1" <?php 
                    if(isset($_COOKIE['chk'])) {
                        if($_COOKIE['chk']==1) {
                            echo 'checked'; 
                    }
                } 
                    ?>>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" name="form1"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>