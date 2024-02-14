<?php
include('connection.php');
if(isset($_POST['login_submit'])){
    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    
    // Query with correct password field
    $query = "SELECT email, password, name, user_id FROM user_login WHERE email = '$email' AND password = '$password'";
    
    $query_run = mysqli_query($connection, $query);

    // Check if the query returned a valid result set
    if(mysqli_num_rows($query_run) > 0){
        // Redirect to user dashboard if login is successful
        header("Location: home.php");
        exit(); // Make sure to exit after redirecting
    }
    else{
        // Alert user if login fails
        echo "<script type='text/javascript'>
        alert('Email and password are incorrect');
        window.location.href = 'login.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Vintique</title>
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
</style>
<body>
    <div class="section">
        <h1>My Vintique Account</h1>
        <br><br>
        <form action="" method="post">
            <label for="email"></label>
            <input type="text" id="email" name="email" placeholder="EMAIL" required>
            <br>
            <label for="password"></label>
            <input type="password" id="email" name="password" placeholder="PASSWORD" required>
            <br>
            <input type="submit" name="login_submit" class="submit">
            <br>
        </form>
        <form id="myForm">
                <input type="submit" value="Create New" id="create">
            </form>
    </div>
    <div class="bottom">
        <p>&copy; Vintique 2023   All Rights Reserved.</p>
    </div>
    <script>
  document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();
    window.location.href = "registeru.php";
  });
</script>

</body>
</html>