<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Announcement Bar</title>
  <style>
                            @import url('https://fonts.cdnfonts.com/css/univers-next');
</style>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Univers Next', sans-serif;
    }

    .announcement-bar {
      width: 100%;
      background-color:#b41c21;
      color: white;
      font-size: 13px;
      text-align: center;
      padding: 10px 0;
      line-height: 21.45px;
      letter-spacing: 2.36px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 50;
      word-spacing: 0px;
    }

    body {
    
    }

    .content {
      margin-top: 60px;
      padding: 20px;
    }
    
   
#main-header {
  position: fixed;
  top: 40px;
  left: 0;
  width: 100%;
  padding: 20px 30px;
  display: flex;
  justify-content: center;
  background: transparent;
  transition: all 0.3s ease;
  z-index: 1000;
}

#main-header.hovered {
  background-color: white;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  
}

.header-inner {
  width: 100%;
  /* max-width: 1200px; */
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.menu-btn {
  background: none;
  border: none;
  cursor: pointer;
}

.icon-group {
  display: flex;
  gap: 20px;
}

.icon {
  width: 24px;
  height: 24px;
  color: white;
  transition: color 0.3s ease;
}

#main-header.hovered .icon {
  color: #1c1c1c;
}

#logo-img {
  width: 200px;
  height: auto;
  transition: all 0.3s ease;
}
 .header__logo img {
      width: 150px;
      height: auto;
    }
/* Drawer Basics */
.headerdrawer {
  position: fixed;
  top: 0;
  left: 0;
  width: 320px;
  height: 100vh;
  background: white;
  transform: translateX(-100%);
  transition: transform 0.45s ease;
  z-index: 9999;
  padding: 30px 25px;
  overflow-y: auto;
}
.headerdrawer.active {
  transform: translateX(0%);
}

.drawer-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(2px);
  opacity: 0;
  visibility: hidden;
  transition: 0.4s ease;
  z-index: 9998;
}
.drawer-overlay.active {
  opacity: 1;
  visibility: visible;
}

.close-btn {
  font-size: 24px;
  border: none;
  background: none;
  color: #1c1c1c;
  cursor: pointer;
  margin-bottom: 20px;
  display: block;
  margin-left: auto;
}

/* Drawer Menu */
.drawer-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}
.drawer-menu li {
  opacity: 0;
  transform: translateY(20px);
  animation: slideUp 0.5s forwards;
  animation-delay: var(--delay, 0s);
  border-bottom: 1px solid #eee;
  padding: 12px 0;
}

