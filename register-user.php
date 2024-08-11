<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as User</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Register as User</h2>
        <form id="registerFormUser"  method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
    <?php
        if(isset($_POST['register']))
        {
            $servername="localhost";
            $username="root";
            $password="";
            $database="dms";
            
            $conn=mysqli_connect($servername,$username,$password,$database);
            if(!$conn){
              die("Sorry we failed to connect: ".mysqli_connect_error());
            }

            $user=$_POST['username'];
           
            $pass=$_POST['password'];

            $sql = "INSERT INTO `users`(`username`,`password`) VALUES ('$user','$pass')";
            $result=mysqli_query($conn,$sql);
            header('location:login.php');
        }
    ?>

    <!-- <script type='javascript'>
        document.getElementById('registerFormUser').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            // Handle registration logic here (e.g., save data to a server)
            alert('Registration successful! Redirecting to login page...');
            window.location.href = 'login.php'; // Redirect to login page after registration
        });
    </script> -->
</body>
</html>
