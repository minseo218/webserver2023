<?
  include ('sql_conn.php');
  $id = $_POST['userid'];
  $pw = $_POST['userpw'];
  $sql = mq("insert into user (id, pw, user_date) values ('".$id."','".$px."')");
  echo "
  <script>
    location.href='index.php'
  </script>";
?>