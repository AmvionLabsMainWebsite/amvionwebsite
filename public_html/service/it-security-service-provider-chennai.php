<?php include '../header.php'?>

    <div class="container-fluid bg-light">
        <div class="row">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">services</li>    
  </ol>
</nav>
</div>
</div>

<div>
  <img src="1.svg" alt="" class="floating" style="position: absolute; right: 40px; z-index: -2;">
  
</div>

        <div class="container-fluid  p-4">
            <div class="row">
                <div class="col-lg-6 p-4">
                    <h1 style="font-size: 4rem;">Securing Your Digital World, One Layer at a Time </h1>
                 <p>Protect, monitor, and fortify your IT infrastructure with cutting-edge security solutions tailored to your needs. </p>
                 <?php include '../popupform.php'?>
                </div>
                <div class="col-lg-6 p-4">
                    <img src="it-security.png" alt="" width="80%" height="100%" class="img-fluid mx-auto d-block">
                    <img src="2.svg" alt="" id="myDIV" style="position: absolute; top:520px;  left: 560px;   z-index: -2;">
                </div>
            </div>
        </div>


    <div class="container-fluid bg-light mt-4" style="position: sticky; top: 11%; z-index: 1; ">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-8 d-flex justify-content-around align-items-center mt-3">
                        <p>Overview</p>
                        <p>DRP</p>
                        <p>End Point Protection Services</p>
                        <p>Security operation Center</p>
                        <p>Cyber Security Services</p>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end gap-4 align-items-center">
                       <a href="https://amvionlabs.com/contactus.php"> <button class="get-started">Contact us</button></a>
                       <a href="https://calendly.com/business-amvionlabs/enquery-meeting"><button class="get-started">Book a Consultation</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
            
                <div class="col-lg-6">
                    <h2>Amvion IT Security Services  </h2>
                    <p>The mission of Amvion is to deliver meticulous IT security services that keep your business secure in an ever-changing digital environment. As a leading IT security services company, we provide bespoke IT security solutions tailored directly to your requirements so that your business can stay resilient to cyber risks. 
                    </p>
                </div>
                <div class="col-lg-6">
                 <img src="security-banner-1.png" alt="" width="80%" height="100%" class="img-fluid mx-auto d-block" style="z-index: 2;">
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light p-4">
    <div class="row">
        <!-- <h2 class="text-center mt-4">Amvion Security in Numbers</h2> -->

        <div class="col-lg-3 mt-4">
            <h2 id="counter1" style="font-size: 4rem;">0</h2>
            <p>years of experience in IT Security Services</p>
        </div>

        <div class="col-lg-3 mt-4">
            <h2 id="counter2" style="font-size: 4rem;">0+</h2>
            <p>cybersecurity professionals</p>
        </div>

        <div class="col-lg-3 mt-4">
            <h2 id="counter3" style="font-size: 4rem;">0+</h2>
            <p>active client engagements around the world</p>
        </div>

        <div class="col-lg-3 mt-4">
            <h2 id="counter4" style="font-size: 4rem;">0%</h2>
            <p>satisfaction in IT security risk</p>
        </div>
    </div>
</div>


    </section>


    <style>
    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 300px; /* Define a height */
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background: linear-gradient(90deg, rgba(49,188,219,1) 0%, rgba(5,46,122,1) 35%, rgba(223,102,2,1) 90%);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<section>
    <div class="container">
        <div class="row text-center">
            <h2>Our Capabilities</h2>
            <div class="col-lg-4 col-md-6 mt-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front p-2 ">
                            <h3 class="text-white">Cyber Risk Management</h3>
                        </div>
                        <div class="flip-card-back p-2">
                            <p>1. The proactive tracking and mitigation of cyber threats.</p>
                            <p>2. Continuous detection of threats and risks. </p> 
                            <p>3. Strategic advice for creating a stronger security posture for your organisation. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front p-2">
                            <h3 class="text-white">Advanced Threat Detection</h3>
                        </div>
                        <div class="flip-card-back p-2">
                            <p>1. Real-time monitoring and alert management systems.   </p>
                            <p>2. AI-driven threat analysis as a mechanism of early detection.     </p> 
                            <p>3. Risk response planning for serious incidents.    </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front p-2">
                            <h3 class="text-white">Compliance & Governance</h3>
                        </div>
                        <div class="flip-card-back p-2">
                            <p>1. Ensure compliance with your industry regulations and standards. </p> 
                            <p>2. Customisable frameworks for compliance implementation.</p> 
                            <p>3. Regular compliance assessments and audits that enable you to improve your processes continuously. </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
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
  transition: 1s;
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
  transition: 0.5s;
  margin-top: 0;
}

