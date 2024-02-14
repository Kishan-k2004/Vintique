function updateComparison() {
    const product1 = getProductDetails(document.getElementById("product1").value);
    const product2 = getProductDetails(document.getElementById("product2").value);

    displayComparison(product1, product2);
  }

  function getProductDetails(productId) {
    // In a real application, fetch product details from your backend or use a predefined dataset
    // For simplicity, using a hardcoded dataset here
    const productData = {
      1: { name: 'Petal Pikachu Elegance', color: 'White with a hint of Pink', fabric: 'Cotton', price: 29.99, reviews: 4.5, image: '1.jpg' },
      2: { name: 'Midnight Bunny Chic', color: 'Dark Black', fabric: 'Cotton', price: 29.99, reviews: 4.5, image: '2.jpg' },
      3: { name: 'Snowy Simplicity', color: 'Plain White', fabric: 'Cotton', price: 29.99, reviews: 4.5, image: '3.jpg' },
      4: { name: 'Ivory Cloud Comfort', color: 'Light Brown', fabric: 'Comfy Material', price: 29.99, reviews: 4.5, image: '4.jpg' },
      5: { name: 'Rose Petal Cozy', color: 'Petals of White Rose with a hint of Pink', fabric: 'Soft Material', price: 29.99, reviews: 4.5, image: '5.jpg' },
      6: { name: 'Cocoa Bliss Cozy', color: 'Comfy Brown', fabric: 'Cozy Material', price: 29.99, reviews: 4.5, image: '6.jpg' },
      7: { name: 'Contrast Harmony Ensemble', color: 'Half White and Half Black', fabric: 'High-Quality Material', price: 29.99, reviews: 4.5, image: '7.jpg' },
      8: { name: 'Arctic Elegance Coat', color: 'Red', fabric: 'Silk', price: 49.99, reviews: 4.0, image: '8.jpg' },
      9: { name: 'Cub Cozy Jacket', color: 'Light Brown', fabric: 'Cub Fur', price: 49.99, reviews: 4.0, image: '9.jpg' }
    };


    return productData[productId];
  }

  function displayComparison(product1, product2) {
    const comparisonResults = document.getElementById("comparisonResults");
    const product1Image = document.getElementById("product1Image");
    const product2Image = document.getElementById("product2Image");
    const productImageContainer = document.querySelector(".product-image-container");

    comparisonResults.innerHTML = `
      <h3>Comparison Results:</h3>
      <p><strong>Product 1:</strong> Color: ${product1.color}, Fabric: ${product1.fabric}, Price: $${product1.price}, Reviews: ${product1.reviews}</p>
      <p><strong>Product 2:</strong> Color: ${product2.color}, Fabric: ${product2.fabric}, Price: $${product2.price}, Reviews: ${product2.reviews}</p>
    `;

    // Set the source of the product images if available
    if (product1.image) {
      product1Image.src = product1.image;
      product1Image.style.display = "block";
    } else {
      product1Image.style.display = "none";
    }

    if (product2.image) {
      product2Image.src = product2.image;
      product2Image.style.display = "block";
    } else {
      product2Image.style.display = "none";
    }

    // Show the product images container during comparison
    productImageContainer.style.display = "block";
  }
