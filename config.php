<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'tnvr000');
  define('DB_PASSWORD', 'pqqrrr@123');
  define('DB_NAME', 'php_login');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if($conn == false) {
    dir('Error: Cannot connect');
  }
?>