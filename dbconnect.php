<?php
// Create connection
$conn = new mysqli("127.0.0.1", "root","", "school", 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



