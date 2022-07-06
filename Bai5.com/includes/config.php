<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($conn, 'UTF8');
if (!$conn)
  echo "Kết nối thất bại";
else {
  $db = mysqli_select_db($conn, "database");
  if (!$db)
    echo "Sai CSDL!";
}
