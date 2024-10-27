

<?php include 'header.php';?>


<body class="index-page">


 <?php include "homepagepopup.php"?>
  <main class="main" class="cursor">

    <!-- Hero Section -->

      <div class="container-fluid p-4" id="" data-aos="zoom-out" style="background-image: url(assets/image/home-bg.svg); background-repeat: no-repeat; background-size: cover; height: 100vh;">
        <div class="row">
       

        <div class="col-lg-6 mt-4 ml-4">
          <br><br><br>
        <h1 class="text-white " style="font-size: 3rem;">Trust and Leadership in IT industry and IT innovation        </h1>
        <p class="text-white fs-3 mt-2" >Partner for technology adoption
        </p>
        <p class="text-white">Drive your business forward with tailored IT solutions, maintained by experts, built to meet the demands of a tomorrow.
        </p>
        <div class="d-flex gap-4">
          <a href="https://amvionlabs.com/contactus.php" class="get-started scrollto mt-4">Get Started <i class="bi bi-arrow-right-short"></i></a>
          <a href="https://calendly.com/meeting-schedule-amvionlabs/enquery-meeting" class="get-started scrollto mt-4">Book a Demo <i class="bi bi-arrow-right-short"></i></a>
          <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span class="text-white">Watch Video</span></a> -->
        </div>
        </div>

        <div class="col-lg-6">
          
          <!-- <img src="assets/img/hero-img.svg" class="img-fluid mx-auto d-block animated" width="100%" height="100%" alt=""> -->
  
          </div>
        </div>
      
      </div>

   




    <section>
<div class="container-fluid" data-aos="zoom-in">
  <div class="row justify-content-center">
    <div class="col-lg-2 counter-box p-4 m-2">
      <h2 class="counter" data-target="100" style="font-size: 3rem">0</h2>
      Satisfied Clients
    </div>
    <div class="col-lg-2 counter-box p-4 m-2">
      <h2 class="counter" data-target="8" style="font-size: 3rem">0</h2>
      Years of Experience
    </div>
    <div class="col-lg-2 counter-box p-4 m-2">
      <h2 class="counter" data-target="250" style="font-size: 3rem">0</h2>
      Employees
    </div>
    <div class="col-lg-2 counter-box p-4 m-2">
      <h2 class="counter" data-target="5" style="font-size: 3rem">0</h2>
      State of art products
    </div>
    <div class="col-lg-2 counter-box p-4 m-2">
      <h2 class="counter percentage" data-target="96" style="font-size: 3rem">0</h2>
      Client Satisfaction Rate
    </div>
  </div>
</div>




</section>

<script>
const animateCounters = () => {
  const counters = document.querySelectorAll('.counter');
  
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    let count = +counter.innerText.replace('+', '').replace('%', ''); // Remove any existing symbols
    const increment = target / 100; // Increment for smooth animation
    
    const updateCount = () => {
      if (count < target) {
        count = Math.ceil(count + increment);
        if (counter.classList.contains('percentage')) {
          counter.innerText = count + '%'; // Add the % symbol for the percentage counter
        } else {
          counter.innerText = count + '+'; // Add the + symbol for other counters
        }
        setTimeout(updateCount, 30); // Animation delay
      } else {
        if (counter.classList.contains('percentage')) {
          counter.innerText = target + '%'; // Final value with %
        } else {
          counter.innerText = target + '+'; // Final value with +
        }
      }
    };
    
    updateCount();
  });
};

animateCounters();

</script>



<style>
.wrapper {
  margin: 1rem;
  width: 90%;
  max-width: 1536px;
  margin-inline: auto;
  height: 70px;
  position: relative;
  overflow: hidden;
  mask-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 1) 20%,
    rgba(0, 0, 0, 1) 80%,
    rgba(0, 0, 0, 0)
  );
}

@keyframes scrollLeft {
  to {
    left: -250px; /* Increased to create space between images */
  }
}

