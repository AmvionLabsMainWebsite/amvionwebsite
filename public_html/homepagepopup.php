<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="emailModalLabel">Subscribe to our Newsletter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form inside modal -->
        <form id="emailForm" action="newsletter-home-mail.php" method="post">
          <div class="mb-3">
            <label for="emailInput" class="form-label">Subscribe to Our Newsletter</label>
            <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com" required>
          </div>
          <button type="submit" class="get-started">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Loading Spinner (hidden initially) -->
<style>
  .spinner {
    display: none;  /* Initially hidden */
    width: 3rem;
    height: 3rem;
    border: 0.4rem solid #f3f3f3;
    border-top: 0.4rem solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Check if the user has already subscribed (using localStorage)
  const subscribed = localStorage.getItem('subscribed');

  if (!subscribed) {
    // Show modal after 2 seconds
    setTimeout(() => {
      const emailModal = new bootstrap.Modal(document.getElementById('emailModal'));
      emailModal.show();
    }, 6000);
  }

  // Handle form submission
  document.getElementById('emailForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent default form submission

    const formData = new FormData(this);

    // Show loading spinner
    const modalBody = document.querySelector('.modal-body');
    modalBody.innerHTML = '<div class="spinner"></div>';

    // Trigger the spinner animation
    document.querySelector('.spinner').style.display = 'block';

    fetch(this.action, {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (response.ok) {
        // Store the subscription in localStorage to prevent future popups
        localStorage.setItem('subscribed', 'true');

        // Simulate loading for 2 seconds, then show thank you message
        setTimeout(() => {
          modalBody.innerHTML = '<div class="text-center">Thank you for subscribing!</div>';
          
          // Delay and reload the page
          setTimeout(() => {
            location.reload();  // Reload the page after 2 seconds
          }, 2000);
        }, 2000);  // Simulate 2-second delay for loading animation
      } else {
        alert('Submission failed, please try again.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred while submitting the form.');
    });
  });
</script>
