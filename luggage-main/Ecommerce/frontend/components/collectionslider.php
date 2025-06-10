<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {box-sizing:border-box}

/* Slideshow container */

.slides-container{
  position: relative;
    display: flex;
    gap: 20px;
    align-items: center;
    width: 100%;
    max-width: 1400px;
    justify-self: anchor-center;
    padding: 40px 0;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
  gap: 70px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
    /* position: absolute; */
    box-shadow: 0 .125rem .625rem rgb(128, 128, 128);
    height: 50px;
    top: 50%;
    width: 50px;
    text-align: center;
    /* margin-top: -22px; */
    padding: 14px;
    color: rgb(128, 128, 128);
    /* font-size: 18px; */
    transition: 0.6s ease;
    border-radius: 50%;
    user-select: none;

}

/* Position the "next button" to the right */
.next {
  right: 0;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */


.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.mySlides{
    width: 100%;
    justify-content: center;
    align-items: center;
}

.product-img {
  width: 100%;
  margin-bottom: 10px;
}

.price-sale {
  color: red;
}
.color-dots{
  text-align: center;
}
.color-dots .dot {
  display: inline-block;
  height: 15px;
  width: 15px;
  margin-right: 5px;

  /* border: 1px solid #ccc; */
}
.slide-right {
  text-align: left;
  max-width: 300px;
      display: flex;
    flex-direction: column;
    gap: 10px;
    max-height: 80%;
}
.badge {
  background-color: #cd2127;
  color: white;
  position: absolute;
  padding: 4px 8px;
  font-size: 12px;
  display: inline-block;
  margin-bottom: 10px;
}
.dot.black { background-color: black; }
.dot.blue { background-color: blue; }
.dot.red { background-color: red; }
.dot.pink { background-color: pink; }
.dot.gray { background-color: gray; }

.view-btn {
  margin-top: 10px;
  padding: 10px 20px;
  background-color: black;
  color: white;
  border: none;
  cursor: pointer;
}
.description h3{

	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: center;
	text-indent: 0px;
	text-transform: none;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

}
.description p{

	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-decoration: none solid rgb(205, 33, 39);
	text-align: center;
	text-indent: 0px;
	text-transform: none;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

}
.dot.active {
  border: 1px solid white;
    outline: #000 solid 1px;
}

.main-image {
  transition: 0.3s ease;
}
.quick-add{
  position: absolute;
    background: white;
    /* box-shadow: 0 .125rem .625rem rgb(128, 128, 128); */
    padding: 0 10px;
    font-size: 20px;
    right: 0;
    bottom: 5px;
    opacity: 0;
}
.image-wrapper{
  position: relative;
}
.image-wrapper:hover .quick-add{
  opacity: 1;
}
    </style>
       </head>
<body>

<div class="slideshoww-container" style="padding-top:40px"> 

<h6 style="
	font-size: 12px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 2.16px;
	line-height: 20.4px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
  margin-bottom: 15px;"
>SHOP</h6>
<h2 style="
	font-size: 28px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 5.04px;
	line-height: 39.2px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;">OUR LOOKS</h2>
  <div class="slides-container">
    

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <!-- <div class="mySlides fade">
  <div class="slide-left">
    <img src="https://alburhanluggage.com/cdn/shop/files/roncato-joy.jpg?v=1711343908&width=600" alt="Look 1">
  </div>
  <div class="slide-right">
    <span class="badge">ON SALE</span>
    <div class="image-wrapper">
  <img class="product-img main-image"
       src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
       data-red="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-red-medium-01.png?v=1713280737&width=600"
       data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
       alt="Product 1">
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
    <button class="view-btn">VIEW PRODUCT</button>
  </div>
</div> -->

<div class="mySlides fade">
  <div class="slide-left">
    <img src="https://alburhanluggage.com/cdn/shop/files/american-tourister_d3238249-cde0-4c8f-b945-bb82e9f5a0ed.png?v=1711342503&width=600" alt="Look 1">
  </div>
  <div class="slide-right">
    <span class="badge">ON SALE</span>
    <div class="image-wrapper">
  <img class="product-img main-image"
       src="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-peach-blossom-small-01.png?v=1717536636&width=600"
       data-black="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600"
       data-blue="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/roncato-joy-navy-medium-01.png?v=1713280737&width=600"
       data-pink="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-peach-blossom-small-01.png?v=1717536636&width=600"
       data-hover="https://cdn.shopify.com/s/files/1/0675/3602/7876/files/american-tourister-curio-black-medium-01.png?v=1712405161&width=600"
       alt="Product 1">
  <div class="quick-add">+</div>
</div>

    <div class="description">
      <h3>Roncato Joy</h3>
      <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
    </div>
    <div class="color-dots">
      <span class="dot black active" data-color="black"></span>
      <span class="dot blue" data-color="blue"></span>
      <span class="dot pink" data-color="pink"></span>
    </div>
    <button class="view-btn">VIEW PRODUCT</button>
  </div>
</div>
  <div class="mySlides fade">
  <div class="slide-left">
    <img src="https://alburhanluggage.com/cdn/shop/files/roncato-joy.jpg?v=1711343908&width=600" alt="Look 1">
  </div>
  <div class="slide-right">
    <span class="badge">ON SALE</span>
    <div class="image-wrapper">
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
    <button class="view-btn">VIEW PRODUCT</button>
  </div>
</div>


  <!-- Next and previous buttons -->
  <a class="next" onclick="plusSlides(1)">&#10095;</a>


</div>
</div>
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
      const img = dot.closest(".slide-right").querySelector(".main-image");

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


<script>
  let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].style.opacity = 0; // Reset opacity
  }
  slides[slideIndex-1].style.display = "flex";
  slides[slideIndex-1].style.opacity = 1; // Ensure it's visible
}

