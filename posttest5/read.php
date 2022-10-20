<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM daftar_pesanan ORDER BY id DESC");
?>

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

        <div class="content" id="content" style="justify-content:center"> 
            <div class="textBox">

                
                <table width='100%' border=1>
                    <tr>
                        <th>Firstname</th> <th>Lastname</th> <th>Email</th> <th>Mobile</th> <th>Food</th> <th>Action</th>
                    </tr>
                    <center>
                    <?php  
                        while($user_data = mysqli_fetch_array($result)) {         
                            echo "<tr>";
                            echo "<td>".$user_data['firstname']."</td>";
                            echo "<td>".$user_data['lastname']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['phone']."</td>";
                            echo "<td>".$user_data['food']."</td>";    
                            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                        }
                    ?>
                    </center>
                    
                
                </table>    
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