@keyframes scrollRight {
  to {
    right: -250px; /* Increased to create space between images */
  }
}

.itemLeft,
.itemRight {
  width: 150px; /* Reduce width to create space */
  height: 80px;
  margin-right: 15px; /* Add space between items */
  border-radius: 6px;
  position: absolute;
  animation-timing-function: linear;
  animation-duration: 60s; /* Increase duration to slow down the animation */
  animation-iteration-count: infinite;
}

.itemLeft {
  left: max(calc(200px * 8), 100%);
  animation-name: scrollLeft;
}

.itemRight {
  right: max(calc(200px * 8), calc(100% + 200px));
  animation-name: scrollRight;
}

/* Adjust animations to ensure proper spacing between items */
.item1 { animation-delay: calc(60s / 12 * (12 - 1) * -1); } /* Increased to match slower speed */
.item2 { animation-delay: calc(60s / 12 * (12 - 2) * -1); }
.item3 { animation-delay: calc(60s / 12 * (12 - 3) * -1); }
.item4 { animation-delay: calc(60s / 12 * (12 - 4) * -1); }
.item5 { animation-delay: calc(60s / 12 * (12 - 5) * -1); }
.item6 { animation-delay: calc(60s / 12 * (12 - 6) * -1); }
.item7 { animation-delay: calc(60s / 12 * (12 - 7) * -1); }
.item8 { animation-delay: calc(60s / 12 * (12 - 8) * -1); }
.item9 { animation-delay: calc(60s / 12 * (12 - 9) * -1); }
.item10 { animation-delay: calc(60s / 12 * (12 - 10) * -1); }
.item11 { animation-delay: calc(60s / 12 * (12 - 11) * -1); }
.item12 { animation-delay: calc(60s / 12 * (12 - 12) * -1); }


</style>

<section>
  <h2 class="text-center">Building Success Together: Trusted by Industry Leaders!</h2>
<div class="wrapper">
  <div class="itemLeft item1"> <img src="assets/image/partners/awslogo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item2"> <img src="assets/image/partners/azurelogo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item3"> <img src="assets/image/partners/cisco-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item4"> <img src="assets/image/partners/cyberark.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item5"> <img src="assets/image/partners/cysecurity-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item6"> <img src="assets/image/partners/fortinet-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item7"> <img src="assets/image/partners/HPE-Aruba-logo.svg" alt="" width="100%" height="100%"></div>
  <div class="itemLeft item8"> <img src="assets/image/partners/inp-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item9"> <img src="assets/image/partners/kaiburrLogo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item10"> <img src="assets/image/partners/Prophaze.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item11"> <img src="assets/image/partners/seqrite-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemLeft item12">  <img src="assets/image/partners/Zerosec-logo.svg" alt="" width="100%" height="100%"> </div>
</div>
<div class="wrapper">
  <div class="itemRight item1"> <img src="assets/image/partners/awslogo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item2"> <img src="assets/image/partners/azurelogo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item3"><img src="assets/image/partners/cisco-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item4"> <img src="assets/image/partners/cyberark.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item5"> <img src="assets/image/partners/cysecurity-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item6"> <img src="assets/image/partners/fortinet-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item7"> <img src="assets/image/partners/HPE-Aruba-logo.svg" alt="" width="100%" height="100%"></div>
  <div class="itemRight item8"> <img src="assets/image/partners/inp-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item9"> <img src="assets/image/partners/kaiburrLogo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item10"> <img src="assets/image/partners/Prophaze.svg" alt="" width="100%" height="100%"> </div>
<div class="itemRight item11"> <img src="assets/image/partners/seqrite-logo.svg" alt="" width="100%" height="100%"> </div>
  <div class="itemRight item12"> <img src="assets/image/partners/Zerosec-logo.svg" alt="" width="100%" height="100%"></div>
</div>
</section>

<style>

#card-container{
  position: relative;
  display: flex;
  gap: 20px;
}

#card-container .card-box{
  position: relative;
  width: 320px;
  height: 400px;
  background: #eee;
  border-radius: 20px;
  overflow: hidden;
}

