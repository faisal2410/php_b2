<?php
// for($i=1;$i<=10;$i++) {
//     echo "i=".$i.": ";
//     for($j=1;$j<=10;$j++) {
//        echo $j.' '; 
//     }
//     echo '<br>';
// }

// 1
// 1 2
// 1 2 3
// 1 2 3 4

// for($i=1;$i<=4;$i++) {
//     for($j=1;$j<=$i;$j++) {
//         echo $j . ' ';
//     }
//     echo '<br>';
// }

// 1
// 2 1
// 3 2 1
// 4 3 2 1

// for($i=1;$i<=4;$i++) {
//     for($j=$i;$j>=1;$j--) {
//         echo $j . ' ';
//     }
//     echo '<br>';
// }

// 4 3 2 1
// 4 3 2
// 4 3
// 4

// for($i=1;$i<=4;$i++) {
//     for($j=4;$j>=$i;$j--) {
//         echo $j . ' ';
//     }
//     echo '<br>';
// }

//          1 
//       2  1  2
//    3  2  1  2  3
// 4  3  2  1  2  3  4

// $total_rows = 8;
// for($i=1;$i<=$total_rows;$i++) {
//     for($k=$total_rows-1;$k>=$i;$k--) {
//         echo '&nbsp;&nbsp;&nbsp;';
//     }
//     for($j=$i;$j>=1;$j--) {
//         echo $j . ' ';
//     }
//     for($m=2;$m<=$i;$m++) {
//         echo $m . ' ';
//     }
//     echo '<br>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item-container {
            width: 100%;
        }
        .item {
            width: 15%;
            height: auto;
            float: left;
            padding: 20px;
            border: 1px solid #666;
            margin-right: 10px;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="item-container">
    <?php
    for($j=1;$j<=10;$j++) {
        ?>
        <div class="item">
            <?php
            for($i=1;$i<=10;$i++) {
                echo '<div>';
                echo $j . ' x ' . $i . ' = ' . ($i*$j);
                echo '</div>';
            }
            ?>
        </div>
        <?php
    }
    ?>
</div>
    
</body>
</html>