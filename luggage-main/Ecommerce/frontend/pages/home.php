<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

  <style>
    .countdown-section {
      position: relative;
      background-image: url('https://alburhanluggage.com/cdn/shop/files/sale-bg.jpg?v=1707476635');
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 100px 20px;
      display: flex;
    flex-direction: row;
    align-items: center;
    text-align: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }

    .countdown-overlay {
      position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7));
    z-index: 2;
    }

    .countdown-heading {
      margin-top: 20px;
	/* Font & Text */
	font-family: "Univers Next", sans-serif;
	font-size: 12px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 2.16px;
	line-height: 20.4px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

    }

    .countdown-title {
      font-size: 42px;
      margin-top: 20px;

	font-family: "Univers Next", sans-serif;
	font-size: 32px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 5.76px;
	line-height: 41.6px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    }

    .countdown-description {
      max-width: 500px;
      margin: 0 auto 30px;
      margin-top: 20px;
	/* Font & Text */
	font-family: "Univers Next", sans-serif;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: start;
	text-indent: 0px;
	text-transform: none;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;


    }

    .countdown-timer {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .timer-box {

      padding: 15px 10px;
      min-width: 60px;
      border-radius: 4px;
      display: flex;
    flex-direction: column;
    gap: 0.5rem;
    }
    .timer-box  .digits{
  justify-content: center;
   gap: 2px;
    display: flex;
}
    .timer-box .digit-box {
  background-color: #ef222a80;
  color: white;
  /* font-size: 2rem; */
  padding: 10px;
  border-radius: 6px;
  display: inline-block;
  width: 40px;
  text-align: center;
	/* Font & Text */
	font-family: "Univers Next", sans-serif;
	font-size: 32px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 41.6px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

}

.timer-box .unit {
  display: inline-block;
  text-align: center;
  margin: 10px;
}

.timer-label {
	/* Font & Text */
	font-family: "Univers Next", sans-serif;
	font-size: 12px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 2.16px;
	line-height: 20.4px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
}


    .shop-btn {
      background: #fff;
      color: #000;
      padding: 12px 25px;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .shop-btn:hover {
      background: #ddd;
    }
.countdown-left{
position: relative;
z-index: 3;

}
.countdown-right{
position: relative;
z-index: 3;
display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.countdown-parent {
  display:flex;
  flex-direction: row;
  max-width: 1200px;
  margin: 0 auto;
}
    @media (max-width: 600px) {
      .countdown-title {
        font-size: 28px;
      }
    }
  </style>
  <style>
      #featuredsection {
      --product-list-items-per-row: 2;
      --product-list-horizontal-spacing-factor: 1;
      --product-list-vertical-spacing-factor: 1;
    }

    @media screen and (min-width: 700px) {
      #featuredsection {
        --product-list-items-per-row: 4;
      }
    }
    
    .tabs-title {
      font-size: 12px;
      letter-spacing: 2px;
      color: #666;
      margin-bottom: 10px;
    }

    .tabs {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-bottom: 20px;
      position: relative;
    }

    .tab-btn {
      font-size: 20px;
      letter-spacing: 4px;
      background: none;
      border: none;
      cursor: pointer;
      position: relative;
      padding: 10px;
      color: #000;
    }

    .tab-btn::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0%;
      height: 2px;
      background-color: #000;
      transition: width 0.4s ease;
    }
    .tab-btn.active{
      background:none;
    }
    .tab-btn.active::after {
      width: 100%;
    }

    .product-list {
      display: none;
    }

    .product-list.active {
      display: flex;
      animation: fadeIn 0.4s ease;
      background: #f9f9f9;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

<style>


    /* .slideshow {
      max-width: 700px;
      margin: 50px auto;
    } */

.slideshow {
  width: 100vw;
  /* height: 100vh; */
  overflow: hidden;
    position: relative;
 
}

.slider {
  width: 100%;
  height: 100%;
}

.slider .item {
  width: 100%;
  height: 100%;
}

.slider .item img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* ✨ ensures image covers fully */
  transition: transform 2s ease;
  transform: scale(1.5);
}