</script>
</body>
</html>


        <!-- <div class="slider-container">
          <button class="slider-btn left" onclick="changeSlide(-1)">&#8249;</button>-->

        <!-- The dots/circles -->
        <!-- <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div> -->
 <!-- <style>
        .slider-container {
  position: relative;
  display: flex;
  align-items: center;
  overflow: hidden;
  background: #f5f5f5;
  padding: 20px;
}

.slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
  width: 100%;
}

.slide {
  display: none;
  width: 100%;
  justify-content: space-between;
  align-items: center;
}

.slide.active {
  display: flex;
}

.slide-left img {
  max-width: 100%;
  height: auto;
}

.slide-right {
  text-align: left;
  max-width: 400px;
      display: flex;
    flex-direction: column;
    gap: 20px;
}



.product-img {
  width: 150px;
  margin-bottom: 10px;
}



.color-dots .dot {
  display: inline-block;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  margin-right: 5px;
  border: 1px solid #ccc;
}

.dot.black { background-color: black; }
.dot.blue { background-color: blue; }
.dot.red { background-color: red; }
.dot.gray { background-color: gray; }

.view-btn {
  margin-top: 10px;
  padding: 10px 20px;
  background-color: black;
  color: white;
  border: none;
  cursor: pointer;
}

.slider-btn {
  background: white;
  border: none;
  font-size: 30px;
  padding: 10px;
  cursor: pointer;
  z-index: 1;
}

.left { position: absolute; left: 0; }
.right { position: absolute; right: 0; }

    </style> -->

  <!-- <div class="slider">
    <div class="slide active">
      <div class="slide-left">
        <img src="https://alburhanluggage.com/cdn/shop/files/roncato-joy.jpg?v=1711343908&width=600" alt="Look 1">
      </div>
      <div class="slide-right">
        <span class="badge">ON SALE</span>
        <img class="product-img" src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600" alt="Product 1">
        <h3>Roncato Joy</h3>
        <p><span class="price-sale">From Rs.18,999.00</span> <del>Rs.24,500.00</del></p>
        <div class="color-dots">
          <span class="dot black"></span>
          <span class="dot blue"></span>
          <span class="dot red"></span>
        </div>
        <button class="view-btn">VIEW PRODUCT</button>
      </div>
    </div>

    <div class="slide">
      <div class="slide-left">
        <img src="https://alburhanluggage.com/cdn/shop/files/roncato-joy.jpg?v=1711343908&width=600" alt="Look 2">
      </div>
      <div class="slide-right">
        <span class="badge">ON SALE</span>
        <img class="product-img" src="https://alburhanluggage.com/cdn/shop/files/roncato-joy-black-large-01.png?v=1713277939&width=600" alt="Product 2">
        <h3>Roncato Deluxe</h3>
        <p><span class="price-sale">From Rs.22,999.00</span> <del>Rs.28,000.00</del></p>
        <div class="color-dots">
          <span class="dot black"></span>
          <span class="dot gray"></span>
        </div>
        <button class="view-btn">VIEW PRODUCT</button>
      </div>
    </div>

  </div> 

  <button class="slider-btn right" onclick="changeSlide(1)">&#8250;</button>
</div>-->
<!-- <script>
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
  }

  function changeSlide(direction) {
    currentSlide += direction;
    if (currentSlide >= slides.length) currentSlide = 0;
    if (currentSlide < 0) currentSlide = slides.length - 1;
    showSlide(currentSlide);
  }

  // Initialize
  showSlide(currentSlide);
</script> -->