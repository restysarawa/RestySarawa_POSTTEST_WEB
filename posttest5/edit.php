<?php
// Create database connection using config file
include_once("config.php");

if(isset($_POST['update'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $food = $_POST['country'];

    $result = mysqli_query($mysqli, "UPDATE `daftar_pesanan` SET `id`=$id,`firstname`=$firstname,`lastname`=$lastname,`email`=$email,`phone`=$phone,`food`=$food WHERE id=$id");

    header("Location: read.php");
}
?>

<?php
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM daftar_pesanan WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $firstname = $user_data['firstname'];
        $lastname = $user_data['lastname'];
        $email = $user_data['email'];
        $phone = $user_data['phone'];
        $food = $user_data['food'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
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
                <h2><span>Contact Form</span></h2>
                
                  <form action="edit.php" method="post">
                        <input type="text" id="firstname" name="firstname" placeholder="First Name..." value=<?php echo $firstname; ?>><br>
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name..." value=<?php echo $lastname; ?>><br>
                        <input type="email" id="email" name="email" placeholder="Your Email..." value=<?php echo $email; ?>><br>
                        <input type="text" id="phone" name="phone" placeholder="08XX-XXXX-XXXX..."  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" value=<?php echo $phone; ?>>
                        <select id="country" name="country">
                            <option value="Waffle">Waffle</option>
                            <option value="Pie Cherry">Pie Cherry</option>
                            <option value="Rainbow Cake">Rainbow Cake</option>
                        </select>
                        <input type="submit" name="update">
                  </form>
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