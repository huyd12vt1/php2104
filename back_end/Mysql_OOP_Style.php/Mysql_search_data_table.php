<?php

    // Connect db
    require_once 'Mysql_connect_db.php';

    // Search Info
    $value = $_POST['search'];
    $sql = "SELECT * FROM Info_User WHERE Name_is LIKE '%$value%'";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC); 
    if (!empty($data)) { 
?>    
<div class='container'>
    <h4>User Information:</h4>
    <table style='width:100%'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        </tr>
<?php         
    // output data of each row
    foreach($data as $row) {
?>  
        <tr>
        <td> <?php echo $row["id"]?> </td>
        <td> <?php echo $row["Name_is"]?> </td>
        <td> <?php echo $row["Email"]?> </td>
        <td> <?php echo $row["Phone"]?> </td>
        <td> <?php echo $row["Address_is"]?> </td>
        <td> <a href="Html_edit_info_user.php?id=<?php echo $row['id'] ?>">Edit</a></td>
        <td> <a href="Mysql_delete_data_table.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>          
<?php } ?>
    </table>
</div>
<?php  
} else {
    echo "Empty results.";
    die();
}
?>
