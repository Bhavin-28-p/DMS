<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Donation Management System</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Donation Management System</h2>
        <form id="loginForm" method='post'>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="user-type">User Type</label>
                <select id="user-type" name="user-type" >
                    <option value="" disabled selected>Select user type</option>
                    <option value="ngo" >NGO</option>
                    <option value="user" name="user">User</option>
                    <option value="admin" name="admin">Admin</option>
                </select>
            </div>
            <button type="submit" name="log">Login</button>
        </form>
        <div class="register-links">
            <p>Don't have an account?</p>
            <a href="reg_ngo.php">Register as NGO</a> | 
            <a href="register-user.php">Register as User</a>
        </div>
    </div>
    <!-- <script type ='javascript'>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            var userType = document.getElementById('user-type').value;

            if (userType === 'ngo') {
                window.location.href = 'ngodash.html'; // Link for NGO dashboard
            } else if (userType === 'user') {
                window.location.href = 'index.html'; // Link for User dashboard
            } else if (userType === 'admin') {
                window.location.href = 'admin-dashboard.html'; // Link for Admin dashboard
            }
        }); -->
    </script>
   
</body>
</html>
<?php
    if(isset($_POST['log'])){
    $servername="localhost";
    $username="root";
    $password="";
    $database="dms";

    $user=$_POST["username"];
    $pass=$_POST["password"];
    $ut=$_POST["user-type"];
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    
    if($ut === 'ngo'){
        $sql = "SELECT `ngo_name`, `ngo_address`, `ngo_contact`, `ngo_username`, `ngo_password` FROM `ngo_user` WHERE ngo_username='$user' AND ngo_password='$pass'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1  ){
            session_start();
            $_SESSION['username']=$userName;
            header('location:ngodash.php');
            }
            $conn->close();
            
    }
    elseif($ut === 'user'){
        $sql = "SELECT `username`,`password` FROM `users` WHERE username='$user' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1  ){
         session_start();
         $_SESSION['username']=$userName;
        header('location:userhomepage.php');
        exit;
        }
    }elseif($ut === 'admin'){
        $sql = "SELECT `username`, `password` FROM `admin` WHERE username='$user' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1  ){
         session_start();
         $_SESSION['username']=$userName;
        header('location:admin.html');
        }
    }else{
        die("Sorry we failed to connect: ".mysqli_query_error());
    }
}
 
?>
  