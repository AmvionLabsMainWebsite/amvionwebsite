<?php include '../header.php'?>
<section>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <h1 style="font-size: 4rem;">Apply Now</h1>
            <p class="fs-4">Excited to join with us?</p>

              

        </div>

        <div class="col-lg-6"></div>
        </div>
</div>
</section>
<style>
 .recaptcha-container {
    transform: scale(0.8);  /* Adjust the scale factor to reduce size */
    transform-origin: 0 0;  /* Ensures it scales from the top-left corner */
    width: 302px;  /* Ensure the container maintains the correct width */
    height: 78px;  /* Adjust height for the scaled reCAPTCHA */
    margin-bottom: 20px;  /* Optional: Adjust if necessary */
}


</style>
<div class="container-fluid mt-4 ">
        <div class="row" style="background: linear-gradient(90deg, rgba(223,102,2,1) 0%, rgba(5,46,122,1) 35%, rgba(49,188,219,1) 90%); height: 100vh;  padding: 2rem;">
        <div class="col-lg-6 mt-4">
       <h3 class="text-white">Quick Links</h3>
          <a href="">
            <p class="mt-4 fs-4 text-white" style="text-decoration: underline; text-underline-offset: 16px;">Project Enquiry <i class="bi bi-arrow-right-short fs-4 mt-4"></i></p>
            </a>
            <a href="">
            <p class="mt-4 fs-4 text-white" style="text-decoration: underline; text-underline-offset: 16px;">Contact US <i class="bi bi-arrow-right-short fs-4 mt-4"></i></p>
            </a>

        </div>
              <div class="col-lg-6 p-4" style="background-color: #fff; padding: 10px; height: 116vh; margin-top: -80px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius: 10px;">
             
      <h2 class="text-center fs-1 mb-4" > Get in Touch with Us !</h2>
      <form id="myForm" action="employee-mail.php" method="POST" novalidate>
  <div class="mb-4">
    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
  </div>

  <div class="mb-4">
    <input type="email" class="form-control" name="email" id="email" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" data-bs-toggle="tooltip" data-bs-placement="right" title="Please enter a valid email address (e.g., example@example.com)" required>
  </div>

  <div class="mb-4 d-flex">
    <select class="form-select w-auto" name="countrycode" id="countryCode" required>
      <option value="+91">+91 (India)</option>
      <option value="+1">+1 (USA)</option>
      <option value="+44">+44 (UK)</option>
      <!-- Add more country codes as needed -->
    </select>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" pattern="\d{10}" data-bs-toggle="tooltip" data-bs-placement="right" title="Please enter a 10-digit phone number" required>
  </div>

  <div class="mb-4">
    <input type="text" class="form-control" name="experience" id="experience" placeholder="Year of experience" required>
  </div>

  <div class="mb-4">
    <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation" required>
  </div>



  <div class="mb-4">
    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Desribe how you will be a great asset to our organization" required></textarea>
  </div>


<div class="mb-3 ">
  <label for="formFile" class="form-label mx-2"  accept=".pdf, .doc, .docx" required>Attach Resume Here</label>
  <input class="form-control" type="file" name="resume" id="resume">
</div>



             <div class="recaptcha-container d-flex justify-content-around align-items-center">
              <div class="g-recaptcha " data-sitekey="6LdP7GQqAAAAAJb7Kk6hT0oikQpydwLFtFBwpRZt"></div>
              <div class="d-flex justify-content-center align-items-center mx-4">
                  <button class="get-started fs-4" style="width: 100%;">Submit</button>
                  </div>
              </div>
        </form>
              </div>
              </div>
              </div>
<script>

document.addEventListener('DOMContentLoaded', function () {
  // Initialize Bootstrap tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });

  // Form submission handling
  document.getElementById('myForm').addEventListener('submit', function (event) {
    if (!this.checkValidity()) {
      event.preventDefault(); // Prevent form submission
      event.stopPropagation(); // Stop further propagation
      alert('Please fill out all required fields correctly.');
    }

    this.classList.add('was-validated'); // Add Bootstrap validation styles
  }, false);
});

</script>
<br><br><br><br><br>
<?php include '../footer.php'?>
