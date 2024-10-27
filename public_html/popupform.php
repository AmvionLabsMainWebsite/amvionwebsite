

<button type="button" class="get-started" data-bs-toggle="modal" data-bs-target="#popupForm">
    Get Quote
  </button>

  <!-- Modal -->
   
  <div class="modal fade" id="popupForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">We will reach out soon</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../mail-send.php" method="post">
          <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" id="name" placeholder="name" required>
             
            </div>
            <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email" name="email" id="email" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mobile number" name="phone" id="phone" required>
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label">Message</label>
              <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="Any query ? Write Here ..." name="message" id="message" required></textarea>
            </div>
            <button type="submit" class="get-started">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
