
<?php 

header("X-Content-Type-Options: nosniff");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: geolocation=(), camera=(), microphone=(), payment=()");
header("Expect-CT: enforce, max-age=30");

?>
<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Amvion Labs Main Website</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="https://amvionlabs.com/assets/image/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="js/jquery.timelinr-0.9.54.js"></script>
  <script>
    $(function(){
    			$().timelinr({
    				arrowKeys: 'true'
    			})
    		});
  </script>

</head>

 <header id="header" class="header d-flex align-items-center justify-content-around p-2 sticky-top">
 <div class="container-fluid position-relative d-flex align-items-center justify-content-between ">

   <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
<img src="assets/image/amvion-logo.svg" alt="">
     <span>.</span>
   </a>

   <nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="https://amvionlabs.com/" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
    <li><a href="https://amvionlabs.com/about-us.php" class="<?= $current_page == 'about-us.php' ? 'active' : '' ?>">About us</a></li>
    <li class="nav-item dropdown">
    <a href="#services" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Platforms</a>
    
    <!-- Mega Menu -->
    <div class="dropdown-menu mega-menu p-4">
        <div class="container">
            <div class="row">
                <!-- Services Section -->
                <div class="col-lg-6 p-4">
                    <h4 style="text-decoration: underline; text-underline-offset: 10px; ">Services</h4>
                   <a href="https://amvionlabs.com/service/it-security-service-provider-chennai.php"> <p class="mt-4 megamenu-button"><i class="bi bi-shield-shaded fs-4" ></i>  Security & Cyber Assurance</p></a>
                    <!-- <div style="margin-left: 40px" class="mt-2">
                    <a href="">  <p class="megamenu-content"> <span class="text-white">E</span>ndpoint Protection Services</p></a>
                      <a href="">   <p class="megamenu-content"> 	<span class="text-white">S</span>ecurity Operations Centre – SOC</p></a>
                        <a href=""> <p class="megamenu-content">	<span class="text-white">S</span>ecurity Consulting Services</p></a>
                         <a href=""><p class="megamenu-content">	<span class="text-white">C</span>yber Brand Monitoring Services.</p></a>
                        </div>    
                          -->
                   <a href="https://amvionlabs.com/service/it-infrastructure.php"> <p class="megamenu-button"><i class="bi bi-diagram-3-fill fs-4"></i> &nbsp; IT Infrastructure</p></a>
                    <a href="https://amvionlabs.com/service/it-consulting.php"><p class="megamenu-button"><i class="bi bi-person-gear fs-4"></i>&nbsp; IT Consulting</p></a>
                  <a href="https://amvionlabs.com/service/managed-cloud-services.php">  <p class="megamenu-button"><i class="bi bi-cloudy-fill fs-4"></i>&nbsp; Managed Cloud Service</p></a>
                  <a href="https://amvionlabs.com/service/devops-consulting.php">  <p class="megamenu-button"><i class="bi bi-infinity fs-4"></i>&nbsp; Devops Consulting</p></a>
                   <a href="https://amvionlabs.com/service/data-science-and-ai.php"> <p class="megamenu-button"><i class="bi bi-pie-chart-fill fs-4"></i>&nbsp; Datascience and AI</p></a>
                </div>
                <!-- Solutions Section -->

        
                <div class="col-lg-6 p-4">
                    <h4 style="text-decoration: underline; text-underline-offset: 10px; ">Solutions</h4>
                    <div class="mt-4">
                    <a href="https://amvionlabs.com/solutions/healthcare.php"> <p class="megamenu-button"><i class="bi bi-hospital-fill fs-4"></i> &nbsp; Healthcare </p></a>
                    <a href="https://amvionlabs.com/solutions/financial-services.php"> <p class="megamenu-button"><i class="bi bi-currency-exchange fs-4"></i> &nbsp; Financial Services </p></a>
                    <a href="https://amvionlabs.com/solutions/retail.php"> <p class="megamenu-button"><i class="bi bi-shop fs-4"></i> &nbsp; Retail   </p></a>
                    <a href="https://amvionlabs.com/solutions/manufacturing.php"> <p class="megamenu-button"><i class="bi bi-buildings-fill fs-4"></i> &nbsp; Manufacturing </p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
    <li><a href="https://amvionlabs.com/products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Products</a></li>
    <li><a href="https://amvionlabs.com/blogs/" class="<?= $current_page == 'blog.html' ? 'active' : '' ?>">Blog</a></li>
    <li><a href="#https://amvionlabs.com/careers/" class="<?= $current_page == '#team' ? 'active' : '' ?>">Career</a></li>
    <li><a href="https://amvionlabs.com/contactus.php" class="<?= $current_page == 'contactus.php' ? 'active' : '' ?>">Contact us</a></li>
    <li><a href="https://amvionlabs.com/downloads.php" class="<?= $current_page == 'downloads.php' ? 'active' : '' ?>">Downloads</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
  

 </div>
</header>