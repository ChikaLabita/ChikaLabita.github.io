<html>
    <head>
    </head>
    <body>
        <?php
            if(isset($_GET["myname"]) AND isset($_GET["myaddress"])){
                echo "Selamat Datang " . $_GET["myname"] . "!!<br>";
                echo "Dari " . $_GET["myaddress"];
            }
            else{
                echo "Maaf, Anda harus mengakses halaman ini dari form_1.html";
            }
        ?>
    </body>
</html>


<html>
    <head>
    </head>
    <body>
        Selamat Datang <?php echo $_GET["myname"]; ?>!!<br>
        Dari <?php echo $_GET{"myaddress"}; ?>
    </body>
</html>