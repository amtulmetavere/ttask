<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hero Slider</title>

 
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }

    /* .slideshow {
      max-width: 700px;
      margin: 50px auto;
    } */

.slideshow {
  width: 100vw;
  /* height: 100vh; */
  overflow: hidden;
    position: relative;
    top:40px;
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
</head>
<body>

  <div class="slideshow">
    <div class="slider">
        
      <div class="item">
        
        <img src="assets/slider1.webp" />
          <div class="overlay"></div>
         <div class="content">
          <p>To provide a range of travel luggage & support services that always ensures value, quality safety and innovation</p>
          <h1>LUGGAGE FOR EVERY JOURNEY</h1>
     <button class="animated-btn"><span>Discover More</span></button>

        </div>
        
      </div>

      <div class="item">
        <img src="assets/slider2.webp" />
           <div class="overlay"></div>
        <div class="content">
          <p>To provide a range of travel luggage & support services that always ensures value, quality safety and innovation</p>
          <h1>YOUR JOURNEY STARTS HERE</h1>
     <button class="animated-btn"><span>Discover More</span></button>

        </div>
      </div>
    </div>
  </div>



</body>
</html>