#card-container .card-box:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, rgba(49,188,219,1) 0%, rgba(5,46,122,1) 35%, rgba(223,102,2,1) 90%);
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

 #card-container .card-box:hover:before{
  clip-path: circle(300px at 80% -20%);
}

#card-container  .card-box:after{
  content: 'Nike';
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(255,255,25,0.05)
}

#card-container  .card-box .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
 
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

#card-container .card-box:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
  
}

#card-container  .card-box .imgBx img{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(0deg);
  width: 270px;
}

#card-container  .card-box .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 0.7s;
  z-index: 10;
}

#card-container  .card-box:hover .contentBx{
  height: 210px;
}

#card-container  .card-box .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  margin-top: 10px;
}


#card-container  .card-box .contentBx .size h3, #card-container  .card-box .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}


#card-container  .card-box .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: linear-gradient(90deg, rgba(49,188,219,1) 0%, rgba(5,46,122,1) 35%, rgba(223,102,2,1) 90%);
  border-radius: 4px;
  margin-top: 10px;
  text-decoration: none;
  font-weight: 600;
  color: #fff;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.2s;
  margin-top: 0;
}

#card-container  .card-box:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.3s;
  
}


</style>


<section data-aos="zoom-in">
  <h2 class="text-center fs-1">
  Services We Offer
  </h2>
  <p class="text-center">
  Explore our core services designed to drive your success.

  </p>
  <div class="container" id="card-container">
    <div class="row">
      <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
      <img src="assets/image/home-page-service-logo/Security.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Security and Cyber Assurance</h3>
      <p>Protect your business with top-tier cybersecurity strategies</p>
      <a href="https://amvionlabs.com/service/it-security-service-provider-chennai.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/IT-infra.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">IT <br> Infrastructure</h3>
       <p style="font-size: 0.8rem">Optimize your infrastructure for high performance and reliability, development, maintanence and customize software</p>
      <a href="https://amvionlabs.com/service/it-infrastructure.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/IT-Consulting.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">IT /<br>AI</h3>
   <p>Maximize efficiency with our tailored IT Consulting Services</p>
      <a href="https://amvionlabs.com/service/it-consulting.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/Cloud.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Managed Cloud Service</h3>
      <p>Simplify cloud journey with comprehensive cloud management </p>
      <a href="https://amvionlabs.com/service/managed-cloud-services.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/Devops.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">DevOps <br> Consulting</h3>
      <p>Accelerate your software delivery with DevOps.</p>
      <a href="https://amvionlabs.com/service/devops-consulting.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/Data-Analytics.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Data Sciences <br> Analytics</h3>
     <p>Harness the power of data with our AI-driven analytics.</p>
      <a href="https://amvionlabs.com/service/data-science-and-ai.php">Learn More</a>
    </div>
  </div>
  </div>
</div>
</div>

