<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT'S SUNNY</title>
    <style>
    *{
      background-color: white;
    }
    body{
    }
    header {
      width: 100%;
      height: 100px;
    }
    nav {
      width: 100%;
      height: 23px;
      border-top: 1px solid red;
      border-bottom: 1px solid red;
      margin-right: 10%;
      background-color: black;
      color: white;
    }
    nav a{
      background-color: black;
      color: white;
      text-decoration: none;
    }
 
      #left{
        position: fixed;
        left: 30px;top: 200px;bottom: 0;
        width: 200px;
      }
      #left ul{
        background-color: black;
        list-style: none;
        margin: 0;
        padding: 0;
      }
      #left ul li{
        margin-left: 20px;
        padding-top: 5px;
        background-color: black;
      }
      #left ul li a{
        background-color: black;
        color: white;
        text-decoration: none;
      }
      #main{
        padding-left: 250px;
        padding-top: 20px;
        left: 250px;top: 200px;bottom: 0;
        width: 60%;
        height: 500px;
      }
      .f{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header align=center>
      <h1>
        <a href="index.php">SUNNY</a>
      </h1>
    </header>
    <php? session_start()
      if($_SESSION['userid']){
        echo "
        <nav align=right>
        welcome ".$_SESSION['user_nic']."!&nbsp&nbsp&nbsp
        <a href='logout.php'>로그아웃</a>
        <a target='iframe1' href='my_page.php'>마이페이지</a>
        </nav>";
      }
        else{
    ?>
    <nav text-align=right>
      <a href="login.php">LOGIN</a>
      <a href="sign_up.php">SIGN UP</a>
    </nav>
    <php?
    }
    ?>
    <aside id="left">
      <h4>CATEGORY</h4>
      <ul>
        <li><a target="iframe1" href="board.php?board_id=notice">NOTICE</a></li>
      </ul>
    </aside>
    <section id="main">
      <article id="article1">
        
      </article>
    </section>
  </body>
</html>

