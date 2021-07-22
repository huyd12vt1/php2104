<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <title>Result PT Bac 2</title>
    <style>
        body {
            text-align: center;
            background-color: green;
            font-family: Arial;
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <?php
    $a1 = $_GET['a'];
    $b1 = $_GET['b'];
    $c1 = $_GET['c'];
    function giaiPTB2()
    {
        $a = $GLOBALS['a1'];
        $b = $GLOBALS['b1'];
        $c = $GLOBALS['c1'];
        // check he so
        echo 'PT bac 2 la: ' . $a . 'x2 + ' . $b . 'x + ' . $c . ' = 0' . '<br>';
        if ($a == 0) {
            if ($b == 0) {
                $result = 'PT vo nghiem!';
            } else {
                $result = 'PT co nghiem duy nhat: x = ' . (-$c / $b);
            }
        }
        // tính delta
        $delta = $b * $b - 4 * $a * $c;
        // tính nghiệm
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $result = "Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2;
        } elseif ($delta == 0) {
            $x1 = (-$b / (2 * $a));
            $result = "Phương trình có nghiệm kép: x1 = x2 = " . $x1;
        } else {
            $result = "Phương trình vô nghiệm!";
        }
        echo $result;
    }

    if (
        is_numeric($a1) && is_numeric($b1) && is_numeric($c1)
    ) {
        giaiPTB2($GLOBALS[$a1], $GLOBALS[$b1], $GLOBALS[$c1]);
    } else {
        echo ("Giá trị input không hợp lệ!");
    }
    ?>
</body>

</html>