</section>




  


   <section>
    <div class="container-fluid p-4" style="background-color: #1e4289; color: #fff;" data-aos="zoom-in">
    <div class="row">
    <div class="text-center">
    <p>Why Choose us</p>
       <!-- <h2 class="text-white">Amvion's Threat Intelligence</h2> -->
       <p style="padding-left: 70px; padding-right: 70px; font-weight: 300;">Your Strategic Partner in Digital Transformation and Innovation</p>
        <!-- <h3 class="text-white">File | Web</h3> -->
       </div>   

       <div class="row justify-content-center mt-4">
       <div class="col-md-5">
      <h4 class="text-white">Certified Security Experts</h4>
      <p class="fw-light">Recognized Bug Bounty winners and hall-of-fame awardees from Facebook and Google.</p>
    </div>
    <div class="col-md-5">
      <h4 class="text-white">24/7 Threat Monitoring</h4>
      <p class="fw-light">With real-time insights from four top threat intelligence labs, protecting over <strong>40,000+ endpoints</strong> globally.</p>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-5">
      <h4 class="text-white">AI & ML-Powered Threat Defense</h4>
      <p class="fw-light">Proactively detect and neutralize threats with deep AI-driven security.</p>
    </div>
    <div class="col-md-5">
      <h4 class="text-white">Managed DevSecOps Services</h4>
      <p class="fw-light">Secure and accelerate your development with our integrated DevSecOps approach.</p>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-5">
      <h4 class="text-white">Expert Advisory & Support</h4>
      <p class="fw-light">Tailored consulting to meet your unique business challenges.</p>
    </div>
    <div class="col-md-5">
      <h4 class="text-white">Real-Time Monitoring & Response</h4>
      <p class="fw-light">Immediate threat detection and mitigation for continuous protection.</p>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-5">
      <h4 class="text-white">Customized Solutions</h4>
      <p class="fw-light">Flexible and scalable IT solutions tailored specifically to your business needs.</p>
    </div>
    <div class="col-md-5">
      <h4 class="text-white">Cyber Forensics & Investigations</h4>
      <p class="fw-light">Advanced investigation services for detailed analysis and resolution of security breaches.</p>
    </div>

<div class="mt-4 text-center ">
<a href="#formscroll" class="get-started scrollto">Get Started <i class="bi bi-arrow-right-short"></i> </a>

</div>

    </div>
    </div>
   </section>


   <section class="testimonials-section py-5" >
    <div class="container-fluid" data-aos="zoom-in">
      <h2 class="text-center mb-4">What Our Clients Say <span class="text-primary">About Us</span></h2>
      <p class="text-center mb-5">Explore our proven expertise and ability to deliver results through a diverse range of testimonials spanning across industries and unique requirements.</p>
      
      <!-- Testimonial Slider -->
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-lg-1"></div>
              <div class="col-lg-10 col-md-6 mb-4">
                <div class="card h-100 w-100 ">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <!-- <img src="assets/img/team/team-1.jpg" alt="Niels Fache" class="rounded-circle me-3" width="50"> -->
                      <div>
                        <h5 class="mb-0">Quintessence Business Solutions & Services</h5>
                        <p class="mb-0">Ragavan. J, IT Head – QBSS.</p>
                      </div>
                      <img src="assets/image/qbss.png" alt="Keysight Logo" class="ms-auto" width="100">
                    </div>
                    <p class="card-text">Amvion Labs has been a great help to our cybersecurity needs. They keep a close eye on our systems and respond quickly to any issues, making us feel safe. Their team is both smart and dedicated to keeping us secure online. They work hard to stay ahead of cyber threats, and Amvion should be considered one of the key cybersecurity companies in Chennai.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-1"></div>
              
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-lg-1"></div>
              <div class="col-lg-10 col-md-6 mb-4">
                <div class="card h-100 ">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <!-- <img src="assets/img/team/team-3.jpg" alt="Testimonial 3" class="rounded-circle me-3" width="50"> -->
                      <div>
                        <h5 class="mb-0">G Balu Associates LLP</h5>
                        <p class="mb-0">Raja Gopalan B , Director - G Balu Associates.</p>
                      </div>
                      <img src="assets/image/gbalullp.jpeg" alt="Company Logo" class="ms-auto" width="100">
                    </div>
                    <p class="card-text">Amvion Labs has transformed our organization with its comprehensive range of services, including Network Security, cloud-based security solutions, AWS storage, IT infrastructure management, etc. Their expertise and commitment have significantly improved our security, efficiency, and productivity. We highly recommend Amvion Labs as an invaluable partner in achieving our business goals.</p>
                  </div>
                </div>
              </div>
           <div class="col-lg-1"></div>
             
            </div>
          </div>

        </div>




        <!-- Carousel Controls -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->

        <!-- Indicators -->
         <br><br>
        <div class="carousel-indicators mt-4" >
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active mt-4" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class=" mt-4" aria-label="Slide 2" ></button>
        </div>
      </div>
    </div>
  </section>

  <!-- <section>
  <div class="container-fluid " >
    <div class="row">
      <div style="background: linear-gradient(90deg, rgba(223,102,2,1) 0%, rgba(5,46,122,1) 35%, rgba(49,188,219,1) 90%); height: 30vh; ">
       <h2 class="text-white d-flex  mt-4" >Our partners</h2>
       </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-8" style="margin-top: -80px; ">
 <div class="row  p-4 text-center" style="border-radius: 5px; background-color: #ffffff;" >
  <div class="col-lg-4"> <img src="assets/img/clients/client-4.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4"> <img src="assets/img/clients/client-1.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4"> <img src="assets/img/clients/client-2.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4 " style="margin-top: 40px;"> <img src="assets/img/clients/client-3.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4 " style="margin-top: 40px;"> <img src="assets/img/clients/client-4.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4 " style="margin-top: 40px;"> <img src="assets/img/clients/client-5.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4 " style="margin-top: 40px;"> <img src="assets/img/clients/client-4.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4 " style="margin-top: 40px;"> <img src="assets/img/clients/client-5.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
  <div class="col-lg-4 " style="margin-top: 40px;"> <img src="assets/img/clients/client-1.png" alt="Other Company Logo" class="ms-auto" width="100"></div>
 </div>

      </div>
      <div class="col-lg-2 "></div>
    </div>
  </div>
