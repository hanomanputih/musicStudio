<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style1.css"/>
        <title></title>
    </head>
    <body style="background-image: url(piano2.jpg);background-repeat: no-repeat"  bgcolor="#A0A0A0 ">
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
                if (($_GET["cat"] == "home")) {
                    echo "<meta http-equiv=refresh content=0;url=homeadmin.php?cat=home>";
                } else if ($_GET["cat"] == "search") {
                    echo "<meta http-equiv=refresh content=0;url=homeadmin.php?cat=search>";
                } else if ($_GET["cat"] == "kelola") {
                    echo "<meta http-equiv=refresh content=0;url=homeadmin.php?cat=kelola>";
                } else if ($_GET["cat"] == "input") {
                    echo "<meta http-equiv=refresh content=0;url=homeadmin.php?cat=input>";
                } else if (($_GET["cat"] == "edit") or (!isset($_GET["cat"]))) {

                    session_start();
                    include 'koneksi.php';
                    $user = $_SESSION["username"];
                    $id = $_GET['id'];
                    $query = "select * from studio where idstudio = '$id'";
                    $sql = mysql_query($query);
                    $data = mysql_fetch_array($sql);
                    ?> 
                    <form method="post" action="edit_studio.php" enctype="multipart/form-data">
                        <h2 align="center">EDIT</h2>
                        <table align="center">
                            <tr>
                                <td>ID Studio</td>
                                <td style="color: gray">:  <input type="text" name="id" value="<?php echo $data['idstudio'] ?>" readonly="true">tidak untuk di edit</td>
                            </tr>
                            <tr>
                                <td>Nama Studio</td>
                                <td>: <input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Info</td>
                                <td>: <textarea name="info"><?php echo $data['info'] ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td>: <select name="lokasi" spellcheck="<?php echo $data['lokasi'] ?>">
                                        <option value="<?php echo $data['lokasi'] ?>"><?php echo $data['lokasi'] ?></option>
                                        <option value="yogyakarta">Yogyakarta</option>
                                        <option value="sleman">Sleman</option>
                                        <option value="bantul">Bantul</option>


                                    </select></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Contact Person</td>
                                <td>: <input type="text" name="cp" value="<?php echo $data['cp'] ?>"></td>
                            </tr
                            <tr>
                                <td>Ganti Foto</td>
                                <td>: <input type="file" name="foto"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><img src="image_studio/<?php echo $data['foto']; ?>" width="20%" height="20%">Foto Lama</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="Simpan"> <input type="reset" name="Reset"></td>
                            </tr>

                        </table>

                    </form> 
                    <?php
                }
                ?>

            </div>
            <div id="kanan"> <br/>
                <?php echo "Selamat Datang " . $username; ?>
                <br/>Mohon hati-hati dalam melakukan update ataupun pengeditan . .<br/>terimakasih . .
            </div>

            <div style="clear:both"></div>
            <div id="footer">Copyright@ TigaSerangkai 2012</div>
        </div>


    </body>

</html>




