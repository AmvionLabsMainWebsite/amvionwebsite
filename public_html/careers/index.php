<?php include '../header.php'?>

<style>
.container-fluid {
    position: relative;
    z-index: 0;
}

.background-overlay::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('careersbg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: rgba(0, 0, 0, 0.6); /* Add a dark overlay */
    opacity: 0.8; /* Set opacity for the image and the color */
    z-index: -1; /* Ensure it's behind the content */
}
</style>

<div class="container-fluid p-4 bg-light position-relative">
    <div class="background-overlay"></div> <!-- Pseudo element will be applied through CSS -->
    <div class="row position-relative" style="z-index: 1;">
        <div class="col-lg-6 mt-4 p-4">
            <h1 style="font-size: 6rem;" class="text-white">Careers</h1>
            <p style="font-size: 1.3rem;" class="text-white">
                Join the inner circle. Become a part of one of the most exclusive team experiences and work your way towards the top with us, shoulder to shoulder.
            </p>
        </div>
        <div class="col-lg-6">
            <!-- <img src="choose2.png" alt="" width="80%" height="100%" class="floating"> -->
        </div>
    </div>
</div>


<section>
    <div class="container-fluid bg-light" style="border-radius: 0px 340px 310px 0px; ">
        <div class="row">
            <div class="col-lg-6 mt-4" >
                    <h2 class="mt-4">Find the career of your dreams</h2>
                    <p class="lh-lg">Our goal is to make that process as easy as possible for you, and to create a work environment that's satisfying - one where you'll look forward to coming to every day. Start your journey with us by browsing available jobs.</p>
                    <a href="https://amvionlabs.zohorecruit.in/jobs/Careers"><button class="get-started">View Openings</button></a>
            </div>
            <div class="col-lg-6">
            <img src="choose2.png" alt="" width="80%" height="100%" class="floating">
        </div>
        </div>

        
    </div>
   
    <div class="container-fluid mt-4 p-4" >
    <div class="row mt-4">
    <div>
  <img src="1.svg" alt="" class="floating" style="position: absolute; left: 70px; ">
  
</div>
        <div class="col-lg-12 text-center mt-4 p-4">
            <h2 class="mt-4 ">Looking for other positions...</h2>
            <p class="mt-4 ">Unlock your potential with us—where your growth fuels our innovation.</p>
            <a href="https://amvionlabs.com/careers/employeetestimonials.php">
                <button class="get-started mt-4">Explore</button>
            </a>

        </div>
        <div>
  <!-- <img src="1.svg" alt="" class="floating" style="position: absolute; left: 400px; "> -->
  <img src="bg.svg" alt="" class="" style="position: absolute; left: -640px; top: 40px;  " width="100%" height="100%">
  <img src="bg.svg" alt="" class="" style="position: absolute; right: -640px; top: 40px;  " width="100%" height="100%">
  
</div>
    </div>
    
</div>

<div class="container mt-4 p-4">
    <div class="row mt-4">
        <div class="col-lg-6"><img src="linkedin.svg" alt="" class="img-fluid mx-auto d-block"></div>
        <div class="col-lg-6 mt-4 p-4">
            <h3 class="mt-2" style="font-size: 3rem;">Join us.</h3>
            <p class="mt-2">Looking for the next stage in your career?</p>
            <p class="mt-2">Amvion Labs offers the opportunity to develop your ideas and thinking while having your efforts recognised from day one.</p>
            <a href="https://www.linkedin.com/company/amvion-labs-pvt-ltd/" class="">
                <button class="get-started mt-2 " style="font-size: 1.4rem;">Get a Look at Linked In <i class="bi bi-arrow-right-short fs-4 mt-4"></i></button>
            </a>
        </div>
    </div>
</div>
</section>
<?php include '../footer.php'?>