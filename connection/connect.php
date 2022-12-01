<?php
$conn = new mysqli("localhost", "root", "", "ctc_food1");
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}