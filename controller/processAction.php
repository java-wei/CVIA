<?php
  require_once('../includes/config.php'); 

  if(isset($_GET['action'])) {

    //check the action
    switch ($_GET['action']) {
      case 'active':
        echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
        break;
      case 'loginSuccess' :
          echo "<h2 class='bg-success' id='loginSuccess'>Login successfully.</h2>";
          // echo "<script>$(\"#blockMask\").fadeIn(\"slow\");</script>";
        break;
      case 'loginFail' :
          echo "<h2 class='bg-success' id='loginSuccess'>Incorrect username or password.</h2>";
        break;
      case 'joined' :
        echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
        break;
      case 'reset':
        echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
        break;
      case 'resetAccount':
        echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
        break;
      case 'error':
        $error = $_GET['error'];
        echo "<h2 class='bg-success'>$error</h2>";
        break;
    }

  }
?>