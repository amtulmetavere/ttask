<!-- Include this in your page -->
<style>
    .featured-product {
        width: 100%;
        padding: 40px 10%;
  background: #efefef;
}
.section-heading {
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
	word-spacing: 0px;


  margin-bottom: 40px;
}
.product-content {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
}
.product-image-slider {
    flex: 1;
    height: 700px;
    max-width: 50%;
}
.product-image-slider img {
  width: 100%;
  border-radius: 6px;
}
.product-info {
    flex: 1;
    min-width: 40%;
}
.product-brand {
	font-size: 12px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 2.16px;
	line-height: 20.4px;
	text-decoration: none solid rgba(28, 28, 28, 0.65);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    margin: 10px 0; 
}
.product-title {
	font-family: "Univers Next", sans-serif;
	font-size: 22px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 3.96px;
	line-height: 33px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    margin: 10px 0; 
}
.discount-tag {
	font-size: 11px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 1.98px;
	line-height: 18.15px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

	/* Color & Background */
	background-attachment: scroll;
	background-color: rgb(205, 33, 39);
	background-image: none;
	background-position: 0% 0%;
	background-repeat: repeat;
	color: rgb(255, 255, 255);
    margin: 10px 0; 
}
.product-price {
	font-size: 18px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 3.24px;
	line-height: 28.8px;
	text-decoration: none solid rgb(205, 33, 39);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

	/* Color & Background */
	background-attachment: scroll;
	background-color: rgba(0, 0, 0, 0);
	background-image: none;
	background-position: 0% 0%;
	background-repeat: repeat;
	color: rgb(205, 33, 39);
    margin: 20px 0; 
}
.product-price del {
	color:rgb(207, 207, 207);
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 2.52px;
	line-height: 23.8px;
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
margin-left:8px;
}
.product-description {
    position: relative;
    width: 100%;
  margin-bottom: 20px;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: start;
	text-indent: 0px;
	text-transform: none;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
	color:#1c1c1c;
    margin: 10px 0; 

}
.product-description::before {
  content: "";                /* required to display the pseudo-element */
  display: block;             /* make it behave like a block so it takes full width */
  width: 100%;                /* full width of the parent */
  height: 2px;                /* thickness of the line */
  background-color: #000;     /* color of the line (black here) */
  margin: 10px 0;        /* space between the line and the product description */
  background-color:rgb(207, 207, 207);
}
.color-options {
  display: flex;
  gap: 10px;
  margin: 10px 0;
  color:#1c1c1c;
}
.color-box {
  width: 25px;
  height: 25px;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #ccc;
}
.product-options{
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: start;
	text-indent: 0px;
	text-transform: none;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    color:#1c1c1c;
}

