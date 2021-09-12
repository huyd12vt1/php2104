<?php

  // Connect mysql
  $servername = "localhost";
  $username = "huy";
  $password = "abc123";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Create database
  $sql = "CREATE DATABASE Huy_php2104";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully! <br>";
  } else {
    echo "Error creating database: " . $conn->error;
  }

  // select db
  $conn->select_db("Huy_php2104");

?>