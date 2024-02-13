<?php
// $mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
$mysqli = mysqli_connect('localhost', 'simplebbs', '12345', 'simplebbs');

if (mysqli_connect_error()) {
  // throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
  echo "DB연결에 실패했습니다.".mysqli_connect_errno();
}

?>



