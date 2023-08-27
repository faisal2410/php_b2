<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // if(isset($_POST['form1'])) {
        //     echo $_REQUEST['name'].'<br>';
        //     echo $_REQUEST['email'];
        // }
        // if(isset($_REQUEST['message'])) {
        //     if($_REQUEST['message'] == 'success') {
        //         echo 'Successful!';
        //     } else {
        //         echo 'Error!';
        //     }
        // }
    ?>

    <!-- <form action="result.php" method="post">
        <div>Name: </div>
        <div>
            <input type="text" name="name" autocomplete="off">
        </div>
        <div>Email: </div>
        <div>
            <input type="text" name="email" autocomplete="off">
        </div>
        <div>
            <input type="submit" value="Submit" name="form1">
        </div>
    </form> -->

    <!-- <a href="index1.php?name=arefin&age=30">Go to index1 page</a> -->

    <?php
        if(isset($_POST['form1'])) {
            // $sum = $_REQUEST['num1']+$_REQUEST['num2'];
            // echo $sum;
            for($i=1;$i<=$_REQUEST['line_number'];$i++) {
                for($j=1;$j<=$i;$j++) {
                    echo $j . ' ';
                }
                echo '<br>';
            }
        }
    ?>

    <form action="" method="post">
        <div>Enter Line Number: </div>
        <div>
            <input type="text" name="line_number" autocomplete="off">
        </div>
        <div>
            <input type="submit" value="Submit" name="form1">
        </div>
    </form>

    
</body>
</html>