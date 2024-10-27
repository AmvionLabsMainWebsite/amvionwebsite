<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form id="newsletterForm" action="../newsletter-mail.php" method="post">
        <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
          <input type="email" class="form-control p-2" placeholder="email address" name="email" id="email" style="width: 40%;" required/>
          <button type="submit" class="get-started">Subscribe</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="subscribeModalLabel">Subscription Successful</h5>
      </div>
      <div class="modal-body">
        Thank you for subscribing to our newsletter!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  // JavaScript to handle form submission
  document.getElementById('newsletterForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from submitting the default way
    
    const formData = new FormData(this); // Collect form data
    
    fetch(this.action, {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (response.ok) {
        // On success, show the modal
        const subscribeModal = new bootstrap.Modal(document.getElementById('subscribeModal'));
        subscribeModal.show();
        
        // Set a timeout to reload the page after 3 seconds
        setTimeout(function() {
          location.reload();
        }, 3000); // 3000 milliseconds = 3 seconds
      } else {
        alert('Something went wrong. Please try again.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred.');
    });
  });
</script>
