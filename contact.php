<?php include 'header.php'; ?>

<!-- Contact Us Form -->
<section class="my-5">
  <div class="py-3">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="user-info.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>USERNAME</label>
        <input type="text" name="user" autocomplete="off" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" autocomplete="off" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Feedback</label>
        <textarea class="form-control" name="feedback" required></textarea>
      </div>
      <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="image" class="form-control-file">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>