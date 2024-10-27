<?php include '../header.php' ?>

<div class="container-fluid bg-light text-center d-flex justify-content-center align-items-center" style="height: 40vh;">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="font-size: 6rem;">Amvion's Solutions</h1>
            <a href="#formscroll"><button class="get-started">Get Quote</button></a>
        </div>
    </div>
</div>

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
  Solutions We Offer
  </h2>
  <p class="text-center">
  Explore our core Solutions designed to drive your success.

  </p>
  <div class="container" id="card-container">
    <div class="row">
      <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
      <img src="assets/image/solutions-logo/healthcare.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Healthcare</h3>
      <!--<p>Protect your business with top-tier cybersecurity strategies</p>-->
      <a href="https://amvionlabs.com/solutions/healthcare.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/solutions-logo/financialservices.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Financial Services</h3>
       <!--<p>Optimize your infrastructure for high performance and reliability</p>-->
      <a href="https://amvionlabs.com/solutions/financial-services.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/solutions-logo/retail.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Retail</h3>
   <!--<p>Maximize efficiency with our tailored IT consulting services</p>-->
      <a href="https://amvionlabs.com/solutions/retail.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/solutions-logo/manufacturing.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Manufacturing</h3>
      <!--<p>Simplify cloud journey with comprehensive cloud management </p>-->
      <a href="https://amvionlabs.com/solutions/manufacturing.php">Learn More</a>
    </div>
  </div>
  </div>

  <div class="col-lg-4 mt-4">
  <div class="card-box">
    <div class="imgBx">
    <img src="assets/image/home-page-service-logo/Devops.svg" width="70%" height="70%">
    </div>
    <div class="contentBx">
      <h3 class="mt-4">Confused ??</h3>
      <!--<p>Accelerate your software delivery with DevOps.</p>-->
      <a href="https://amvionlabs.com/contactus.php">Contact us</a>
    </div>
  </div>
  </div>



</section>

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
              <input type="text" name="phone" id="phone" placeholder="Phone Number" required class="w-75 p-2 mx-4 bg-light border border-1"> <br><br>
             <textarea name="message" id="message" placeholder="message" class="w-75 p-2 mx-4 bg-light border border-1"></textarea><br><br>
             <input type="submit" class="mx-4 bg-light border-0 get-started" value="submit"> 
             
             </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include '../footer.php' ?>