<?php 
  require_once('config.php');
  $username = $_POST['username'];
  $usermsg = $_POST['usermsg'];

  
  $sql = "INSERT INTO bbs (username,usermsg) VALUES('$username', '$usermsg');";

  $result = mysqli_query($mysqli, $sql);

  if (!$result) {
    echo "<script>alert(저장 실패);history.back();</script>";
    error_log(mysqli_error($mysqli));
  } else {
    echo "<script>alert('저장 성공');location.href='./index.php';</script>";
    echo '<a href="index.php">홈</a>';
  }
?>