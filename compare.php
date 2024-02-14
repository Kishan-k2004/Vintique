<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Comparison</title>
  <link rel="stylesheet" href="compare.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="home">
    <header class="header">
        <a href="#" class="logo"></a>

        <nav class="navbar">
            <a href="home.html" target="_blank"><i class="bi bi-house"></i></a>
            <a href="#"><i class="bi bi-bag"></i></a>
            <a href="login.html"><i class="bi bi-person"></i></a>
            <a href="#"><i class="bi bi-search"></i></a>
        </nav>
    </header>
  </div>

  <!-- HTML for Product Comparison with Custom Styling and Images -->
  <div id="productComparison" class="comparison-container">
    <label for="product1">Select Product 1:</label>
    <select id="product1" onchange="updateComparison()" class="custom-select">
      <option value="1">Petal Pikachu Elegance</option>
      <option value="2">Midnight Bunny</option>
      <option value="3">Snowy Simplicity</option>
      <option value="4">Ivory Cloud Comfort</option>
      <option value="5">Rose Petal Cozy</option>
      <option value="6">Cocoa Bliss Cozy</option>
      <option value="7">Contrast Harmony Ensemble</option>
      <option value="8">Arctic Elegance Coat</option>
      <option value="9">Cub Cozy Jacket</option>
      <!-- Add more product options as needed -->
    </select>

    <label for="product2">Select Product 2:</label>
    <select id="product2" onchange="updateComparison()" class="custom-select">
      <option value="1">Petal Pikachu Elegance</option>
      <option value="2">Midnight Bunny</option>
      <option value="3">Snowy Simplicity</option>
      <option value="4">Ivory Cloud Comfort</option>
      <option value="5">Rose Petal Cozy</option>
      <option value="6">Cocoa Bliss Cozy</option>
      <option value="7">Contrast Harmony Ensemble</option>
      <option value="8">Arctic Elegance Coat</option>
      <option value="9">Cub Cozy Jacket</option>
      <!-- Add more product options as needed -->
    </select>

    <div id="comparisonResults" class="comparison-results">
      <!-- Comparison results will be displayed here dynamically -->
      <div class="product-image-container">
        <img src="" alt="Product 1" id="product1Image" class="product-image">
        <img src="" alt="Product 2" id="product2Image" class="product-image">
      </div>
    </div>
  </div>

  <div class="bottom">
    <p>&copy; Vintique 2023   All Rights Reserved.</p>
  </div>

  <script src="compare.js"></script>
</body>
</html>
