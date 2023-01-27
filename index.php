<?session_start();?>  // session session_start

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> // html incoding
        <title>Sunny</title>
    </head>  
    <body>
        <header>
            <h1>
                <a href="index.php">Sunny</a>
            </h1>
        </header>
        <?
            if($_SESSION['userid']){
                echo "<nav align=right> welcome"
                .$_SESSION['user_nic']."!&nbsp&nbsp
                <a href='logout.php'>logout</a>
                <a target='iframe1'href='my_page.php'>my page</a>
                </nav>;"
            }
        else{
        ?>
        <nav align=right>
            <a href="login.php">login</a>
            <a href="sign_up.php">sign_up</a>
        </nav>
        <?
        }
        ?>
        <aside id="left">
            <h4>category</h4>
            <ul>
                <li><a target="iframe1" href="board.php?board_id=notice">notice</a></li>
            </ul>
        </aside>
        <section id="main">
            <article id="article1">
                <iframe name ="iframe1" src="main.php" width="1000px" height="700px" seamless></iframe>
            </article>
        </section>
        <footer> Copyright (c) 2023 sunny</footer>
    </body>
</html>