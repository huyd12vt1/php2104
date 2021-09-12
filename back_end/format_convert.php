<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Format_convert</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            display: inline;
        }
    </style>
</head>

<body>
    <h1>Format_convert</h1> <br />
    <form action="format_convert.php" method="POST">
        <textarea name="content" rows="5" cols="60">
            <?php
            $defaultCode =
                '$Test=2;' . "\n"
                . '$fisrt_name = \'Nguyen\';' . "\n";
            echo isset($_POST['content']) ? $_POST['content'] : $defaultCode;
            ?>
        </textarea>
        <input type="submit" name="convert" value="Convert" onclick="Convert()">
    </form>
    <?php
    if (isset($_POST['content'])) {
        $contentArr = explode("\n", $_POST['content']);
        $text = [];

        foreach ($contentArr as $value) {
            $firstChar = substr($value, 0, 2);
            $lineConvert = str_replace($firstChar, strtolower($firstChar), $value);

            $assignmentConvert = explode('=', $lineConvert);

            if (isset($assignmentConvert[0]) && isset($assignmentConvert[1])) {
                $variable = explode('_', trim($assignmentConvert[0]));

                if (isset($variable[1])) {
                    $lineConvert = $variable[0] . ucfirst($variable[1]) . ' = ' . trim($assignmentConvert[1]);
                } else {
                    $lineConvert = trim($assignmentConvert[0]) . ' = ' . trim($assignmentConvert[1]);
                }
            }

            $text[] = $lineConvert;
        }

        $contentStr = implode("\n", $text);
        // var_dump($contentStr);die;

        echo '<textarea name="" rows="5" cols="60">' . $contentStr . '</textarea>';
    }
    ?>



</body>

</html>