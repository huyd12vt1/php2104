<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Footer</title>
</head>

<body>
    <?php
    // $color='red';
    // $car='BMW';
    // echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";




    // Check chuoi doi xung
    // function check ($str) {
    //     $array = str_split($str);
    //     $len = strlen($str);
    //     for ($i=0; $i<=$len/2; $i++) {
    //         if($array[$i] == $array[($len-1-$i)]) {
    //             return $result = 1;
    //         } else {
    //             return $result = 0;
    //         }
    //     }
    //     return $result;
    // }

    // $str = 'abcbaasdasd';
    // $result = check($str);
    // if ($result == 1) {
    //     echo "YES";
    // } elseif ($result == 0) {
    //     echo "NO";
    // }
    class abc {
        // public static function aaa($a, $b) {
        //     return $a + $b;
        // }
        public static function aaa($d, $e, $f) {
            return $d + $e + $f;
        }
    }
    // echo abc::aaa(1,2) . '<br';
    echo abc::aaa(1,2,3) . '<br';



    ?>
</body>

</html>