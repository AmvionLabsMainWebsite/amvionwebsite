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
            <div class="p-4" style="background-image: url('https://amvionlabs.com/assets/image/blog-1.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;" alt="it-security-governance">
    <p class="text-black mt-4" style="font-size: 13px; visibility: hidden;">Imagine running a business where <br> critical data is constantly at risk, but you’re not <br> sure how to protect it.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
  <a href="https://amvionlabs.com/blogs/identify-mitigate-insider-information-security-threats.php" class="blogimages">
  <div class="p-4" style="background-image: url('https://amvionlabs.com/assets/image/blog-2.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;" alt="how-to-identify-and-mitigate-insider-information-security-threats">
    <p class="text-black mt-4 py-4" style="font-size: 13px; visibility: hidden;">Picture this: your organization’s greatest threat <br> isn’t external hackers but your own employees.</p>
    <!-- <a href="#" class="text-white mt-4" style="background: none;">READ MORE <i class="bi bi-arrow-right-short"></i></a> -->
  </div>
  </a>
<a href="https://amvionlabs.com/blogs/top-it-security-issues-2024-protect-business.php" class="blogimages">
  <div class="p-4" style="background-image: url('https://amvionlabs.com/assets/image/blog-3.png'); height: 52vh; width: 350px; background-repeat: no-repeat; background-position: center center; background-size: cover; border-radius: 15px;">
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
