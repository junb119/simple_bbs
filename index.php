<?php 
  require_once('config.php');

  $sql = "SELECT * FROM bbs";
  $result = mysqli_query($mysqli, $sql);

  // --------- fetch_row
  // print_r(mysqli_fetch_row($result));
  // while ($row = mysqli_fetch_row($result)) {
  //   printf($row[1]);
  // }
  
  // --------- fetch_row
  // print_r(mysqli_fetch_assoc($result));
  // while ($row = mysqli_fetch_assoc($result)) {
  //   printf($row['username']);
  // }

  // print_r(mysqli_fetch_array($result))

  // while ($row = mysqli_fetch_array($result)) {
  //   printf($row[0]);
  //   printf($row['username']);
  // }

  // print_r(mysqli_fetch_object($result));

  $list = '';
  while ($row = mysqli_fetch_object($result)) {
    $list .= "<li><a href=\"view.php?idx={$row->idx}\">{$row -> username}</a></li>";
  }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Simple BBS</title>
</head>
<body>
  <h1>Simple BBS</h1>
  <ul>
    <?=$list;?>
    <!-- <li><a href="">글 제목1</a> <a href="">수정</a> <a href="">삭제</a></li> -->
    
  </ul>
  <p>
    <a href="write.php">글쓰기</a>
  </p>
  <hr>
  <form action="">
    <input type="search">
    <button>검색</button>
  </form>
</body>
</html>