</section> -->



<section>
  <div class="container-fluid bg-light text-center" style="padding: 4rem;" data-aos="zoom-in">
    <div class="row">
      <h2 class="text-center mt-4" style="font-size: 40px">Amvion's Newsletter</h2>
      <p class="mt-4">Sign up to our newsletter and get latest update on email !!!</p>
    
<?php include 'home-newsletter.php'?>
  
    </div>
  </div>
</section>

<section>
  <div class="container " data-aos="zoom-in">
    <div class="row">
      <h2 class="text-center" style="font-size: 40px">Awards</h2>
      <div class="col-lg-1"></div>
      <div class="col-lg-2 mt-4"><img src="assets/img/awards/award-1.jpeg" alt="" width="100%" height="100%"></div>
      <div class="col-lg-2 mt-4"><img src="assets/img/awards/award-2.jpeg" alt="" width="100%" height="100%"></div>
      <div class="col-lg-2 mt-4"><img src="assets/img/awards/award-3.jpeg" alt="" width="100%" height="100%"></div>
      <div class="col-lg-2 mt-4"><img src="assets/img/awards/award-4.jpeg" alt="" width="100%" height="100%"></div>
      <div class="col-lg-2 mt-4"><img src="assets/img/awards/award-5.jpeg" alt="" width="100%" height="100%"></div>
      <div class="col-lg-1"></div>

      <div class="mt-4 text-center p-4">
<!-- <a href="#about" class="get-started scrollto">Get Started <i class="bi bi-arrow-right-short"></i></a> -->

</div>

    </div>
  </div>
</section>

<section>
  <div class="container bg-light p-4 " style="border-radius: 1rem;" data-aos="zoom-in">
    <div class="row ">
      <div class="col-lg-6" style="background-image: url('assets/image/fgbf.jpg'); height: 70vh; background-repeat: no-repeat; background-size: cover; ">
<div class="p-4 m-4">
       <h2 class="text-white " style="font-size: 55px; font-weight: 700;">CyberSecurity Trends 2024</h2>
       <p class="text-white">10 Emerging CyberSecurity Trends to Watch out for in 2024</p>
       </div>
      </div>

      <div class="col-lg-6">
      <h2 class="mt-4 text-center" style="font-size: 3rem;">News and Events</h2>
      <div class="row">


        <div class="col-lg-12 d-flex mt-4">
          <img src="assets/image/fgbf.jpg" width="30%" height="100%" alt="">
          <div class="mx-4">
           <h5 >What is CyberSecurity and How does it Works ?</h5>
           <a href="https://amvionlabs.com/blogs/">Read More <i class="bi bi-arrow-right-short"></i></a>
           </div>
        </div>

        <div class="col-lg-12 d-flex mt-4 ">
          <img src="assets/image/fgbf.jpg" width="30%" height="100%" alt="">
          <div class="mx-4">
           <h5 >Cloud with Aws, Azure and Google cloud</h5>
           <a href="https://amvionlabs.com/blogs/">Read More <i class="bi bi-arrow-right-short"></i></a>
           </div>
        </div>

      </div>

