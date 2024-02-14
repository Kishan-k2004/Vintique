<?php
include('connection.php');

if(isset($_POST['register_submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $cost = mysqli_real_escape_string($connection, $_POST['cost']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $photo1 = mysqli_real_escape_string($connection, $_POST['photo1']);
    $photo2 = mysqli_real_escape_string($connection, $_POST['photo2']);

    // Validation
    if(!is_numeric($cost) || $cost <= 0) {
        echo "<script>alert('Please enter a valid cost.');</script>";
    } else {
        $query = "INSERT INTO women_product VALUES (null, '$name', '$cost', '$description', '$photo1', '$photo2')";
        $query_run = mysqli_query($connection, $query);

        if($query_run) {
            echo "<script>alert('Uploaded successfully');</script>";
            header("Location: b_home.php");
            exit();
        } else {
            echo "<script>alert('Error in uploading product');</script>";
        }
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
textarea{
    margin: 7px;
  width: 300px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<body>

    <div class="section">
        <h1>Upload Your Product</h1>
        <br>
        <br>
        <form action="" method="post">
            <input type="text" id="name" name="name" placeholder="PRODUCT TITLE" required>
            <br>
            <input type="number" id="cost" name="cost" placeholder="PRODUCT COST" required>
            <br>
            <textarea name="description" id="description" cols="43" rows="5" placeholder="DESCRIPTION"></textarea>
            <br>
            <input type="text" id="photo1" name="photo1" placeholder="ADDRESS OF PHOTO 1" required>
            <br>
            <input type="text" id="photo2" name="photo2" placeholder="ADDRESS OF PHOTO 2" required>
            <br>
            <input type="submit" name="register_submit" value="Upload">
        </form>
    </div>
    <div class="bottom">
        <p>&copy; Vintique 2023   All Rights Reserved.</p>
    </div>
</body>
</html>