#card-container  .card-box:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;
  
}


</style>


<section data-aos="zoom-in">
  <h2 class="text-center fs-1">
  IT Security Services Offered

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
      <h3 class="mt-4">Endpoint Protection Services</h3>
      <p>Secure all your devices from malware, ransomware, unauthorized access </p>
      <a href="#">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/IT-infra.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Security Operations Centre – SOC  </h3>
       <p>Our 24/7 SOC monitors and responds to security incidents in real-time </p>
      <a href="#">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/IT-Consulting.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Cyber Security Products/Services </h3>
   <p>We offer cybersecurity solutions like firewalls and vulnerability assessments </p>
      <a href="#">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/Cloud.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">  Digital Risk <br> Protection </h3>
      <p>Our Digital Risk Protection solution identifies and eliminates any risks </p>
      <a href="#">Learn More</a>
    </div>
  </div>
  </div>

  
  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/Cloud.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Need Our <br> Services?</h3>
      <p class="p-1">Contact us for best services with quality support.</p>
      <a href="#">Learn More</a>
    </div>
  </div>
  </div>


</div>
</div>

</section>

<section>
    <div class="container-fluid bg-light p-4" style="background: url(1.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="row">
            <div class="col-lg-6">
                <h3 class=" text-white mt-4">IT Security Solutions </h3>
                <p class=" text-white">At Amvion, we provide advanced IT security solutions tailored to meet the specific needs of your organization. Our solutions are designed to be scalable, efficient, and effective in mitigating risks and ensuring compliance. </p>
              
            </div>
            <div class="col-lg-6">
              <div class="shadow p-3 mb-3 bg-white rounded">
                <h3>Advanced Threat Detection</h3>
                <p> Through advanced tools using AI and Machine learning, we monitor and neutralize threats in real time. </p>
              </div>

              <div  class="shadow p-3 mb-3 bg-white rounded">
                <h3>Identity and Access Management</h3>
                <p>  Managing information protection to ensure only the right personnel have the access to sensitive and protected information. </p>
              </div>

              <div class="shadow p-3 mb-3 bg-white rounded">
                <h3>Cloud Security</h3>
                <p> Providing assurance that your cloud infrastructure is secure from breaches and risks to your data. </p>
              </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid  p-4">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <h2>Benefits of Our IT Security Services</h2>
                <p>Using our IT security service from Amvion will bring you many organizational benefits</p>
            </div>
            <div class="col-lg-8">
             <div class="row">
                <div class="col-lg-6 d-flex justify-content-start align-items-start gap-2 p-3" style=""><div><img src="services-icon/cyberthreats.svg" alt="n" width="88%" height="88%"></div><div><p>Improvements in protecting against the constantly changing cyber threats.</p> </div> </div>
                <div class="col-lg-6 d-flex justify-content-start align-items-start p-3"><div><img src="services-icon/complaince.svg" alt="" width="70%" height="70%"></div><div><p>Compliance risks are managed and mitigated early.</p></div> </div>
                <div class="col-lg-6 d-flex justify-content-start align-items-start gap-2 mt-4 p-3"><div><img src="services-icon/cost-savings.svg" alt="" width="88%" height="88%"></div><div><p>Operational cost savings increase with the use of our managed service. </p></div> </div>
                <div class="col-lg-6 d-flex justify-content-start align-items-start gap-2 mt-4 p-3"><div><img src="services-icon/bussiness-growth.svg" alt="" width="88%" height="88%"></div><div><p>Solutions that provide scalability with your business growth and threats, so the IT security posture is overall still effective.</p></div> </div>
             </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid p-4" style="background :linear-gradient(90deg, rgba(49,188,219,1) 0%, rgba(5,46,122,1) 35%, rgba(223,102,2,1) 90%)">
        <div class="row ">
            <p style="font-size: 1rem;" class="text-center text-white">Industries</p>
        <h2 class="mt-2 text-center text-white" >Building digital trust across various industries worldwide. </h2>
        <p class="mt-2 text-center text-white">With extensive global experience, our cybersecurity expertise covers a vast range of industries. </p>

        <div class="d-flex justify-content-around align-items-center mt-4"> 
        <div class=" shadow-sm p-3 mb-5 bg-white rounded text-center industries-button" style="width: 31%;"><h5 class="industries-tag">Financial Services </h5></div>
            <div class=" shadow-sm p-3 mb-5 bg-white rounded text-center industries-button"  style="width: 31%;"><h5 class="industries-tag">Manufacturing </h5></div>
            <div class=" shadow-sm p-3 mb-5 bg-white rounded text-center industries-button"  style="width: 31%;"><h5 class="industries-tag">Retail/E-commerce </h5></div>
        </div>

        <div class="d-flex justify-content-around align-items-center">
            <div class=" shadow-sm p-3 mb-5 bg-white rounded text-center industries-button"  style="width: 31%;"><h5 class="industries-tag">Public Services </h5></div>
            <div class=" shadow-sm p-3 mb-5 bg-white rounded text-center industries-button"  style="width: 31%;"><h5 class="industries-tag">Education </h5> </div>
            <div class=" shadow-sm p-3 mb-5 bg-white rounded text-center industries-button"  style="width: 31%;"><h5 class="industries-tag">Life Sciences & Healthcare </h5></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-4">
        <div class="row">
        <div>
    <img src="bg.svg" alt="" width="80%" height=80% style="position: absolute; left: -340px;">
