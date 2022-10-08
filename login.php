<?php include('./includes/header.php') ?>

<div class="row justify-content-center">
  <div class="col-md-7">

    <?php include('message.php'); ?>

    <div class="card">
      <div class=" card-header text-bg-primary">
        <h4>Login</h4>
      </div>
      <div class="card-body">
        <form action="./registercode.php" method="POST">
          <div class="row">
            <div class="form-group col-md-12 mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group col-md-12 mb-4">
              <label>Confirm Password</label>
              <input type="password" name="cpassword" class="form-control" required>
            </div>
          </div>
          <div class="form-group  mb-2  float-end">
            <a href="register.php"><button type="button" class="btn btn-secondary">Back</button></a>
            <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>





<?php include('./includes/footer.php') ?>