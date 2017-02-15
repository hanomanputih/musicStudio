<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style1.css"/>
        <title></title>
    </head>
    <body style="background-image: url(piano2.jpg);background-repeat: repeat-y"  bgcolor="#A0A0A0 ">
        <div id="wrapper">
            <div id="header"><h1>Web Site Informasi Music Studio</h1></div>
            <h4>            
                <?php
                @session_start();
                include 'koneksi.php';

                $username = $_SESSION["username"];
                echo $username . " Login Sebagai Admin";
                ?>
            </h4>
            <h1 style="text-align: center"></h1>
            <div id="menu">
                <ul>
                    <li><a href="?cat=home">HOME</a> </li> 
                    <li><a href="?cat=search">SEARCH</a></li>
                    <li><a href="?cat=kelola">KELOLA</a></li
                    <li><a href="?cat=input">TAMBAH STUDIO</a></li>
                    <li></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <br/>

            <div id="kiri"> <?php
                if (($_GET["cat"] == "home") or (!isset($_GET["cat"]))) {
                    include "home.php";
                } else if ($_GET["cat"] == "search") {
                    include "search.php";
                } else if ($_GET["cat"] == "kelola") {
                    include "kelola.php";
                } else if ($_GET["cat"] == "input") {
                    include "inputstudio.php";
                } 
                ?>

            </div>
                       <div id="kanan"> <br/>
          <?php echo "Selamat Datang " . $username ;?>
                           <br/>Mohon hati-hati dalam melakukan update ataupun pengeditan . .<br/>terimakasih . .
               </div>

            <div style="clear:both"></div>
            <div id="footer">Copyright@ TigaSerangkai 2012</div>
        </div>


    </body>

</html>
