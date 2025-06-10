<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Featured Products</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Outfit', sans-serif;
      margin: 0;
      padding: 0;
      background: #f7f7f7;
    }

    .featuredsection {
      padding: 4rem 20px;
      background-color: #fff;
      text-align: center;
      position: relative;
    }

    .featuredsection h2 {
font-size: max(0.6875rem, clamp(1.25rem, 1.067rem + 0.78vw, 28px));
      margin-bottom: 30px;
              line-height: 39.2px;
              letter-spacing: 5.04px;
                gap: 1.25rem;
                font-weight: 300;
                word-spacing: 0px;
                text-transform: uppercase;

    }
    .featuredsection h2{
        font-weight: 500;
    }

    .products {
      display: grid;
      grid-template-columns: repeat(4, minmax(250px, 1fr));
      gap: 24px;
      /* max-width: 1200px; */
      margin: 0 auto;
    }

    .product-card {
      /* background-color: #fff;
      border: 1px solid #eee; */
      border-radius: 8px;
      padding: 16px;
      text-align: center;
      transition: 0.3s;
      padding: 15px;
    }

    .product-card:hover {
      /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
    }

    .product-card img {
      width: 100%;
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 12px;
    }

    .product-title {
      font-weight: 600;
      font-size: 18px;
      margin: 10px 0 6px;
      color: #333;
      text-decoration: none;
    }

    .price {
      font-size: 16px;
      color: #e53935;
    }

    .old-price {
      text-decoration: line-through;
      color: #888;
      font-size: 14px;
      margin-left: 8px;
    }

    .swatches {
      display: flex;
      justify-content: center;
      margin: 10px 0;
      gap: 6px;
    }

    .swatch {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .cta-button {
      margin-top: 30px;
    }

    .cta-button a {
      display: inline-block;
      background: #000;
      color: #fff;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 5px;
      font-weight: 600;
    }

    .on-sale-badge {
      background-color: #e53935;
      color: #fff;
      font-size: 12px;
      padding: 3px 8px;
      border-radius: 4px;
      position: absolute;
      top: 10px;
      left: 10px;
    }

    .product-img-container {
      position: relative;
    }
    .featuredsection .product-card {
      align-content: normal;
      gap: 0;
    }
  </style>
</head>
<body>

  <section class="featuredsection">
    <h2>Don't miss out on the opportunity to save during our exclusive <strong>SALE!</strong></h2>
    
    <div class="products">

      <!-- Product Card 1 -->
      <div class="product-card">
 
    <div class="image-wrapper">
    <span class="badge" style="left: 0;">ON SALE</span>
  <img class="product-img main-image"
       src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
       data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
       data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
       alt="Product 2">
  <div class="quick-add">+</div>
</div>

    <div class="description">
      <h3>Roncato Joy</h3>
      <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
    </div>
    <div class="color-dots">
      <span class="dot black active" data-color="black"></span>
      <span class="dot blue" data-color="blue"></span>
      <span class="dot red" data-color="red"></span>
    </div>
  </div>

      <!-- Product Card 2 -->
      <div class="product-card">
 
    <div class="image-wrapper">
    <span class="badge" style="left: 0;">ON SALE</span>
  <img class="product-img main-image"
       src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
       data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
       data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
       alt="Product 2">
  <div class="quick-add">+</div>
</div>

    <div class="description">
      <h3>Roncato Joy</h3>
      <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
    </div>
    <div class="color-dots">
      <span class="dot black active" data-color="black"></span>
      <span class="dot blue" data-color="blue"></span>
      <span class="dot red" data-color="red"></span>
    </div>
  </div>
<!-- Product Card 3 -->
<div class="product-card">
 
 <div class="image-wrapper">
 <span class="badge" style="left: 0;">ON SALE</span>
<img class="product-img main-image"
    src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
    data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
    data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
    alt="Product 2">
<div class="quick-add">+</div>
</div>

 <div class="description">
   <h3>Roncato Joy</h3>
   <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
 </div>
 <div class="color-dots">
   <span class="dot black active" data-color="black"></span>
   <span class="dot blue" data-color="blue"></span>
   <span class="dot red" data-color="red"></span>
 </div>
</div>
      <!-- Product Card 4 -->
      <div class="product-card">
 
 <div class="image-wrapper">
 <span class="badge" style="left: 0;">ON SALE</span>
<img class="product-img main-image"
    src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
    data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
    data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
    alt="Product 2">
<div class="quick-add">+</div>
</div>

 <div class="description">
   <h3>Roncato Joy</h3>
   <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
 </div>
 <div class="color-dots">
   <span class="dot black active" data-color="black"></span>
   <span class="dot blue" data-color="blue"></span>
   <span class="dot red" data-color="red"></span>
 </div>
</div>
      
      <!-- Product Card 1 -->
      <div class="product-card">
 
    <div class="image-wrapper">
    <span class="badge" style="left: 0;">ON SALE</span>
  <img class="product-img main-image"
       src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
       data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
       data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
       alt="Product 2">
  <div class="quick-add">+</div>
</div>

    <div class="description">
      <h3>Roncato Joy</h3>
      <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
    </div>
    <div class="color-dots">
      <span class="dot black active" data-color="black"></span>
      <span class="dot blue" data-color="blue"></span>
      <span class="dot red" data-color="red"></span>
    </div>
  </div>

      <!-- Product Card 2 -->
      <div class="product-card">
 
 <div class="image-wrapper">
 <span class="badge" style="left: 0;">ON SALE</span>
<img class="product-img main-image"
    src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
    data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
    data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
    alt="Product 2">
<div class="quick-add">+</div>
</div>

 <div class="description">
   <h3>Roncato Joy</h3>
   <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
 </div>
 <div class="color-dots">
   <span class="dot black active" data-color="black"></span>
   <span class="dot blue" data-color="blue"></span>
   <span class="dot red" data-color="red"></span>
 </div>
</div>
<!-- Product Card 3 -->
<div class="product-card">
 
 <div class="image-wrapper">
 <span class="badge" style="left: 0;">ON SALE</span>
<img class="product-img main-image"
    src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
    data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
    data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
    alt="Product 2">
<div class="quick-add">+</div>
</div>

 <div class="description">
   <h3>Roncato Joy</h3>
   <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
 </div>
 <div class="color-dots">
   <span class="dot black active" data-color="black"></span>
   <span class="dot blue" data-color="blue"></span>
   <span class="dot red" data-color="red"></span>
 </div>
</div>
      <!-- Product Card 4 -->
      <div class="product-card">
 
 <div class="image-wrapper">
 <span class="badge" style="left: 0;">ON SALE</span>
<img class="product-img main-image"
    src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
    data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
    data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
    data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
    alt="Product 2">
<div class="quick-add">+</div>
</div>

 <div class="description">
   <h3>Roncato Joy</h3>
   <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
 </div>
 <div class="color-dots">
   <span class="dot black active" data-color="black"></span>
   <span class="dot blue" data-color="blue"></span>
   <span class="dot red" data-color="red"></span>
 </div>
</div>
      <!-- Add more product cards here in same structure -->

    </div>

    <div class="cta-button">
      <a href="/collections/sale">View All</a>
    </div>
  </section>
  <script>
  // Hover effect
  const productImages = document.querySelectorAll(".main-image");

  productImages.forEach(img => {
    const hoverSrc = img.getAttribute("data-hover");
    const originalSrc = img.src;

    img.addEventListener("mouseenter", () => {
      if (hoverSrc) img.src = hoverSrc;
    });

    img.addEventListener("mouseleave", () => {
      img.src = img.dataset[img.getAttribute("data-current-color") || "black"];
    });
  });

  // Dot click change
  const dots = document.querySelectorAll(".color-dots .dot");
  dots.forEach(dot => {
    dot.addEventListener("click", () => {
      const color = dot.getAttribute("data-color");
      const img = dot.closest(".product-card").querySelector(".main-image");

      // Update image src
      const newSrc = img.getAttribute(`data-${color}`);
      img.src = newSrc;
      img.setAttribute("data-current-color", color);

      // Update dot active state
      dot.parentElement.querySelectorAll(".dot").forEach(d => d.classList.remove("active"));
      dot.classList.add("active");
    });
  });
</script>
</body>
</html>
