<?php include '../header.php' ?>



<div class="container-fluid bg-light text-center" style="background: linear-gradient(90deg, rgba(223,102,2,1) 0%, rgba(5,46,122,1) 35%, rgba(49,188,219,1) 90%); height: 60vh;  padding: 2rem;">
  <div class="row">
    <div class="col-lg-12 p-4 mb-4 mt-4">
      <h1 style="font-size: 6rem;" class="text-white">Blog</h1>
      <p  class="mt-3 text-white">Research-driven insights for ever-evolving industries</p>
      <?php include '../newsletter.php'?>
    </div>
   
  </div>
</div>

<div class="container-fluid p-4">
  <div class="row" id="contentContainer">
    <!-- Dynamic content will be loaded here -->
  </div>
  <div class="text-center mt-4">
    <button id="loadMoreBtn" class="get-started">Load More</button>
  </div>
</div>

<script>
  // Example items data (could be fetched from a server)
  const items = [
    { title: "End-to-End CI/CD Pipeline", description: "Are you fed up with the outdated, ineffective software development process?" , image: "blog-images/DevOps.webp", tagline: "DevOps", url: "end-to-end-cicd-pipeline.php" },
    { title: "ML Transforming Cybersecurity", description: "Machine Learning (ML), a powerful technology that can enhance our defense against threats", image: "blog-images/DDos.webp", tagline: "Cyber Security" , url: "ml-transforming-cybersecurity.php" },
    { title: "Digital Risk Protection", description: "The more an organization relies on digital means, for its platforms, the more its threats and vulnerabilities", image: "blog-images/disk-risk-protection.jpg", tagline: "Cyber Security", url: "digital-risk-protection.php"  },
    { title: "What is IT Security?", description: "IT security, also known as information security, involves protecting computer systems, networks,...", image: "blog-images/it-security.jpg", tagline: "Cyber Security", url: "what-is-it-security.php" },
    { title: "Types of IT Security", description: "In today's digital landscape, understanding the types of IT security is crucial for safeguarding...", image: "blog-images/types-of-it-security.jpg", tagline: "Cyber Security", url: "types-of-it-security.php"  },
    { title: "How to Protect Your Data in the Cloud", description: "Learn top cloud infrastructure security practices to protect your data, including strong access controls,...", image: "blog-images/How to Protect Your Data in the Cloud Best Practices for Cloud Infrastructure Security.jpg", tagline: "Cloud", url: "protect-data-best-practices-for-cloud-infrastructure-security.php" },
    { title: "Why cloud infrastructure Matters", description: "Learn why cloud infrastructure is essential, offering key benefits like scalability, cost savings, and enhanced", image: "blog-images/Why Cloud Infrastructure Matters Benefits and Advantages.jpg", tagline: "Cloud", url: "why-cloud-infrastructure-benefits-and-advantages.php"  },
    { title: "IT Security Governance", description: "Imagine running a business where critical data is constantly at risk, but you’re not sure how to protect it.", image: "blog-images/it-security-governance.jpg", tagline: "IT Security" , url: "it-security-governance-benefits-critical-enterprise.php"  },
    { title: "Top 10 IT Security Issues in 2024", description: "As technology continues to evolve, so too do the attempts at cybersecurity threats. As we round out 2024, ", image: "blog-images/Top 10 IT Security Issues in 2024 and How to Protect Your Business.jpg", tagline: "IT Security", url: "top-it-security-issues-2024-protect-business.php"  },
    { title: "Identify and Mitigate Insider Information Security Threats", description: "Picture this: your organization’s greatest threat isn’t external hackers but your own employees. Insider", image: "blog-images/how-to-identify-and-mitigate-insider-information-security-threats.jpg", tagline: "IT Security", url: "identify-mitigate-insider-information-security-threats.php"   },
    { title: "Top Information Security Threats and Vulnerabilities to Stay Protected", description: "As the digital landscape evolves, businesses face a growing number of information security threats that can", image: "blog-images/top-information-security-threats-and-vulnerabilities-to-stay-protected.jpg", tagline: "IT Security", url: "top-information-security-threats-vulnerabilities-protection.php"  },
    { title: "Enterprise IT Security – Can it Be Made Cost-Effective Yet Reassuring?", description: "Imagine locking your front door every night but leaving your windows wide open—how secure would you really", image: "blog-images/enterprise-it-security-can-it-be-made-cost-effective-yet-reassuring.jpg", tagline: "IT Security", url: "enterprise-it-security-cost-effective-solutions.php"  }, 
  ];

  let visibleItems = 6; // Initial number of visible items

  function goToSingleBlog(index) {
  const blogUrl = items[index].url;
  window.location.href = blogUrl;
}

  // Function to render items
  function renderItems() {
    const contentContainer = document.getElementById('contentContainer');
    contentContainer.innerHTML = ''; // Clear current content

    // Show only the visible items
    items.slice(0, visibleItems).forEach((item, index) => {
      const itemElement = `
        <div class="col-md-4 d-flex align-items-stretch p-1" data-aos="zoom-in">
          <div class="card d-flex flex-column">
            <!-- Image at the top -->
            <img src="${item.image}" class="card-img-top" alt="${item.title}">
            
            <!-- Card Body -->
            <div class="card-body d-flex flex-column">
              <button class="border-0" style="width:70%;">${item.tagline}</button>
              <h4 class="card-title mt-4">${item.title}</h4 >
              <p class="card-text">${item.description}</p>
              
              <!-- Read more button aligned at the bottom -->
              <div class="mt-auto">
                <button class="get-started" onclick="goToSingleBlog(${index})">Read more <i class="bi bi-arrow-right"></i></button>

              </div>
            </div>
          </div>
        </div>
      `;
      contentContainer.innerHTML += itemElement;
    });

    // Hide Load More button if all items are visible
    if (visibleItems >= items.length) {
      document.getElementById('loadMoreBtn').style.display = 'none';
    }
  }


  // Load more items when the button is clicked
  document.getElementById('loadMoreBtn').addEventListener('click', () => {
    visibleItems += 3; // Load 3 more items
    renderItems();
  });

  // Initial render
  renderItems();
</script>

<?php include '../footer.php' ?>
