<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Html_edit_info_user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<?php
  $id = $_GET['id'];
  if (!empty($id)) {
    require_once 'Mysql_connect_db.php';

    // select data
    $sql = "SELECT Name_is, Email, Phone, Address_is FROM Info_User WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

    <body>
    <div class="container">
        <form action="Mysql_update_data_table.php?id=<?php echo $id ?>" method="POST">
            <div class="row">
                <div class="col-sm-2">
                    <label for="Name_is">Name_is: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Name_is" id="Name_is" value="<?php echo $row['Name_is']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Email">Email: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Email" id="Email" value="<?php echo $row['Email']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Phone">Phone: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Phone" id="Phone" value="<?php echo $row['Phone']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Address_is">Address_is: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Address_is" id="Address_is" value="<?php echo $row['Address_is']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <input type="submit" name="click" value="Edit_Info" class="btn btn-primary">
                </div>     
            </div>
        </form>
    </div>

<?php } ?>

</body>
</html>