</div>
            <div class="col-lg-6 d-flex">
                <img src="security-chose.png" alt="" width="80%" height="70%" style="z-index: 2;">
            </div>
            <div class="col-lg-6">
            <h2>Why Choose Amvion Security Services? </h2>

            <h4 class="mt-4"><i class="bi bi-vinyl-fill"></i>&nbsp; Expertise and Experience</h4>
             <p>Our security professionals have years of experience delivering innovative, effective solutions for protecting your digital assets. </p>

             <h4><i class="bi bi-vinyl-fill"></i>&nbsp; Comprehensive Solutions</h4>
             <p>Amvion offers a complete range of IT security solutions, from digital risk protection to endpoint protection. </p>

             <h4><i class="bi bi-vinyl-fill"></i>&nbsp; Proactive Approach</h4>
             <p>If you engage us as your IT security consultant to proactively manage risk, we have the experience and capability to anticipate risk and mitigate issues before they occur. </p>

             <h4><i class="bi bi-vinyl-fill"></i>&nbsp; A Trusted Partner</h4>
             <p>Hundreds of businesses trust Amvion to manage their security, all because we deliver on our promise of excellence and customer satisfaction. </p>

             <h4><i class="bi bi-vinyl-fill"></i>&nbsp; Customized Solutions</h4>
             <p>We recognize that not all businesses are the same, so we provide customized solutions tailored to your needs. </p>
            </div>
        </div>
    </div>
</section>

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
            <div class="p-4" style="background-image: url('../assets/image/blog-1.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;" alt="it-security-governance">
    <p class="text-black mt-4" style="font-size: 13px; visibility: hidden;">Imagine running a business where <br> critical data is constantly at risk, but you’re not <br> sure how to protect it.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
  <a href="https://amvionlabs.com/blogs/identify-mitigate-insider-information-security-threats.php" class="blogimages">
  <div class="p-4" style="background-image: url('../assets/image/blog-2.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;" alt="how-to-identify-and-mitigate-insider-information-security-threats">
    <p class="text-black mt-4 py-4" style="font-size: 13px; visibility: hidden;">Picture this: your organization’s greatest threat <br> isn’t external hackers but your own employees.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
<a href="https://amvionlabs.com/blogs/top-it-security-issues-2024-protect-business.php" class="blogimages">
  <div class="p-4" style="background-image: url('../assets/image/blog-3.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;">
    <p class="text-black mt-4 py-4" style="font-size: 13px; visibility: hidden;">As technology continues to evolve, <br> so too do the attempts at cybersecurity threats.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
  <div class="p-4 d-flex justify-content-center align-items-center blog-read-more">
    <a href="https://amvionlabs.com/blogs/" class="fs-3">READ MORE <br> <i class="bi bi-arrow-right-circle-fill"></i></a>
  </div>
