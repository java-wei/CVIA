<div class="header">
  <div class="logoSection span_4 column">
    <p id="bigHeading">CViA</p>
  </div>
  <div class="tabSection span_8 column">
    <div class="tabs">
    <?php
      $location = $_SESSION['location'];
      if(strrpos($location, "index.php")) {
    ?>

      <a href="#" style="color:rgb(7, 68, 119);">Home Page</a>
      <a href="jobPortal.php">Job Portal</a>
      <a href="aboutUs.php">About Us</a>

    <?php
      } else if (strrpos($location, "jobPortal.php")) {
    ?>

      <a href="index.php">Home Page</a>
      <a href="#" style="color:rgb(7, 68, 119);">Job Portal</a>
      <a href="aboutUs.php">About Us</a>

    <?php
      } else if (strrpos($location, "aboutUs.php")) {
    ?>

      <a href="index.php">Home Page</a>
      <a href="jobPortal.php">Job Portal</a>
      <a href="#" style="color:rgb(7, 68, 119);">About Us</a>

    <?php
      } else {
    ?>

      <a href="index.php">Home Page</a>
      <a href="jobPortal.php">Job Portal</a>
      <a href="aboutUs.php">About Us</a>

    <?php
      }
    ?>  

      <?php
        if ($user->is_logged_in()){
          echo "<a href=\"myAccount.php\">My Account</a>";
        }
      ?>
    </div>
    <div class="buttons">
      <?php
        if ($user->is_logged_in()){
          echo "<button id=\"LogoutButton\" type=\"button\" class=\"btn btn-default btn-lg\">Logout</button>";
        } else {
          echo "<button id=\"LoginButton\" type=\"button\" class=\"btn btn-default btn-lg\">Login</button>
                <button id=\"RegisterButton\" type=\"button\" class=\"btn btn-default btn-lg\">Register</button>";
        }
      ?>
    </div>
  </div>
</div>
<hr>