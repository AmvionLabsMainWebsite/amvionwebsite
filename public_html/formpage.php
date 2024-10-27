<?php
// Fetch the current URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$requestUri = $_SERVER['REQUEST_URI'];
$currentUrl = $protocol . $host . $requestUri;

?>

<style>
 .recaptcha-container {
    transform: scale(0.8);  /* Adjust the scale factor to reduce size */
    transform-origin: 0 0;  /* Ensures it scales from the top-left corner */
    width: 302px;  /* Ensure the container maintains the correct width */
    height: 78px;  /* Adjust height for the scaled reCAPTCHA */
    margin-bottom: 20px;  /* Optional: Adjust if necessary */
}


</style>
<section id="formscroll">
  <div class="container-fluid p-4" style="background: linear-gradient(90deg, rgba(223,102,2,1) 0%, rgba(5,46,122,1) 35%, rgba(49,188,219,1) 90%); height: 71vh;  padding: 2rem;">
    <div class="row">
      <div class="col-lg-6  d-flex justify-content-center align-items-center">
        <div>
        <h2 class="text-white">8+ years in the industry</h2><br>

        <h4 class="text-white">Let’s Talk About Your Digital Future</h4>
        <p class="text-white p-2">Connect with us today to explore how Amvion can help transform your IT strategy and ensure your business’s success in the digital age.
        </p>
        <!-- <h4 class="text-white fw-bold">10M + <span class="fw-light fs-5"> lines of code</span> </h4><br>
        <h4 class="text-white fw-bold">2400 + <span class="fw-light fs-5"> projects completed</span></h4><br>
        <h4 class="text-white fw-bold">900 + <span class="fw-light fs-5"> satisfied clients</span></h4><br>
        <h4 class="text-white fw-bold">16 + <span class="fw-light fs-5"> Countries served</span></h4> -->
        </div>
      </div>

      <div class="col-lg-6" data-aos="flip-left">
        <form action="mail-send.php" method="post">
          <div class="" style="background-color: #fff; padding: 10px; height: 80vh; margin-top: -80px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius: 10px;">
             <h3 class="fw-bold mt-4 p-4">Consult with us Now</h3>
             <div class="mt-2">
              <input type="text" name="name" id="name" placeholder="Name" required class="w-75 p-2 mx-4 bg-light border border-1"> <br><br>
              <input type="email" name="email" id="email" placeholder="Email" required class="w-75 p-2 mx-4 bg-light border border-1"> <br><br>
<input type="hidden" name="url" id="url" value="<?php echo htmlspecialchars($currentUrl); ?>" required class="w-75 p-2 mx-4 bg-light border border-1"> 
              <input type="text" name="phone" id="phone" placeholder="Phone Number" required class="w-75 p-2 mx-4 bg-light border border-1"> <br><br>
             <textarea name="message" id="message" placeholder="message" class="w-75 p-2 mx-4 bg-light border border-1"></textarea><br><br>
                <div class="recaptcha-container mx-4 d-flex justify-content-around align-items-center">
              <div class="g-recaptcha " data-sitekey="6LdP7GQqAAAAAJb7Kk6hT0oikQpydwLFtFBwpRZt"></div>
              <div class="d-flex justify-content-center align-items-center mx-4">
                  <button class="get-started fs-4" style="width: 100%;">Submit</button>
                  </div>
              </div>
          
          

             
             </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>