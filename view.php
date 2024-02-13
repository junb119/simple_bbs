<?php
  require_once('config.php');
  $num = $_GET['idx'];

  $sql = "select * from bbs where idx={$num}";
  $result = mysqli_query($mysqli, $sql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  
  if ($row = mysqli_fetch_object($result)) {
  ?>
  <h1>글 상세</h1>
  <h2>글쓴이 : <?=$row->username;?> </h2>
  <h3>글내용</h3>
  <div>
  <?=$row->usermsg;?>
  </div>
  <?php
  } else {
    echo "<script>alert('해당 글이 없습니다.'); location.href='index.php';</script>;";
  }
  ?>
</body>
</html>