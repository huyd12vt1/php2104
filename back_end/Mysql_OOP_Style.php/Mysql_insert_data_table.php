<?php

  $Name_is = $_POST['Name_is'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Address_is = $_POST['Address_is'];
  if (!empty($Name_is) && !empty($Email) && !empty($Phone) && !empty($Address_is)) {
    require_once 'Mysql_connect_db.php';
    
      // Insert data
    $sql = "INSERT INTO Info_User (Name_is, Email, Phone, Address_is) VALUES ('$Name_is', '$Email', '$Phone', '$Address_is')";    
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      die;
    }

  } else {
    
?>

<html>
    <div class="container">
      <p>Nhap vao day du gia tri!!!</p>
    </div>
</html>

<?php
    die();
  }  
?>