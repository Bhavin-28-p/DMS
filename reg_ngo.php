<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as NGO</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Register as NGO</h2>
        <form id="registerFormNgo"  method="post">
            <div class="form-group">
                <label for="ngo-name">NGO Name</label>
                <input type="text" id="ngo-name" name="ngo-name" required>
            </div>
            <div class="form-group">
                <label for="ngo-address">NGO Address</label>
                <input type="text" id="ngo-address" name="ngo-address" required>
            </div>
            <div class="form-group">
                <label for="ngo-contact">NGO Contact Number</label>
                <input type="text" id="ngo-contact" name="ngo-contact" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

<?php
// register-ngo.php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
// Database connection
$servername = "localhost";
$username = "root"; // default username for WAMP
$password = ""; // default password for WAMP
$dbname = "dms"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
///$ngo_user = $_POST['username'];
//$Pass = $_POST['password'];
$ngoName =$_POST['ngo-name'];
$ngoAddress = $_POST['ngo-address'];
$ngoContact = $_POST['ngo-contact'];
$userName = $_POST['username'];
$userPassword = $_POST['password'];

// Sanitize user input
$ngoName = $conn->real_escape_string($ngoName);
$ngoAddress = $conn->real_escape_string($ngoAddress);
$ngoContact = $conn->real_escape_string($ngoContact);
$userName = $conn->real_escape_string($userName);
$userPassword = $conn->real_escape_string($userPassword);

// Hash the password
$hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

// Insert data into database
//$sql = "INSERT INTO `login`(`username`, `password`) VALUES (' $ngo_user','$Pass')";
$sql="INSERT INTO `ngo_user`(`ngo_name`, `ngo_address`, `ngo_contact`, `ngo_username`, `ngo_password`) VALUES ('$ngoName','$ngoAddress','$ngoContact','$userName','$userPassword')";
$result=mysqli_query($conn,$sql);

if ($result) {
   // echo "Registration successful! Redirecting to login page...";
    header('location:login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<script type='javascript'>
        document.getElementById('registerFormNgo').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            alert('Registration successful! Redirecting to login page...');
            window.location.href = 'login.php'; // Redirect to login page after registration
        });
    </script>
