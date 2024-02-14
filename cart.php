<?php
include('connection.php');

$sql_cart = "SELECT * FROM cart";
$all_cart = $connection->query($sql_cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bag</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="bag.css">
</head>
<body>
    <?php
       include_once 'header.php';
    ?>

    <main style="margin-top: 80px;">
        <h1><?php echo mysqli_num_rows($all_cart); ?> Item</h1>
        <hr>
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql_product = "SELECT * FROM men_product WHERE product_id=".$row_cart["product_id"];
              $result_product = $connection->query($sql_product);
              while($row_product = mysqli_fetch_assoc($result_product)){
        ?>
        <div class="card">
            <div class="images">
                <img src="<?php echo $row_product["p1_image"]; ?>" alt="">
            </div>

            <div class="caption">
                <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="product_name"><?php echo $row_product["p_title"]; ?></p>
                <p class="price"><b>₹<?php echo $row_product["p_cost"]; ?></b></p>
                <button class="remove" id="<?php echo $row_product["product_id"]; ?>">Remove from Cart</button>
            </div>
        </div>
        <?php
          }
        }
       ?>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
</body>
</html>