.drawer-menu a,
.drawer-menu .submenu-toggle {
  font-size: 14px;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #1c1c1c;
  background: none;
  border: none;
  cursor: pointer;
  text-align: left;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Arrow icon */
.arrow {
  font-size: 14px;
  color: #999;
  transition: transform 0.3s ease;
}

/* Submenu */
.submenu {
  display: none;
  padding-left: 15px;
  margin-top: 10px;
  flex-direction: column;
}
.submenu li {
  padding: 6px 0;
  border: none;
  animation: none;
  opacity: 1;
  transform: none;
}
.submenu a {
  font-size: 13px;
  text-transform: none;
  letter-spacing: 0.5px;
}

/* Show submenu */
.has-submenu.open .submenu {
  display: flex;
}
.has-submenu.open .arrow {
  transform: rotate(90deg);
}

/* Animations */
@keyframes slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

  </style>
</head>
<body>

  <div class="announcement-bar">
    ENJOY FREE NATIONWIDE SHIPPING ON ORDERS OVER RS. 5000!
  </div>

  <!-- Header -->
  <!-- ✅ Header -->
  <header id="main-header">
    <div class="header-inner">
      <!-- Left Menu Button -->
   <button class="menu-btn" id="menuToggle">
        <svg class="icon" viewBox="0 0 24 24">
          <path d="M1 19h22M1 12h22M1 5h22" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></path>
        </svg>
      </button>

      <!-- Center Logo -->
      <div class="header__logo">
   <img id="logo-img" src="assets/logo.webp" alt="Al Burhan Luggage">
      </div>

      <!-- Right Icons -->
      <div class="icon-group">
        <!-- Account -->
          <svg class="icon icon-account"
       aria-hidden="true" fill="none" focusable="false" width="24" class="header__nav-icon icon icon-account" viewBox="0 0 24 24">
      <path d="M16.125 8.75c-.184 2.478-2.063 4.5-4.125 4.5s-3.944-2.021-4.125-4.5c-.187-2.578 1.64-4.5 4.125-4.5 2.484 0 4.313 1.969 4.125 4.5Z" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
      <path d="M3.017 20.747C3.783 16.5 7.922 14.25 12 14.25s8.217 2.25 8.984 6.497" stroke="currentColor" strokeWidth="1.5" strokeMiterlimit="10"></path>
    </svg>

        <!-- Search -->
           <svg class="icon icon-account"
          aria-hidden="true" fill="none" focusable="false" width="24" class="header__nav-icon icon icon-search" viewBox="0 0 24 24">
      <path d="M10.364 3a7.364 7.364 0 1 0 0 14.727 7.364 7.364 0 0 0 0-14.727Z" stroke="currentColor" strokeWidth="1.5" strokeMiterlimit="10"></path>
      <path d="M15.857 15.858 21 21.001" stroke="currentColor" strokeWidth="1.5" strokeMiterlimit="10" strokeLinecap="round"></path>
    </svg>

        <!-- Cart -->
               <svg class="icon icon-account"
          aria-hidden="true" fill="none" focusable="false" width="24" class="header__nav-icon icon icon-cart" viewBox="0 0 24 24"><path d="M4.75 8.25A.75.75 0 0 0 4 9L3 19.125c0 1.418 1.207 2.625 2.625 2.625h12.75c1.418 0 2.625-1.149 2.625-2.566L20 9a.75.75 0 0 0-.75-.75H4.75Zm2.75 0v-1.5a4.5 4.5 0 0 1 4.5-4.5v0a4.5 4.5 0 0 1 4.5 4.5v1.5" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path></svg>
      </div>
    </div>
    
  </header>
<!-- Drawer -->
<div class="headerdrawer" id="headerDrawer">
  <button id="closeDrawer" class="close-btn">&times;</button>
  <ul class="drawer-menu">
    <li style="--delay: 0.1s;"><a href="#">Home</a></li>
    <li style="--delay: 0.2s;"><a href="#">All Products</a></li>

    <li class="has-submenu" style="--delay: 0.3s;">
      <button class="submenu-toggle">
        Shop by Category <span class="arrow">&gt;</span>
      </button>
      <ul class="submenu">
        <li><a href="#">Luggage</a></li>
        <li><a href="#">Travel Bags</a></li>
        <li><a href="#">Backpacks</a></li>
      </ul>
    </li>

    <li class="has-submenu" style="--delay: 0.4s;">
      <button class="submenu-toggle">
        Shop by Brand <span class="arrow">&gt;</span>
      </button>
      <ul class="submenu">
        <li><a href="#">American Tourister</a></li>
        <li><a href="#">Roncato</a></li>
        <li><a href="#">Delsey</a></li>
      </ul>
    </li>

    <li class="has-submenu" style="--delay: 0.5s;">
      <button class="submenu-toggle">
        Gift <span class="arrow">&gt;</span>
      </button>
      <ul class="submenu">
        <li><a href="#">Gift Sets</a></li>
        <li><a href="#">Vouchers</a></li>
      </ul>
    </li>

    <li style="--delay: 0.6s;"><a href="#">Sale</a></li>
    <li style="--delay: 0.7s;"><a href="#">Flagship Store</a></li>
    <li style="--delay: 0.8s;"><a href="#">Contact Us</a></li>
  </ul>
</div>

<!-- Overlay -->
<div class="drawer-overlay" id="drawerOverlay"></div>

<script>
    const header = document.getElementById('main-header');
const logo = document.getElementById('logo-img');

const whiteLogo = "assets/logowhite.png";
const colorLogo = "assets/logo.webp";


header.addEventListener('mouseenter', () => {
  header.classList.add('hovered');
  logo.src = colorLogo;
});

header.addEventListener('mouseleave', () => {
  if (window.scrollY <= 10) {
    header.classList.remove('hovered');
    logo.src = whiteLogo;
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    header.classList.add('hovered');
    logo.src = colorLogo;
  } else {
    header.classList.remove('hovered');
    logo.src = whiteLogo;
  }
});

</script>
<script>
  const drawer = document.getElementById("headerDrawer");
  const overlay = document.getElementById("drawerOverlay");
  const menuBtn = document.querySelector(".menu-btn");
  const closeBtn = document.getElementById("closeDrawer");

  menuBtn.addEventListener("click", () => {
    drawer.classList.add("active");
    overlay.classList.add("active");
  });

  closeBtn.addEventListener("click", () => {
    drawer.classList.remove("active");
    overlay.classList.remove("active");
  });

  overlay.addEventListener("click", () => {
    drawer.classList.remove("active");
    overlay.classList.remove("active");
  });

  // Expandable Submenus
  const toggles = document.querySelectorAll(".submenu-toggle");
  toggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".has-submenu");
      parent.classList.toggle("open");
    });
  });
</script>

</body>

</html>
