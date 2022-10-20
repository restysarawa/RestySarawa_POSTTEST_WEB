<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <section>
        <div class="circle" id="circle">

        </div>
        <header>

            <a href="#"><img src="Bakery-Logo.png" class="logo" alt=""></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <label id="dark-change"></label>
        </header>

        <div class="content" id="content">
            <div class="textBox">
                <h2><br>Ini <span>Struk Belanja</span></h2>
                <center>
                    <p>
                        Terima Kasih, <?php echo $_POST["firstname"]." ".$_POST["lastname"]." "; ?>atas pembeliannya.<br>
                        Invoice Pembelian akan dikirim melalui email : <?php echo " ".$_POST["email"]."."; ?><br>
                        Nomor Telepon : <?php echo " ".$_POST["phone"]."."; ?><br>
                        Pesanan :<?php echo " ".$_POST["country"]."."; ?><br>
                        Mohon Ditunggu Pesanannya.
                    </p>
                </center>
                
                <!-- <a href="">More Info</a> -->
            </div>

            <div class="imgBox">
                <img src="img3.png" class="waffle">
            </div>
        </div>
        
        <ul class="sci" >
            <li><a href="#"><img src="facebook.png" onclick="changeBackground('#000000')" alt=""></a></li>
            <li><a href="#"><img src="twitter.png" onclick="changeBackground('#ffffff')" alt=""></a></li>
            <li><a href="#"><img src="instagram.png" alt=""></a></li>
        </ul>
    </section>


    <script>
        // manipulasi DOM 
        document.getElementById("content").style.position = "relative";
        document.getElementById("circle").style.width = "100%";

        //addEventListener on DarkMode
        var content = document.getElementsByTagName('body')[0];
        var darkMode = document.getElementById('dark-change');
        darkMode.addEventListener('click', function(){
            darkMode.classList.toggle('active');
            content.classList.toggle('night');
            
            //Pop Up Box
            alert("Mode Changed");
        });
    </script>
</body>
</html>