<div class="mt-4 text-center ">
<a href="https://amvionlabs.com/blogs/" class="get-started scrollto w-50">Get Started <i class="bi bi-arrow-right-short"></i> </a>

</div>

      </div>

    </div>
  </div>
</section>
  
<style>
  .blogimages:hover{
    opacity: 0.7;
    transition: all 0.3s ease-in-out;
   }
</style>

<section>
<div class="container-fluid p-4 bg-light" data-aos="zoom-up">
    <div class="row">
       <h2 style="font-size: 3rem;" class="mt-4">Recent Blogs</h2>
        <div class="col-lg-4 mt-4">
            <h3 class="mt-4" >Latest Insights from Amvion Labs</h3>
            <h6>Stay updated with expert insights on the latest trends in the industry.</h6>
            <p class="mt-4">Discover how our innovative solutions help businesses adapt and thrive in an ever-changing digital landscape.
            </p>
        </div>

        <div class="col-lg-8 mt-4">
            <div class="d-flex justify-content-around">
          
            <div class="scroll-container" id="cardContainer" style="display: flex; overflow: hidden; gap: 1rem; white-space: nowrap; padding-bottom: 1rem; transition: transform 0.4s ease;">
  <a href="https://amvionlabs.com/blogs/identify-mitigate-insider-information-security-threats.php" class="blogimages">
            <div class="p-4" style="background-image: url('assets/image/blog-1.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;" alt="it-security-governance">
    <p class="text-black mt-4" style="font-size: 13px; visibility: hidden;">Imagine running a business where <br> critical data is constantly at risk, but you’re not <br> sure how to protect it.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
  <a href="https://amvionlabs.com/blogs/identify-mitigate-insider-information-security-threats.php" class="blogimages">
  <div class="p-4" style="background-image: url('assets/image/blog-2.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;" alt="how-to-identify-and-mitigate-insider-information-security-threats">
    <p class="text-black mt-4 py-4" style="font-size: 13px; visibility: hidden;">Picture this: your organization’s greatest threat <br> isn’t external hackers but your own employees.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
<a href="https://amvionlabs.com/blogs/top-it-security-issues-2024-protect-business.php" class="blogimages">
  <div class="p-4" style="background-image: url('assets/image/blog-3.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;">
    <p class="text-black mt-4 py-4" style="font-size: 13px; visibility: hidden;">As technology continues to evolve, <br> so too do the attempts at cybersecurity threats.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
  <div class="p-4 d-flex justify-content-center align-items-center blog-read-more">
    <a href="https://amvionlabs.com/blogs/" class="fs-3">READ MORE <br> <i class="bi bi-arrow-right-circle-fill"></i></a>
  </div>
</div>
               
            </div>
            <div class="d-flex justify-content-end"  >
            <button id="scrollLeft" class="btn btn-light me-2 border border-3">←</button>
            <button id="scrollRight" class="btn btn-light ms-2 border border-3">→</button>
            </div>
        </div>
    </div>
</div>

<script>
    const cardContainer = document.getElementById('cardContainer');
    const scrollAmount = 300; // Adjust this value to change the scroll distance

    document.getElementById('scrollLeft').addEventListener('click', () => {
        cardContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    document.getElementById('scrollRight').addEventListener('click', () => {
        cardContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
</script>

</section>


<?php include 'formpage.php'?>

 










 



  </main>


</body>
  <?php include "footer.php"?>
  
  <head>

  
  <!-- Your code -->
</head>
</html>