.slider .slick-active img {
  transform: scale(1); /* Zoom out but stays covering full area */
}
.overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(54, 54, 54, 0.2), rgba(4, 4, 4, 0.65) 100%);
      z-index: 2;
    }
        .content {
      position: absolute;
      z-index: 3;
      inset: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
      gap:10px;

      margin: 0 auto;
      opacity: 0;
      transform: translateY(30px);
      transition: all 1s ease;
    }

    .slick-active .content {
      opacity: 1;
      transform: translateY(0);
    }

    .content h1 {
          font-size: 32px;
  word-spacing: 0px;
      letter-spacing: 5.76px;
      line-height: 41.6px;
      margin-bottom: 1rem;
      color: white;
          max-width: 600px;
    }

    .content p {
      font-size: 12px;
  word-spacing: 0px;
      text-transform: uppercase;
      letter-spacing: 2.16px;
      line-height: 20.6px;
      text-align:center;
      max-width: 600px;
      color: white;
    }
.animated-btn {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 10px 30px;
  border: 1px solid black;
  background-color: black;
  color: white;
  font-size: 0.9rem;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
  overflow: hidden;
  z-index: 1;
  transition: color 0.4s ease, border 0.4s ease;
}

.animated-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0;
  background-color: transparent;
background-image: linear-gradient(to right, transparent 0%, rgba(255, 255, 255, 0.1) 100%);


  z-index: 0;
  transition: width 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.animated-btn:hover::before {
  width: 100%;
}

.animated-btn span {
  position: relative;
  z-index: 1;
  color: white;
  transition: color 0.45s ease;
}

.animated-btn:hover span {
  color: black;
}

.animated-btn:hover {
  background-color: transparent;
  border-color: black;
}

/* Dots container */
.slick-dots {
  position: absolute;
  bottom: 20px;
  right: 50px;
  display: flex !important;
  gap: 10px;
  list-style: none;
}

/* Inactive dot */
.slick-dots li {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #888;
  opacity: 0.6;
  position: relative;
}

/* Hide default slick button */
.slick-dots li button {
  opacity: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  position: absolute;
}

/* Active dot as spinner */
.slick-dots li.slick-active {
  width: 10px;
  height: 10px;
  background-color: transparent;
  border: 2px solid transparent;
  border-top-color: #fff;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  opacity: 1;
}

