<?php
  include "../db.php";
  ?>
  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>게시판</title>
</head>
<body>
<?php
  $bno = $_GET['idx'];
  $board = mysqli_fetch_array(mq("select * from notice_board where idx='".$bno."'")); #정보를 다가져오고 배열로 나누기위해 fetch_array를씀
  $hit = $board['hit'] +1;
  $fet = mq("update notice_board set hit ='".$hit."' where idx = '".$bno."'");
  #$sql = mq("select * from notice_board where idx='".$bno."'");
  #$board = $sql->fetch_array();
?>

  <div id="board_read">
    <h2><?php echo $board['title']; ?></h2>
      <div id="user_info">
        글쓴이: <?php echo $board['name']; ?> 글쓴날짜: <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
          <div id="bo_line"></div>
        </div>
      <div id="bo_content">
        <?php echo nl2br("$board[content]"); ?>
      </div>

      <div id="bo_ser">
        <ul>
          <li><a href="main.php">[메인화면으로]</a></li>
            <li><a href="modify.php?idx=<?php echo $board['idx'];?>">[수정]</a></li>
            <li><a href="delete.php?idx=<?php echo $board['idx'];?>">[삭제]</a></li>
        </ul>
      </div>
    </body>
</html>
