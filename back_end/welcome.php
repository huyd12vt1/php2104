<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>welcome PHP</title>
</head>

<body>
    <?php echo 'Now is: ' . date('d:i:sa'); ?> <br>
    Welcome <?php echo $_POST["name"]; ?> <br />
    Your e-mail address is: <?php echo $_POST["email"]; ?>
</body>

</html>