/* Spinner animation */
@keyframes spin {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}

  </style>
  <style>
    #rich_text{
      padding: 40px 0;
    }
    #rich_text .links a.link{
	font-family: "Univers Next", sans-serif;
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
  margin:0;
  padding:0;
    }
    .links{
      display: flex;
      flex-direction: row;
      align-items: center;
      gap:20px;
    }
  </style>
  <style>
    #mediagrid {
      --media-grid-row-height: 180px;
      --media-grid-gap: 1rem;}

    @media screen and (min-width: 700px) {
      #mediagrid {
        --media-grid-row-height: 290px;
      }
    }

    @media screen and (min-width: 1150px) {
      #mediagrid {
        --media-grid-gap: 1.25rem;
      }
    }
    #mediagrid .content-over-media {
    --content-over-media-gap: 0!important;
  }
    
  #mediagrid  .content-over-media p {
	font-family: "Univers Next", sans-serif;
	font-size: 32px;
	font-style: normal;
	font-variant: normal;
  color:rgb(255, 255, 255);
	font-weight: 400;
	letter-spacing: 5.76px;
	line-height: 41.6px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    }
    #mediagrid  .content-over-media button {
	/* Font & Text */
	font-family: "Univers Next", sans-serif;
	font-size: 13px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 2.34px;
	line-height: 21.45px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;

	/* Color & Background */
	background-attachment: scroll, scroll;
	background-color: rgba(0, 0, 0, 0);
	background-image: linear-gradient(rgb(255, 255, 255), rgb(255, 255, 255)), linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
	background-position: 100% 50%, 100% 50%;
	background-repeat: no-repeat, no-repeat;
	color: rgb(28, 28, 28);


}
  </style>

  <style>
    .textscroll{
padding : 20px 0;
    }
    .m-scroll {
  display: flex;
  position: relative;
  width: 100%;
  height: 200px;
  margin: auto;
  border-top: 1px solid #b3b3b340;
border-bottom: 1px solid #b3b3b340;
  overflow: hidden;
  z-index: 1;
}
.m-scroll__title {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  height: 100%;
  white-space: nowrap;
  transition: all 1s ease;
}
.m-scroll__title > div {
  display: flex;
  -webkit-animation: scrollText 33s infinite linear;
          animation: scrollText 33s infinite linear;
}
.m-scroll__title h1 {
  margin: 0;
  transition: all 2s ease;
	font-size: 64px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 11.52px;
	line-height: 105.6px;
	text-decoration: none solid rgb(179, 179, 179);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: nowrap;
	word-spacing: 0px;
	background-color: rgba(0, 0, 0, 0);
	color: rgb(179, 179, 179);
}
.m-scroll__title a {
  padding: 0 40px;
  text-decoration: none;
	font-size: 64px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 11.52px;
	line-height: 105.6px;
	text-decoration: none solid rgb(179, 179, 179);
	text-align: start;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: nowrap;
	word-spacing: 0px;
	background-color: rgba(0, 0, 0, 0);
	color: rgb(179, 179, 179);
}
.m-scroll__title h1 img{
max-width: 1.5em;
margin:10px;
}
/*div:hover {
  animation-play-state: paused;
}*/
@-webkit-keyframes scrollText {
  from {
    transform: translateX(0%);
  }
  to {
    transform: translateX(-50%);
  }
}
@keyframes scrollText {
  from {
    transform: translateX(0%);
  }
  to {
    transform: translateX(-50%);
  }
}
featured-collections-carousel .product-list.active {
  display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
featured-collections-carousel .product-card{
  flex: 1 1 25%;
}
  </style>
</head>

<body>
<?php include __DIR__ . '/../components/featuredproducts.php'; ?>
<section class="countdown-section">
<!-- <div class="countdown-parent">  -->
    <div class="countdown-left">
    <div class="countdown-timer" id="countdown">
      <div class="timer-box">
      <div class="digits">
         <div class="digit-box" id="days-tens">0</div>
  <div class="digit-box" id="days-ones">0</div>
  </div>
        <div class="timer-label">Day</div>
      </div>
      <div class="timer-box">
        <div class="digits">
        <div class="digit-box" id="hours-tens">0</div>
        <div class="digit-box" id="hours-ones">0</div>
        </div>

        <div class="timer-label">Hours</div>
      </div>
      <div class="timer-box">
      <div class="digits">
      <div class="digit-box" id="minutes-tens">0</div>
      <div class="digit-box" id="minutes-ones">0</div>
  </div>
        <div class="timer-label">Min</div>
      </div>
      <div class="timer-box">
      <div class="digits">
      <div class="digit-box" id="seconds-tens">0</div>
      <div class="digit-box" id="seconds-ones">0</div>
  </div>
        <div class="timer-label">Sec</div>
      </div>
    </div>
  
    </div>
    <div class="countdown-right">
    <div class="countdown-heading">Limited Time Offer</div>
    <div class="countdown-title">SALE</div>
    <p class="countdown-description">
      Shop our selection of exclusive Luggage and Travel Bags at reduced price during the Umrah Sale. Hurry up!
    </p>
    <a href="/collections/sale" class="shop-btn">SHOP NOW</a>
    </div>
    <!-- </div>  -->
</section>

<section id="featuredsection" class="shopify-section shopify-section--featured-collections" style="    padding: 40px 0;">
  <div class="section-spacing color-scheme color-scheme--scheme-1 color-scheme--bg-609ecfcfee2f667ac6c12366fc6ece56 bordered-section" bis_skin_checked="1" style="border:none;">
    <div class="container" bis_skin_checked="1"><div class="section-stack" bis_skin_checked="1">
        <div class="v-stack justify-self-center gap-4 text-center sm:gap-5" bis_skin_checked="1">
          <div class="tabs-title">OUR BEST SELLERS</div>

<div class="tabs">
  <button class="tab-btn active" onclick="showTab('best')">BEST SELLERS</button>
  <button class="tab-btn" onclick="showTab('new')">NEW ARRIVALS</button>
</div>
<featured-collections-carousel style="">

          <product-list id="best" class="product-list  justify-center">
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
</product-list>
<div class="justify-self-center" bis_skin_checked="1">
<product-list id="new" class="product-list   justify-center">
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
</product-list>
</featured-collections-carousel>


      </div>
    </div>
  </div>
</section>
<section>
<div class="slideshow" style="top:0">
    <div class="slider">
        
      <div class="item">
        
        <img src="assets/ctabanners/delseybanner.jpg" />
          <div class="overlay"></div>
         <div class="content">
          <p style="font-weight:300; text-transform:uppercase;">Delsey</p>
          <h1 style="font-weight:300; text-transform:uppercase;">Engineered for Effortless Journey</h1>
     <button class="animated-btn"><span>SHOP</span></button>

        </div>
        
      </div>

      <div class="item">
        <img src="assets/ctabanners/echolacbanner.jpg" />
           <div class="overlay"></div>
        <div class="content">
          <p style="font-weight:300; text-transform:uppercase;">Echolac</p>
          <h1 style="font-weight:300; text-transform:uppercase;">Crafted for Adventures</h1>
     <button class="animated-btn"><span>SHOP</span></button>

        </div>
      </div>

      <div class="item">
        <img src="assets/ctabanners/imtouristerbanner.jpg" />
           <div class="overlay"></div>
        <div class="content">
          <p style="font-weight:300; text-transform:uppercase;">American tourister</p>
          <h1 style="font-weight:300; text-transform:uppercase;">Stylize Your Wanderlust</h1>
     <button class="animated-btn"><span>SHOP</span></button>

        </div>
      </div>

      <div class="item">
        <img src="assets/ctabanners/lojel.jpg" />
           <div class="overlay"></div>
        <div class="content">
          <p style="font-weight:300; text-transform:uppercase;">Lojel</p>
          <h1 style="font-weight:300; text-transform:uppercase;">Move your way</h1>
     <button class="animated-btn"><span>SHOP</span></button>

        </div>
      </div>

      <div class="item">
        <img src="assets/ctabanners/luggagebanner.jpg" />
           <div class="overlay"></div>
        <div class="content">
<p style="font-weight:300; text-transform:uppercase;">It luggage</p>
        <h1 style="font-weight:300; text-transform:uppercase;">Explore in Elegance</h1>
     <button class="animated-btn"><span>SHOP</span></button>

        </div>
      </div>

      <div class="item">
        <img src="assets/ctabanners/lusettibanner.jpg" />
           <div class="overlay"></div>
        <div class="content">
          <p style="font-weight:300; text-transform:uppercase;">Lusetti</p>
          <h1 style="font-weight:300; text-transform:uppercase;">Essence of Luxury Travel</h1>
     <button class="animated-btn"><span>SHOP</span></button>

        </div>
      </div>
    </div>
  </div>  
</section>

  <section id="rich_text" class="shopify-section--rich-text"><div class="color-scheme color-scheme--scheme-1 color-scheme--bg-609ecfcfee2f667ac6c12366fc6ece56 section-spacing " bis_skin_checked="1">
    <div class="container container--xs" bis_skin_checked="1">
      <div class="prose text-center" bis_skin_checked="1" style="    display: flex;flex-direction: column; align-items: center;">
        <div bis_skin_checked="1"><img src="assets/icons/bagicon.png" width="651" height="743" loading="lazy" sizes="(max-width: 699px) min(100px, 100vw), min(100px, 100vw)" class="constrained-image" style="margin-inline: auto; --image-max-width: 100px; --image-mobile-max-width: 100px"></div><p class="h1" 
      style="
	font-size: 32px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 5.76px;
	line-height: 41.6px;
	text-decoration: none solid rgb(28, 28, 28);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
      max-width: 600px;">OUR AIM: OFFER ELEGANT, TIMELESS &amp; FUNCTIONAL PRODUCTS</p>
      <div class="links" >
  <a href="#" class="link">Our story</a>
  <a href="#" class="link">Commitments</a></div></div>
    </div>
  </div>
</section>
<section id="mediagrid" class="shopify-section shopify-section--media-grid" style="max-width:1200px; width:100%;justify-content:center; margin:0 auto;     padding: 40px 0;">
  <div class="section-spacing color-scheme color-scheme--scheme-1 color-scheme--bg-609ecfcfee2f667ac6c12366fc6ece56 " bis_skin_checked="1">
    <div class="container container--lg" bis_skin_checked="1">
      <div class="section-stack" bis_skin_checked="1"><media-grid class="media-grid"><a href="/collections/luggage" class="media-grid__item" style="--media-grid-item-column-span: 8; --media-grid-item-row-span: 2"><div class="content-over-media color-scheme color-scheme--scheme-4 group" reveal-on-scroll="true" style="--content-over-media-overlay: 0 0 0 / 0.0; opacity: 1;" bis_skin_checked="1"><img src="assets/collection/luggage.jpg" width="1600" height="1600" loading="lazy" sizes="(max-width: 699px) 100vw, 840px" class="zoom-image group-hover:zoom"><div class="prose prose--tight place-self-center text-center" bis_skin_checked="1">
                    <p class="h1">Luggage</p>
<button type="button" class="button">View Collection</button></div></div></a><a href="/collections/travel-accessories" class="media-grid__item" style="--media-grid-item-column-span: 4; --media-grid-item-row-span: 1"><div class="content-over-media color-scheme color-scheme--scheme-4 group" reveal-on-scroll="true" style="--content-over-media-overlay: 0 0 0 / 0.0; opacity: 1;" bis_skin_checked="1"><img src="assets/collection/travel-accessories.jpg" width="1600" height="1600" loading="lazy" sizes="(max-width: 699px) 100vw, 420px" class="zoom-image group-hover:zoom"><div class="prose prose--tight place-self-center text-center" bis_skin_checked="1">
                    <p class="h1">Travel Accessories</p>
<button type="button" class="button">View Collection</button></div></div></a><a href="/collections/backpacks" class="media-grid__item" style="--media-grid-item-column-span: 4; --media-grid-item-row-span: 1"><div class="content-over-media color-scheme color-scheme--scheme-4 group" reveal-on-scroll="true" style="--content-over-media-overlay: 0 0 0 / 0.0; opacity: 1;" bis_skin_checked="1"><img src="assets/collection/backpack.jpg" width="1600" height="1600" loading="lazy" sizes="(max-width: 699px) 100vw, 420px" class="zoom-image group-hover:zoom"><div class="prose prose--tight place-self-center text-center" bis_skin_checked="1">
                    <p class="h1">Backpacks</p>
<button type="button" class="button">View Collection</button></div></div></a></media-grid>
      </div>
    </div>
  </div>
</section>


<section class="textscroll">
<div class="m-scroll">
  <div class="m-scroll__title">
    <div>
      <h1 style="display: flex;">
        <a href="https://dribbble.com/JulianoF">Travel Gear Guide</a>
        <img src="assets/icons/scrollbackpack.avif" >
        <a href="https://dribbble.com/JulianoF">Travel Gear Guide</a>
        <img src="assets/icons/scrollbackpack.avif" >
        <a href="https://dribbble.com/JulianoF">Travel Gear Guide</a>
        <img src="assets/icons/scrollbackpack.avif" >
      </h1>
      <h1 style="display: flex;">
        <a href="https://dribbble.com/JulianoF">Travel Gear Guide</a>
        <img src="assets/icons/scrollbackpack.avif" >
        <a href="https://dribbble.com/JulianoF">Travel Gear Guide</a>
        <img src="assets/icons/scrollbackpack.avif" >
        <a href="https://dribbble.com/JulianoF">Travel Gear Guide</a>
        <img src="assets/icons/scrollbackpack.avif" >
      </h1>
    </div>
  </div>
</div>
<div class="m-scroll">
  <div class="m-scroll__title">
    <div>
   
      <h1 style="display: flex;">
      <a href="https://dribbble.com/JulianoF">Fueling Your Wanderlust</a> 
      <img src="assets/icons/lustpouch.avif"  >
      <a href="https://dribbble.com/JulianoF">Fueling Your Wanderlust</a> 
      <img src="assets/icons/lustpouch.avif"  >
      <a href="https://dribbble.com/JulianoF">Fueling Your Wanderlust</a> 
      <img src="assets/icons/lustpouch.avif"  >
   
      </h1>
      <h1 style="display: flex;">
      <a href="https://dribbble.com/JulianoF">Fueling Your Wanderlust</a> 
      <img src="assets/icons/lustpouch.avif"  >
      <a href="https://dribbble.com/JulianoF">Fueling Your Wanderlust</a> 
      <img src="assets/icons/lustpouch.avif"  >
      <a href="https://dribbble.com/JulianoF">Fueling Your Wanderlust</a> 
      <img src="assets/icons/lustpouch.avif"  >
   
      </h1>
    </div>
  </div>
</div>
</section>
<?php include __DIR__ . '/../components/imagebanner.php'; ?>
<?php include __DIR__ . '/../components/featuredproducts.php'; ?>
<?php include __DIR__ . '/../components/videosection.php'; ?>
<?php include __DIR__ . '/../components/collectionslider.php'; ?>
<?php include __DIR__ . '/../components/aboutus.php'; ?>
<?php include __DIR__ . '/../components/customerreview.php'; ?>
<?php include __DIR__ . '/../components/smoothscroll.php'; ?>
<?php include __DIR__ . '/../components/productdetails.php'; ?>
<script>
  const countDownDate = new Date("July 10, 2025 00:00:00").getTime();

  const x = setInterval(function () {
    const now = new Date().getTime();
    const distance = countDownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Pad all values with 2 digits
    const d = String(days).padStart(2, '0');
    const h = String(hours).padStart(2, '0');
    const m = String(minutes).padStart(2, '0');
    const s = String(seconds).padStart(2, '0');

    // Update each digit box
    document.getElementById("days-tens").textContent = d[0];
    document.getElementById("days-ones").textContent = d[1];
    document.getElementById("hours-tens").textContent = h[0];
    document.getElementById("hours-ones").textContent = h[1];
    document.getElementById("minutes-tens").textContent = m[0];
    document.getElementById("minutes-ones").textContent = m[1];
    document.getElementById("seconds-tens").textContent = s[0];
    document.getElementById("seconds-ones").textContent = s[1];

    // Optional: handle expiration
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "<strong>Expired</strong>";
    }
  }, 1000);
