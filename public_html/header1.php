<?php 

header("X-Content-Type-Options: nosniff");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: geolocation=(), camera=(), microphone=(), payment=()");
header("Expect-CT: enforce, max-age=30");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Amvion Labs Main Website</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-08NE0LNL5B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-08NE0LNL5B');
</script>

  <!-- Favicons -->
  <link href="https://amvionlabs.com/assets/image/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="js/jquery.timelinr-0.9.54.js"></script>

  <script>
    $(function(){
      $().timelinr({
        arrowKeys: 'true'
      });
    });
  </script>

</head>

<body>

<header id="header" class="header d-flex align-items-center justify-content-around p-2 sticky-top">
  <div class="container-fluid position-relative d-flex align-items-center justify-content-between ">

    <a href="https://amvionlabs.com/" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="assets/image/amvion-logo.svg" alt="Logo">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="https://amvionlabs.com/">Home</a></li> 
        <li><a href="https://amvionlabs.com/about-us.php">About us</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="platformsDropdown" data-bs-toggle="dropdown" aria-expanded="false">Platforms</a>

          <!-- Mega Menu -->
          <div class="dropdown-menu mega-menu p-4" aria-labelledby="platformsDropdown">
            <div class="container">
              <div class="row">
                <!-- Services Section -->
                <div class="col-lg-6 p-4">
                  <h4 style="text-decoration: underline; text-underline-offset: 10px;">Services</h4>
                  <a href="https://amvionlabs.com/service/it-security-service-provider-chennai.php"><p class="mt-4 megamenu-button"><i class="bi bi-shield-shaded fs-4"></i> Security & Cyber Assurance</p></a>
                  <a href="https://amvionlabs.com/service/it-infrastructure.php"><p class="megamenu-button"><i class="bi bi-diagram-3-fill fs-4"></i> IT Infrastructure</p></a>
                  <a href="https://amvionlabs.com/service/it-consulting.php"><p class="megamenu-button"><i class="bi bi-person-gear fs-4"></i> IT Consulting</p></a>
                  <a href="https://amvionlabs.com/service/managed-cloud-services.php"><p class="megamenu-button"><i class="bi bi-cloudy-fill fs-4"></i> Managed Cloud Service</p></a>
                  <a href="https://amvionlabs.com/service/devops-consulting.php"><p class="megamenu-button"><i class="bi bi-infinity fs-4"></i> Devops Consulting</p></a>
                  <a href="https://amvionlabs.com/service/data-science-and-ai.php"><p class="megamenu-button"><i class="bi bi-pie-chart-fill fs-4"></i> Datascience and AI</p></a>
                </div>

                <!-- Solutions Section -->
                <div class="col-lg-6 p-4">
                  <h4 style="text-decoration: underline; text-underline-offset: 10px;">Solutions</h4>
                  <div class="mt-4">
                    <a href="https://amvionlabs.com/solutions/healthcare.php"><p class="megamenu-button"><i class="bi bi-hospital-fill fs-4"></i> Healthcare</p></a>
                    <a href="https://amvionlabs.com/solutions/financial-services.php"><p class="megamenu-button"><i class="bi bi-currency-exchange fs-4"></i> Financial Services</p></a>
                    <a href="https://amvionlabs.com/solutions/retail.php"><p class="megamenu-button"><i class="bi bi-shop fs-4"></i> Retail</p></a>
                    <a href="https://amvionlabs.com/solutions/manufacturing.php"><p class="megamenu-button"><i class="bi bi-buildings-fill fs-4"></i> Manufacturing</p></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li><a href="https://amvionlabs.com/products.php">Products</a></li>
        <li><a href="https://amvionlabs.com/blogs/">Blog</a></li>
        <li><a href="https://amvionlabs.com/careers/">Career</a></li>
        <li><a href="https://amvionlabs.com/contactus.php">Contact us</a></li>
        <li><a href="https://amvionlabs.com/downloads.php">Downloads</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Initialize all dropdowns
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
  var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl);
  });

  // Get the current URL
  const currentURL = window.location.href;

  // Select all the navigation links
  const navLinks = document.querySelectorAll(".navmenu a");

  // Loop through the links and apply the 'active' class to the current page link
  navLinks.forEach(link => {
    if (link.href === currentURL) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});
</script>

</body>
</html>
