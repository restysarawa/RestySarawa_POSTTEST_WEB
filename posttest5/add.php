
<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
                <input type="text" name="firstname">
                <input type="text" name="lastname">
                <input type="email" name="email">
                <input type="text" name="phone">
                <select id="country" name="country">
                    <option value="Waffle">Waffle</option>
                    <option value="Pie Cherry">Pie Cherry</option>
                    <option value="Rainbow Cake">Rainbow Cake</option>
                </select>
                <input type="submit" name="Submit" value="Add">
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $food = $_POST['country'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO daftar_pesanan(firstname,lastname,email,phone,food) VALUES('$firstname','$lastname','$email','$phone','$food')");
        
        // Show message when user added
        echo "User added successfully. <a href='read.php'>View Users</a>";
    }
    ?>
</body>
</html>
