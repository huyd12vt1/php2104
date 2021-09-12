<?php
    $id = $_GET['id'];
    require_once 'Mysql_connect_db.php';

    $sql = "DELETE FROM Info_User WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Delete User Successfully! <br>";
?>

    <html>
        <a href="Html_Info_user.php">Back</a>
    </html>

<?php
    } else {
        echo "Delete User False!";
    }
?>