</script>
<script>
  function showTab(tab) {
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.product-list').forEach(list => list.classList.remove('active'));

    document.querySelector(`[onclick="showTab('${tab}')"]`).classList.add('active');
    document.getElementById(tab).classList.add('active');
  }

  // Set default tab (BEST SELLERS) on page load
  document.addEventListener("DOMContentLoaded", function () {
    showTab('best');
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Hover effect
    const productImages = document.querySelectorAll(".main-image");

    productImages.forEach(img => {
      const hoverSrc = img.getAttribute("data-hover");
      const originalColor = "black";
      const defaultSrc = img.getAttribute(`data-${originalColor}`);
      img.setAttribute("data-current-color", originalColor);

      img.addEventListener("mouseenter", () => {
        if (hoverSrc) img.src = hoverSrc;
      });

      img.addEventListener("mouseleave", () => {
        const color = img.getAttribute("data-current-color") || originalColor;
        const fallbackSrc = img.getAttribute(`data-${color}`);
        if (fallbackSrc) img.src = fallbackSrc;
      });
    });

    // Dot click change
    const dots = document.querySelectorAll(".color-dots .dot");
    dots.forEach(dot => {
      dot.addEventListener("click", () => {
        const color = dot.getAttribute("data-color");
        const img = dot.closest(".product-card").querySelector(".main-image");
        const newSrc = img.getAttribute(`data-${color}`);
        if (newSrc) {
          img.src = newSrc;
          img.setAttribute("data-current-color", color);
        }

        // Active class toggle
        dot.parentElement.querySelectorAll(".dot").forEach(d => d.classList.remove("active"));
        dot.classList.add("active");
      });
    });
  });
</script>

</body>
</html>