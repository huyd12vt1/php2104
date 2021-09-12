<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>test_lesson2</title>
    <style type="text/css">
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }

        th {
            width: 25%;
        }

        h1 {
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <?php

    echo '<h1> Table Information Students: </h1>';
    $text = "<table width='100%'>"
        . "<tr>"
        . "<th>No</th>"
        . "<th>Name</th>"
        . "<th>Class</th>"
        . "<th>Point</th>"
        . "</tr>";
    $studen = [
        [1, 'Giang', 'PHP2008', 6],
        [2, 'Kien', 'PHP2104', 7],
        [3, 'Nam', 'PHP2105', 8],
        [4, 'Hieu', 'PHP2103', 8],
        [5, 'Dat', 'PHP2103', 6],
        [6, 'Hoang', 'PHP2103', 8],
        [7, 'Hoan', 'PHP2103', 9],
        [8, 'Khiem', 'PHP2103', 8],
    ];
    $studen_length = count($studen);
    for ($i = 0; $i < $studen_length; $i++) {
        $text .= "<tr>";
        $child_studen = $studen[$i];
        $child_studen_length = count($child_studen);

        for ($j = 0; $j < $child_studen_length; $j++) {
            $text .= "<td>" . $child_studen[$j] . "</td>";
        }
        $text .= "</tr>";
    }
    echo $text .= "</table>";
    ?>

</body>

</html>