.color-box.black { background: #000; }
.color-box.blue { background: #007bff; }
.color-box.green { background: #28a745; }
.color-box.yellow { background: #ffc107; }
.color-box.active { border: 2px solid #000; }

.size-options {
  margin: 10px 0;
}
.size-btn {
  padding: 6px 14px;
  margin-right: 8px;
  border: 1px solid #000;
  background: none;
  cursor: pointer;
}
/* .size-btn:hover {
  background: #000;
  color: white;
} */
.quantity-wrapper {
  display: flex;
  align-items: center;
  margin: 15px 0;
  border: 1px solid #ccc;
  width: fit-content;
  padding: 2px 0;
}
.qty-btn {
  padding: 5px 12px;
  font-size: 20px;

  background: none;
}
.qty-input {
  width: 50px;
  text-align: center;

}
.cart-buttons {
  margin-top: 20px;
  flex-direction: column;
  gap: 20px;
}
.add-to-cart,
.buy-now {
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  margin-right: 10px;
}
.add-to-cart {
  background: #000;
  color: white;
}
.buy-buttons{
    background: transparent;
}
.buy-now {
  background: white;
  border: 1px solid #000;
}
/* .buy-now:hover {
  background: #000;
  color: #fff;
} */
.swiper-pagination-bullet-active{
background: #000 !important;    
}
/* Responsive */
@media (max-width: 768px) {
  .product-content {
    flex-direction: column;
    align-items: center;
  }
}
details {
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    margin-bottom: 1em;
    padding: 0.5em 0;
    color:#1c1c1c;
  
  }

  summary {
    text-transform:uppercase;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
color:#1c1c1c;
	text-align: start;
	text-indent: 0px;

	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

    list-style: none;         
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5em 0;
  }


  summary::-webkit-details-marker {
    display: none;
  }


  summary::after {
    content: "+";
    font-size: 16px;

    transition: transform 0.3s ease;
    display: inline-block;
    transform-origin: center;
  }


  details[open] summary::after {
    content: "−";
    transform: rotate(180deg);
  }

  /* Content inside details */
  details > p {
    padding: 0 0 0.5em 0;
    margin: 0;
	font-size: 14px;
    color: #1c1c1c;
  }
</style>
<section class="featured-product">
  <div class="container">
    <h2 class="section-heading">FEATURED PRODUCT</h2>
    <div class="product-content">
      <div class="product-image-slider">
        <div class="swiper mySwiper"  style="height: 100%;">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="justify-items: center;"><img src="https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=600" alt="Modo Image 1" /></div>
            <div class="swiper-slide" style="justify-items: center;"><img src="https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-set-01.png?v=1713525470&width=600" alt="Modo Image 2" /></div>
            <!-- Add more slides as needed -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="product-info">
        <p class="product-brand">MODO</p>
        <h3 class="product-title">MODO BY RONCATO</h3>
        <span class="discount-tag">SAVE 11%</span>
        <p class="product-price">Rs. 15,999.00 <del>Rs. 17,999.00</del></p>
        <p class="product-description">
        Introducing the latest addition to our collection, the Modo by Roncato Luggage Set. Designed to elevate your travel experience, this meticulously crafted luggage set combines style, durability, and functionality to cater to all your travel needs.
<br/><br/>
Elevate your travel game with the Modo by Roncato Luggage Set. It’s more than just luggage; it’s a companion that enhances your journey with its stylish design, robust construction, and thoughtful features. Explore the world with confidence, knowing your belongings are safe and secure in Modo by Roncato.
<br/><br/>
Experience the perfect fusion of fashion and function. Order your Modo by Roncato Luggage Set now and embark on a new era of travel. Adventure awaits!
        </p>
        <details>
  <summary>Product details</summary>
  <p><h4>FEATURES</h4><ul><li>Hardside.</li><li>Fixed Combination</li><li>Tsa</li><li>4 Wheels</li><li>Color Fastness.</li><li>Internal Organization</li><li>Light Weight</li><li>Water Resistant</li><li>Dust Resistant</li><li>Impact Resistance</li></ul><h4>Key Features</h4><ol><li>Premium Quality Construction: Crafted with precision and care, the Modo by Roncato Luggage Set is built to withstand the rigors of travel. The high-quality materials ensure longevity and protection for your belongings.</li><li>Sleek Design: With a contemporary design that effortlessly blends aesthetics and functionality, this luggage set makes a bold statement while ensuring easy identification on the&nbsp;<a href="https://en.wikipedia.org/wiki/Baggage"><strong>baggage</strong></a><strong>&nbsp;</strong>carousel.</li><li>Multiple Sizes:The set includes a range of sizes to accommodate various travel scenarios. From short getaways to extended journeys, you’ll find the perfect size to suit your packing requirements.</li><li>Efficient Organization: Say goodbye to cluttered luggage. The interior of each suitcase is intelligently designed with pockets, dividers, and straps to keep your belongings organized and secure throughout your journey.</li><li>Smooth Maneuverability: Equipped with multidirectional spinner wheels and an adjustable telescopic handle, navigating through crowded airports and bustling streets becomes a breeze, providing a seamless travel experience.</li><li>TSA-Approved Lock: Security is paramount, and the integrated TSA-approved lock ensures the safety of your valuables while allowing easy access to authorized personnel if required.</li><li>Durable Zippers: The robust, high-quality zippers glide smoothly and securely, enhancing the overall reliability of the luggage.</li><li>Sturdy Handles: Reinforced top and side handles provide additional carrying options, allowing you to lift and move the luggage effortlessly.</li><li>Versatile Color Options: Choose from a variety of sophisticated color options that resonate with your personal style, making a statement wherever your travels take you.</li></ol></p>
</details>
        <div class="product-options">
          <p>Color: Black</p>
          <div class="color-options">
            <span class="color-box black active"></span>
            <span class="color-box blue"></span>
            <span class="color-box green"></span>
            <span class="color-box yellow"></span>
          </div>

          <p>Size:</p>
          <div class="size-options">
            <button class="size-btn">Small</button>
            <button class="size-btn">Medium</button>
            <button class="size-btn">Large</button>
            <button class="size-btn">Set of 3</button>
          </div>

          <div class="quantity-wrapper">
            <button class="qty-btn">−</button>
            <input type="text" value="1" class="qty-input" />
            <button class="qty-btn">+</button>
          </div>

          <div class="cart-buttons">
            <button class="add-to-cart">ADD TO CART</button>
            <button class="buy-now">BUY IT NOW</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Swiper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
