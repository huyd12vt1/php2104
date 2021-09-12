<?php

  $servername = "localhost";
  $username = "huy";
  $password = "abc123";
  $dbname = "Huy_php2104";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "Connect database successfully! <br>";
  }

?>