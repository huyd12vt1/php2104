<?php

    $id = $_GET['id'];
    $Name_is = $_POST['Name_is'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Address_is = $_POST['Address_is'];
    if (!empty($_POST['Name_is']) && !empty($_POST['Email']) && !empty($_POST['Phone']) && !empty($_POST['Address_is'])) {
        require_once 'Mysql_connect_db.php';

            // update table
        $sql = "UPDATE Info_User
        SET Name_is='$Name_is', Email='$Email', Phone='$Phone', Address_is='$Address_is'
        WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Updated Info successfully!!! <br>";
?>        

            <html>
                <a href="Mysql_display_data_table.php">Back</a>
            </html>

<?php        
        } else {
            echo "Error updating record: " . $conn->error;
            die();
        }
    } else {
        echo "Input Value Not Empty!!!";
    }

?>