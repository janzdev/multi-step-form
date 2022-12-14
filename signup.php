<?php include('./includes/header.php') ?>

<div class="container">
  <header>
    <h5>Sign<span>up</span></h5>
  </header>
  <!-- Multi Step Form start -->
  <div class="progress-bar">
    <div class="step">
      <p>Personal</p>
      <div class="bullet">
        <span>1</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step hide">
      <p>Birth</p>
      <div class="bullet">
        <span>2</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step">
      <p>Contact</p>
      <div class="bullet">
        <span>3</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step hide">
      <p>Contact</p>
      <div class="bullet">
        <span>4</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step">
      <p>Accounts</p>
      <div class="bullet">
        <span>5</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
  </div>
  <!-- Multi Step Form end -->
  <div class="form-outer">
    <form action="./signupcode.php" method="POST">
      <!-- First Slide Page start-->
      <div class="page slide-page">
        <div class="title">Personal Details:</div>

        <div class="field">
          <div class="label">Lastname</div>
          <input type="text" name="lastname" required />
        </div>

        <div class="field">
          <div class="label">Firstname</div>
          <input type="text" name="firstname" required />
        </div>

        <div class="field">
          <div class="label">Middlename</div>
          <input type="text" name="middlename" required />
        </div>

        <div class="field option">
          <button class="firstNext next">Next</button>
          <p>Already have an account?<a href="login.php"> Login</a></p>
        </div>
      </div>
      <!-- First Slide Page end-->

      <!-- Second Slide Page start-->
      <div class="page">
        <div class="field">
          <div class="label">Nickname</div>
          <input type="text" name="nickname" required />
        </div>

        <div class="field">
          <div class="label">Gender</div>
          <!-- <input type="text" name="gender" id=""> -->
          <select name="gender" type="text" required>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>

        <div class="field">
          <div class="label">Birthdate</div>
          <input type="date" name="birthdate" required />
        </div>

        <div class="field">
          <div class="label">Address</div>
          <input type="text" name="address" required />
        </div>

        <div class="field btns">
          <button class="prev-1 prev">Previous</button>
          <button class="next-1 next">Next</button>
        </div>
      </div>
      <!-- Second Slide Page end-->

      <!-- Third Slide Page start-->
      <div class="page">
        <div class="title">Contact Info:</div>

        <div class="field">
          <div class="label">Cellphone No.</div>
          <input type="number" name="cell_no" required />
        </div>

        <div class="field">
          <div class="label">Contact Person</div>
          <input type="text" name="contact_person" required />
        </div>

        <div class="field">
          <div class="label">Contact Person No.</div>
          <input type="number" name="contact_person_no" required />
        </div>

        <div class="field btns">
          <button class="prev-2 prev">Previous</button>
          <button class="next-2 next">Next</button>
        </div>
      </div>
      <!-- Third Slide Page end-->

      <!-- Fourth Slide Page start-->
      <div class="page">
        <div class="title hides">Contact Info</div>
        <div class="field">
          <div class="label">Email</div>
          <input type="email" placeholder="example@gmail.com" name="email" required />
        </div>

        <div class="field">
          <div class="label">Year Level</div>
          <input type="number" name="year_level" required />
        </div>

        <div class="field">
          <div class="label">Course</div>
          <select name="course" type="text" required>
            <option>BSIT</option>
            <option>BSED</option>
            <option>BEED</option>
            <option>BSBA</option>
          </select>
        </div>

        <div class="field btns">
          <button class="prev-3 prev">Previous</button>
          <button class="next-3 next">Next</button>
        </div>
      </div>
      <!-- Fourth Slide Page end-->

      <!-- Fifth Slide Page start-->
      <div class="page">
        <div class="title">Login Details:</div>

        <div class="field">
          <div class="label">Student ID No.</div>
          <input type="text" name="student_id_no" required />
        </div>

        <div class="field">
          <div class="label">Password</div>
          <input type="password" name="password" required />
        </div>

        <div class="field">
          <div class="label">Confirm Password</div>
          <input type="password" name="cpassword" required />
        </div>

        <div class="field btns">
          <button class="prev-4 prev">Previous</button>
          <button type="submit" class="submit" name="register_btn">Submit</button>
        </div>
      </div>
      <!-- Fifth Slide Page end-->
    </form>
  </div>
</div>

<?php include('./includes/footer.php') ?>