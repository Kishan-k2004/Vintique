<?php
include('connection.php');

if(isset($_POST['register_submit'])) {
    // Sanitize user inputs to prevent SQL injection
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $mobile_number = mysqli_real_escape_string($connection, $_POST['Mobile_number']);

    $query = "INSERT INTO buisness_login VALUES (null, '$name', '$email', '$password', $mobile_number)";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
        echo "<script type='text/javascript'>
        alert('User registered successfully');
        window.location.href = 'b_login.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Error');
        window.location.href = 'registerb.php';
        </script>";   
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="login.css">
</head>
<style>
    .bottom{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%; /* Make sure the div spans the entire width of the viewport */
    background-color: #f8f8f8; /* Example background color */
    padding: 10px; /* Add padding for better visibility */
    text-align: center; /* Center-align the text within the div */
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    background-color: black;
    color: white;
}
input[type='submit']{
    margin: 7px;
    width: 300px;
    background-color: black;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<body>

    <div class="section">
        <h1>Create Vintique Buisness Account</h1>
        <br>
        <br>
        <form action="" method="post">
            <label for="name"></label>
            <input type="text" id="email" name="name" placeholder="BUISNESS NAME" required>
            <br>
            <label for="email"></label>
            <input type="text" id="email" name="email" placeholder="BUISNESS EMAIL" required>
            <br>
            <label for="password"></label>
            <input type="password" id="email" name="password" placeholder="PASSWORD" required>
            <br>
            <label for="mobile_number"></label>
            <input type="number" id="email" name="Mobile_number" placeholder="MOBILE NUMBER" required>
            <br>
            <input type="submit" name="register_submit">
        </form>
    </div>
    <div class="bottom">
        <p>&copy; Vintique 2023   All Rights Reserved.</p>
    </div>
</body>
</html>