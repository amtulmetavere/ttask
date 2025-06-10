<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scroll Sync Section</title>
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }
    .scroll-section {
      display: flex;
      position: relative;
      min-height: 100%;
      background-image: url('https://alburhanluggage.com/cdn/shop/files/text-scroll-bg.jpg?v=1713602755&width=1800');
      background-attachment: fixed;
      background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .sticky-image {
        position: sticky;
    top: 20%;
    width: 50%;
    /* margin-top: 10%; */
    height: 70vh;
    display: flex
;
    align-items: center;
    justify-content: end;

    }

    .sticky-image img {
        width: 60%;
    max-height: 90%;
    object-fit: cover;
    object-position: top;
 
    
    transition: 0.5s ease-in-out;
    }

    .text-blocks {
        width: 50%;
        padding: 0% 4rem 64px;
  
    }

    .text-block {
        min-height: 70vh;
    padding: 3rem 2rem;
    display: flex
;
    flex-direction: column;
    align-items: stretch;
    color: #fff;
    gap: 15px;
    justify-content: center;
    }

    .text-block h5 {
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
    max-width: 350px;
    }

    .text-block h2 {
	font-size: 22px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: 3.96px;
	line-height: 33px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: center;
	text-indent: 0px;
	text-transform: uppercase;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    max-width: 350px;
    }

    .text-block p {
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-decoration: none solid rgb(255, 255, 255);
	text-align: center;
	text-indent: 0px;
	text-transform: none;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    max-width: 350px;
    }
    .text-block {
  opacity: 0.2;
  transition: opacity 0.5s ease;
}

.text-block.active {
  opacity: 1;
  background:transparent;
}

    @media(max-width: 768px) {
      .scroll-section {
        flex-direction: column;
      }

      .sticky-image,
      .text-blocks {
        width: 100%;
      }

      .text-block {
        padding: 4rem 1.5rem;
      }

      .text-block h2 {
        font-size: 1.5rem;
      }
    }
    #mainImage {
  /* transition: opacity 0.5s ease; */
  opacity: 1;
}


 </style>
</head>
<body>
  <section class="scroll-section">
    <div class="sticky-image">
      <img id="mainImage" src="https://alburhanluggage.com/cdn/shop/files/hira-mani.jpg?v=1708432596&width=575" alt="Scroll Image">
    </div>
    <div class="text-blocks">
      <div class="text-block" data-image="https://alburhanluggage.com/cdn/shop/files/hira-mani.jpg?v=1708432596&width=575">
        <h5>Actress</h5>
      <h2>Hira Mani</h2>
        <p>As a busy actress and mom, I need luggage that can keep up with my hectic schedule. Al Burhan Luggage not only meets but exceeds my expectations! Stylish, durable, and practical – it's a game-changer for any on-the-go lifestyle.</p>
      </div>
      <div class="text-block" data-image="https://alburhanluggage.com/cdn/shop/files/laraib-rahim.jpg?v=1708432785&width=575">
      <h5>Influencer</h5>
      <h2>Laraib Rahim</h2>
        <p>Al Burhan Luggage is not just a travel companion; it's a style statement! Whether I'm jet-setting for a fashion shoot or a relaxing getaway, Al Burhan keeps me organized and chic every step of the way.</p>
  
      </div>
      <div class="text-block" data-image="https://alburhanluggage.com/cdn/shop/files/sarfaraz-ahmed.jpg?v=1708435259&width=575">
      <h5>Cricketer</h5>
      <h2>Sarfaraz Ahmed</h2>
        <p>Life on the pitch demands precision, focus, and reliability. The same goes for my travels off the field, and that's why I trust Al Burhan Luggage every time. Just like my game, Al Burhan exudes strength, durability, and style. Whether I'm representing my team on foreign soil or embarking on a family vacation, Al Burhan ensures that I carry my essentials with ease and confidence. Step up your travel game with Al Burhan – it's a winning choice, both on and off the field!</p>
  
      </div>
      <div class="text-block" data-image="https://alburhanluggage.com/cdn/shop/files/ushnah-shah.jpg?v=1708435259&width=575">
      <h5>Actress</h5>
      <h2>Ushnah Shah</h2>
        <p>From the lights of the city to the serenity of the wilderness, my travels are as diverse as they come. And amidst all these adventures, there's one constant: my Al Burhan Luggage. It's not just about carrying my belongings; it's about carrying my stories, my memories. With Al Burhan, I'm not just a traveler; I'm an explorer, ready to conquer every horizon. Join me on my journey and discover the world with Al Burhan by your side.</p>
  
      </div>
      <div class="text-block" data-image="https://alburhanluggage.com/cdn/shop/files/jannat-mirza.jpg?v=1708434248&width=575">
      <h5>Influencer</h5>
      <h2>Jannat Mirza</h2>
        <p>Make a statement wherever you go with Al Burhan Luggage! As a social media influencer, I'm always on the lookout for products that blend style and functionality, and Al Burhan ticks all the boxes. Get ready to travel in style with Al Burhan!
      </div>
      <div class="text-block" data-image="https://alburhanluggage.com/cdn/shop/files/rabeeca-khan.jpg?v=1708434435&width=575">
      <h5>Influencer</h5>
      <h2>Rabeeca Khan</h2>
        <p>Elevate your travel experience with Al Burhan Luggage! As a content creator, I'm always on the move, and Al Burhan never disappoints. With its sleek design and durability, it's the perfect companion for all my adventures. Get yours today!

</p>
  
      </div>
    </div>
  </section>
  <script>
  const blocks = document.querySelectorAll(".text-block");
  const image = document.getElementById("mainImage");

  let lastImage = image.src;

  function updateOnScroll() {
    let fullyVisibleBlock = null;
    let closestBlock = null;
    let minDistance = window.innerHeight;

    blocks.forEach((block) => {
      const rect = block.getBoundingClientRect();
      const blockHeight = rect.height;

      // Gradual opacity based on visibility
      const visibleTop = Math.max(rect.top, 0);
      const visibleBottom = Math.min(rect.bottom, window.innerHeight);
      const visibleHeight = visibleBottom - visibleTop;

      let visibilityRatio = visibleHeight / blockHeight;
      visibilityRatio = Math.max(0, Math.min(1, visibilityRatio)); // clamp between 0 and 1

      block.style.opacity = 0.2 + visibilityRatio * 0.8; // between 0.2 to 1

      // Determine fully visible block for image change
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        fullyVisibleBlock = block;
      }

      // Find the closest block to top (used only if none is fully visible)
      const distance = Math.abs(rect.top);
      if (distance < minDistance) {
        minDistance = distance;
        closestBlock = block;
      }
    });

    const blockToUse = fullyVisibleBlock || closestBlock;
    if (blockToUse) {
      const newImage = blockToUse.getAttribute("data-image");
      if (newImage !== lastImage) {
        image.src = newImage;
        lastImage = newImage;
      }
    }
  }

  window.addEventListener("scroll", updateOnScroll);
  window.addEventListener("load", updateOnScroll);
</script>


</body>
</html>
