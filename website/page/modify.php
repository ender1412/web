<?php include "../db.php";
  $bno = $_GET['idx'];
  $sql = mq("select * from notice_board where idx='$bno';");
  $board = $sql->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>게시글수정</title>
</head>
<body>
<div id = "board_write">
  <h1><a href="main.php">메인으로</a></h1>
  <form action="../member/modify_ok.php?idx=<?php echo $bno; ?>" method="post">
    <div id="in_title">
      <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
    </div>
    <div class="wi_line"></div>
    <div id="in_name">
      <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required><?php echo $board['name']; ?></textarea>
    </div>
    <div class="wi_line"></div>
    <div id="in_content">
      <textarea name="content" id="ucontent" rows="3" cols="100" placeholder="내용" maxlength="100" required><?php echo $board['content']; ?></textarea>
    </div>
    <div id="in_pw">
      <input type="password" name="pw" id="upw" placeholder="비밀번호" required></input>
    </div>
    <div class="bt_se">
      <button type="submit">글 작성</button>
    </div>
  </form>
</body>
</html>
