<style>
    .footer-containerr {
    display: flex
;
    background-color: #efefef;
    flex-direction: column;
    align-items: center;
}
.cta {
      display: flex
;
    padding: 40px;
    background-color: transparent;
    max-width: 1400px;
    justify-content: space-between;
    justify-self: anchor-center;
    gap: 150px;
    /* margin: 0 auto; */
}

.block{
    display: flex
;
    flex-direction: column;
    align-items: center;
    font-size: 12px;
    letter-spacing: 1px;
    word-spacing: 0px;
gap:20px;
}
.block h2{
  
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
}
.block a{

	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 23.1px;
	text-align: center;
	text-indent: 0px;
	vertical-align: baseline;
	white-space: normal;
	word-spacing: 0px;
    text-decoration: underline
}
.footer-section {
  background: #fff;
  color: #333;
  font-family: 'Montserrat', sans-serif;
  padding: 60px 20px 20px;
  border-top: 1px solid #eee;
  width: 100%;
    border-top:1px solid  #dddddd;
}
.footer-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
  max-width: 1500px;
  margin: 0 auto 40px;

}
.footer-column h4 {
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1px;
  margin-bottom: 15px;
}
.footer-column p {
  font-size: 14px;
  line-height: 1.6;
 color:#717171;
}
.footer-column ul {
  list-style: none;
  padding: 0;
      margin: 0;
}
.footer-column ul li {
  margin-bottom: 8px;
}
.footer-column ul li a {
 color:#717171;
  text-decoration: none;
  font-size: 14px;
}
.footer-column ul li a:hover {
  text-decoration: underline;
}
.newsletter-formm {
  margin: 15px 0;
  display: flex;
  flex-direction: column;
}
.newsletter-formm input {
  padding: 10px;
  font-size: 14px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}
.newsletter-formm button {
    background: #000;
    color: #fff;
    padding: 12px 40px;
    border: none;
    font-size: 12px;
    cursor: pointer;
    letter-spacing: 2px;
    width: max-content;
}
.social-icons {
  display: flex;
  gap: 15px;
  margin-top: 15px;
}
.social-icons a {
  color: #333;
  font-size: 16px;
}
.social-icons a:hover {
  color: #000;
}
.footer-bottom {
  border-top: 1px solid #eee;
  padding: 20px 0;
  text-align: center;
  font-size: 13px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
  max-width: 1500px;
  margin: 0 auto;
}
.payment-icons img {
  height: 28px;
  margin-left: 10px;
}

/* Responsive */
@media (max-width: 768px) {
  .footer-container {
    grid-template-columns: 1fr 1fr;
  }
  .footer-bottom {
    flex-direction: column;
    text-align: center;
  }
}
@media (max-width: 480px) {
  .footer-container {
    grid-template-columns: 1fr;
  }
}
.payment-icons{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}
.copyright {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
gap: 20px;
  
}

</style>
<section class="footer-containerr">
    <div class="cta">
        <div class="block sec1">
            <svg aria-hidden="true" focusable="false" fill="none" stroke-width="1.5" width="24" class="hidden sm:block icons icon-picto-pin" viewBox="0 0 24 24">
      <path clip-rule="evenodd" d="M12 12a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
      <path clip-rule="evenodd" d="M12 .75a7.5 7.5 0 0 1 7.5 7.5c0 3.407-5.074 11.95-6.875 14.665a.75.75 0 0 1-1.25 0C9.574 20.2 4.5 11.657 4.5 8.25A7.5 7.5 0 0 1 12 .75Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
            <h2>Find a store near you</h2>
         <a>Get direction</a>
        </div>
         <div class="block sec2">
            <svg aria-hidden="true" focusable="false" fill="none" stroke-width="1.5" width="24" class="hidden sm:block icons icon-picto-operator" viewBox="0 0 24 24">
      <path d="M8.76 2.549a8.989 8.989 0 0 0-2.251 16.5v4.2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
      <path clip-rule="evenodd" d="M11.01 15a3.75 3.75 0 1 1 0-7.5 3.75 3.75 0 0 1 0 7.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M13.26 8.25V1.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75v6.75m11.249 7.511.936-.234a1.5 1.5 0 0 0 .884-2.287l-1.82-2.729v-.75c0-3.542-2.868-6.511-6.749-7.3m2.249 20.789v-2.239l1.007.167c.414.07.838.052 1.244-.053m-6.75-9.875a7.5 7.5 0 0 0 7.5 7.5h1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
            <h2>call us today</h2>
         <a>+923312255053</a>
        </div>
         <div class="block sec3">
            <svg aria-hidden="true" focusable="false" fill="none" stroke-width="1.5" width="24" class="hidden sm:block icons icon-picto-mailbox" viewBox="0 0 24 24">
      <path d="M12 18.75v4.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
      <path clip-rule="evenodd" d="M21 8.25H6a3 3 0 0 0-3 3V18c0 .414.336.75.75.75H21V8.25Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
      <path d="M15 11.25V.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
      <path clip-rule="evenodd" d="M15 5.25h-4.5A1.5 1.5 0 0 1 9 3.75v-1.5a1.5 1.5 0 0 1 1.5-1.5H15v4.5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
            <h2>send us equiry</h2>
         <a>info@alburhanluggage.com</a>
        </div>
    </div>
   <footer class="footer-section">
  <div class="footer-container">
    <div class="footer-column">
      <h4>NEWSLETTER</h4>
      <p>Subscribe to receive updates, access to exclusive deals, and more.</p>
      <form class="newsletter-formm">
        <input type="email" placeholder="E-mail" required />
        <button type="submit">SUBSCRIBE</button>
      </form>

    </div>

    <div class="footer-column">
      <h4>SHOP</h4>
      <ul>
        <li><a href="#">Luggage</a></li>
        <li><a href="#">Backpacks</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Kid’s Luggage</a></li>
        <li><a href="#">Travel Accessories</a></li>
        <li><a href="#">Wallets & Keychains</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>INFORMATION</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Stores</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Track Your Order</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Refund and Returns Policy</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>ABOUT COMPANY</h4>
      <p>
        For decades, Al Burhan Luggage has prided itself on design, innovation and durability in
        crafting the highest quality luggage for the experienced traveler...
      </p>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="copyright">
                 <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
      </div>
    <p>© 2025 - AL BURHAN LUGGAGE . WEBSITE BY BOHRA DEVELOPERS</p>
    </div>
 
    <div class="payment-icons">
      <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" />
      <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" alt="Mastercard" />
      <img src="https://img.icons8.com/color/48/000000/amex.png" alt="Amex" />
    </div>
  </div>
</footer>

</section>