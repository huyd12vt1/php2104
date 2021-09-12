<?php

  // Connect db
  require_once 'Mysql_connect_db.php';

  // sql to create table
  $sql = "CREATE TABLE Info_User_2 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name_is VARCHAR(30) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Phone INT(11) UNSIGNED NOT NULL,
    Address_is VARCHAR(50) NOT NULL
  )";
    
  if ($conn->query($sql) === TRUE) {
    echo "Table User created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();

?>

