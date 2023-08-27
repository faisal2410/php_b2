<?php
//echo 'Test';
//setcookie('fullname', 'Morshedul Arefin');
// setcookie('fullname', 'Morshedul Arefin', time() + (86400));
// setcookie('username', 'Arefin', time() + (86400*10));

// setcookie('fullname', '', time()-1);
// setcookie('username', '', time()-1);
// echo $_COOKIE['fullname'];

if(isset($_POST['form1'])) {
    setcookie('pr', $_REQUEST['person'], time() + (86400));
    header('location: index.php');
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
    
    <?php if(!isset($_COOKIE['pr'])): ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Select Person to vote:</td>
                <td>
                    <select name="person">
                        <option value="Arefin">Arefin</option>
                        <option value="Peter">Peter</option>
                        <option value="Smith">Smith</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="form1"></td>
            </tr>
        </table>
    </form>
    <?php else: ?>
        You already have given vote to <?php echo $_COOKIE['pr']; ?>. Please come here after 24 hours.
    <?php endif; ?>

</body>
</html>