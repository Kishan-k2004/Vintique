<?php
include('connection.php');

  $sql = "SELECT * FROM men_product";
  $all_product = $connection->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Vintique</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="men.css">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', serif;
}

body{
    background: white;
}

#image{
    
    width: 400px;
    height: 500px;
    border-radius: 20px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-left: 7px;
}
#image:hover{
    transition: 0.5s;
}
.p_name{
    margin-top: 10px;
    font-weight: 700;
}
.item{
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.bottom{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%; /* Make sure the div spans the entire width of the viewport */
    background-color: #f8f8f8; /* Example background color */
    padding: 10px; /* Add padding for better visibility */
    text-align: center; /* Center-align the text within the div */
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}
</style>
<body>
    <?php
    include_once 'header.php';
    ?>
    <div class="men-store">
        <h1>Men's Fashion</h1>
        
        <div style="display: flex; flex-wrap: wrap; margin-left: 100px;">
        <?php
        while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <a href="#" style="text-decoration: none; margin-bottom:10px;">
            <div class="items-container" style="display: flex; flex-direction: column; align-items: center;">
                <div class="item"  style="display: flex; flex-direction: columns;">
                <div id="image" style="background-image: url('<?php echo $row["p1_image"]; ?>');" onmouseover="this.style.backgroundImage='url(\'<?php echo $row["p2_image"]; ?>\')'" onmouseout="this.style.backgroundImage='url(\'<?php echo $row["p1_image"]; ?>\')'"></div>
                    <center><h3 class="p_name" style="color: black; text-decoration: none; text-align: center;"><?php echo $row["p_title"];  ?></h3></center>
                    <center><button style="padding: 5px 5px; background-color: black; font-weight: 400; color: white; width: 100%; border-radius: 5px;" class="add" id="<?php echo $row["product_id"];  ?>">Add to Cart</button></center>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
        </div>
        
    </div>
    <div class="bottom">
        <p>&copy; Vintique 2023   All Rights Reserved.</p>
    </div>
    <script>
       var product_id = document.getElementsByClassName("add");
for (var i = 0; i < product_id.length; i++) {
    product_id[i].addEventListener("click", function (event) {
        var target = event.target;
        var id = target.getAttribute("id");
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                target.innerHTML = data.in_cart;
                document.getElementById("badge").innerHTML = data.num_cart + 1;
            }
        }

        xml.open("GET", "connection.php?id=" + id, true);
        xml.send();

    })
}

   </script>

</body>
</html>