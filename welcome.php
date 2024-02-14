<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
.submit{
    margin: 7px;
    width: 500px;
    height: 50px;
    margin-bottom: 30px;
    background-color: black;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    text-decoration: none;
    margin-left: 525px;
}
.submit:hover{
    background-color: white;
    color: black;
    transform: 0.3s;
    border: 2px solid black;
}
</style>
<body>

    <div class="section">
        <h1>Welcome in VINTIQUE</h1>
        <br>
        <br>
        <a href="registerb.php" style="text-decoration: none;"><div class="submit">Register as Seller</div></a>
        <a href="registeru.php" style="text-decoration: none;"><div class="submit">Register as Customer</div></a>
    </div>
    <div class="bottom">
        <p>&copy; Vintique 2023   All Rights Reserved.</p>
    </div>
</body>
</html>