</div>
               
            </div>
            <div class="d-flex justify-content-end">
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
<style>
    

.container-faq {
  
  padding: 4rem; 
}

.accordion-faq .accordion-item {
  border-bottom: 1px solid #000000;
}

.accordion-faq .accordion-item button[aria-expanded='true'] {
  border-bottom: 1px solid #000000;
}

.accordion-faq button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #000000;
  font-size: 1.4rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}

.accordion-faq button:hover,
.accordion-faq button:focus {
  cursor: pointer;
  color: #03b5d2;
}

.accordion-faq button:hover::after,
.accordion-faq button:focus::after {
  cursor: pointer;
  color: #03b5d2;
  border: 1px solid #03b5d2;
}

.accordion-faq button .accordion-title {
  padding: 1em 1.5em 1em 0;
}

.accordion-faq button .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 0;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
}

.accordion-faq button .icon::before {
  display: block;
  position: absolute;
  content: '';
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}
.accordion-faq button .icon::after {
  display: block;
  position: absolute;
  content: '';
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}

.accordion-faq button[aria-expanded='true'] {
  color: #03b5d2;
}
.accordion-faq button[aria-expanded='true'] .icon::after {
  width: 0;
}
.accordion-faq button[aria-expanded='true'] + .accordion-content {
  opacity: 1;
  max-height: 9em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}
.accordion-faq .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}
.accordion-faq .accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
}

</style>
<section>
    <div class="container">
        <div class="row">
            
    <div class="col-lg-12">
    <div class="container-faq">
    <h2 class="text-center">FAQ's</h2>
      <div class="accordion-faq">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">What is an IT security service? </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            IT Security services encompass a series of solutions and practices that protect an 
            organization’s digital assets, including data, networks and systems from cyber risk.
             IT security services can provide protection from firewalls, and DDoS protection to malware
              protection and incident response. In sum, the purpose of IT security services is to protect
               against unauthorized access, data breaches, and other security risks.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">What steps can be taken to secure my business from cyber risk? </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Organizations with a complete IT security strategy will have security in the form of 
            firewalls, malware prevention and detection systems, intrusion detection systems, continuous
             up-to-date software, and employee training and information. Organizations may also have 
             layers of protection through the use of data encryption and data loss prevention systems.
              Each layer of protection contributes to securing the organization from various cyber 
              security threats, including phishing and ransomware attacks, to name a few.

            </p>
          </div>
        </div>

        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">What types of IT security solutions can I use to secure sensitive data? </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            There are various IT security solutions ranging from simple network security tools and 
            firewall, including VPNs, to endpoint protection, identity and access management, and data
             loss prevention systems to name a few. All solutions will have the goal of protecting 
             sensitive information from unauthorized disclosures to breaches to account takeovers and, 
             more generally, any operational security risk. 
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">What actions can a company take in order to be compliant with industry regulations and security standards?  </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            In general, the ability to be compliant with industry regulations is reliant on a 
            combination of IT security policies, regular audits, employee training, and use of 
            security technologies adhering to industry regulations. Many companies use third party 
            specialists in assessing their IT security and determining whether compliance has been 
            established.

            </p>
          </div>
        </div>

        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">Can IT security services be customized to my organization?  </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Yes, IT security services can certainly be customized to consider the unique needs of your 
            organization. Customized security services are obtained based on the specific industry your 
            business operates within, organizational size, risk exposure, current technologies, and 
            existing security protocols and infrastructure to create a robust plan to meet your unique 
            security needs. 


            </p>
          </div>
        </div>

        <!-- The sixth accordion item -->
        <div class="accordion-item">
          <button id="accordion-button-6" aria-expanded="false">
            <span class="accordion-title">What steps are involved in implementing comprehensive IT security solutions?  </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Generally, comprehensive IT security solutions will entail reviewing your current security 
            commodity, discovering security holes, and then developing a security plan based on what 
            security technologies and security policy are appropriate for your organization. The process
             includes the installation of solutions, employee training and then follow-up and maintenance
              processes regarding the installations and addressing any future security needs.  

            </p>
          </div>
        </div>
      </div>
      
    </div>

    </div>
        </div>
    </div>
</section>

<script>
    const items = document.querySelectorAll('.accordion-faq button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));




</script>
<?php include '../footer.php'?>