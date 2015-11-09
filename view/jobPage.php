<!DOCTYPE html>
<html lang="en">
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


    $jobID = $_GET["job"];
    $sql = "SELECT * FROM ".JOB_TABLE." WHERE job_id = ".$jobID;
    $jobResult = mysql_query($sql);
    $num_rows = mysql_num_rows($jobResult);
    $row = mysql_fetch_assoc($jobResult);
    if ($user->is_logged_in()){
      $userID = $_SESSION['id'];
    }

    $_SESSION['location'] = "../view/jobPage.php?job=$jobID";

    $sql = "SELECT * FROM ".CV_TABLE." WHERE cv_job_id = ".$jobID;
    $result = mysql_query($sql);
  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $row["job_title"]."-".$row["job_company"] ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/indexcss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="loginBox" style="display:none;"> 
        <div style="position: relative;">
          <p class="popupHead">Login</p>
          <button class="cancelButton"><img src="icons/cancel.png"></button>
        </div>
        <hr>
        <form name="login" action="../controller/login.php" method="post">
          <table class="popupFormTable">
            <tr>
              <td class="inputLabel">Username:</td>
              <td class="inputBox"><input name="username" size="14"/></td>
            </tr>
            <tr>
              <td class="inputLabel">Password:</td>
              <td class="inputBox"><input name="password" type="password" size="14"/></td>
            </tr>
          </table>
        <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Login" id="loginSubmitButton"/></center>
        </form>
        <p class="assistantButton"><a href='../controller/reset.php'>Forgot your Password?</a></p>
        <p class="assistantButton"><a href='../controller/signup.php'>Create Account</a></p>
    </div>

    <div id="registerBox" style="display:none;"> 
        <div style="position: relative;">
          <p class="popupHead">Register</p>
          <button class="cancelButton"><img src="icons/cancel.png"></button>
        </div>
        <hr>
        <form name="register" action="../controller/signup.php" method="post">
          <table class="popupFormTable">
            <tr>
              <td class="inputLabel">Username:</td>
              <td class="inputBox"><input name="username" size="14"/></td>
            </tr>
            <tr>
              <td class="inputLabel">Email:</td>
              <td class="inputBox"><input name="email" type="email" size="14" /></td>
            </tr>
            <tr>
              <td class="inputLabel">Password:</td>
              <td class="inputBox"><input name="password" type="password" size="14"/></td>
            </tr>
            <tr>
              <td class="inputLabel">Confirm Password:</td>
              <td class="inputBox"><input name="passwordConfirm" type="password" size="14"/></td>
            </tr>
          </table>
        <hr>
        <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Register" id="registerSubmitButton"/></center>
        </form>
    </div>

    <div id="blockMask" style="display: none;">
    </div>

    <div id="wrapper">
      <div class="header">
        <div class="logoSection span_4 column">
          <p id="bigHeading">CViA</p>
        </div>
        <div class="tabSection span_8 column">
          <div class="tabs">
            <a href="index.php">Home Page</a>
            <a href="jobPortal.php" style="color:rgb(7, 68, 119);">Job Portal</a>
            <a href="aboutUs.php">About Us</a>
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

      <div class="jobDescriptionPane">
        <table class="jobDescriptionTable">
          <tr class="oddLine">
            <td class="jtLabel">Job Name</td>
            <td><?php echo $row["job_title"]?></td>
          </tr>
          <tr class="evenLine">
            <td class="jtLabel">Company</td>
            <td><?php echo $row["job_company"]?></td>
          </tr>
          <tr class="oddLine">
            <td class="jtLabel">Close Date</td>
            <td>2015-2-11</td>
          </tr>
          <tr class="evenLine">
            <td class="jtLabel">Key Requirement</td>
            <td class="jtDescription"><?php echo $row["job_description"]?></td>
          </tr>
          <tr class="oddLine">
            <td class="jtLabel">No. of Applicants</td>
            <td>
              <?php 
                $numrows = mysql_num_rows($result);
                echo $numrows;
              ?>
            </td>
          </tr>
        </table>
      </div>

      <div id="body">
        <div id="uploadCVSection">
        <?php
          echo '<form id="phpCVForm" action="../controller/uploadCV.php?jobID='.$jobID.'" method="post" enctype="multipart/form-data">';
        ?>
          <input id="phpCVButton" type="file" name="myFile" accept="application/pdf" value="Choose CV to Upload" />
          <button class="UploadCVButton btn btn-default btn-lg" button type="submit" name="btn-upload">Submit CV</button>
        </form>
        <?php
          if (($user->is_logged_in()) && ($userID == $row["owner_id"])){
            echo "<hr><button id=\"checkRankingButton\" class=\"btn btn-default btn-lg\" type=\"button\">Check Candidates Ranking</button>";
          }
        ?>
        </div>
        <br/><br/>
        <?php
          if(isset($_GET['status']) and $_GET['status'] === 'success' and isset($_GET['cv']))
          {
        ?>
            <script>
              alert('successfully uploaded!');
            </script>
            <label>File Uploaded Successfully...  <a href="../controller/download.php?id=<?php echo $_GET['cv'] ?>">Click here to view file.</a></label>
        <?php
          }
          else if(isset($_GET['status']) and $_GET['status'] === 'fail')
          {
        ?>
            <script>
              alert('error while uploading file');
            </script>
            <label>Problem While File Uploading!</label>
        <?php
          }
        ?>
      </div>
      
      <div id="rankPane" style="display: none;">
        <hr>
        <table class="rankTable">
          <tr class="rankLabel">
            <td class="rankIndex">No.</td>
            <td class="rankName">NAME</td>
            <td class="rankPhone">PHONE</td>
            <td class="rankEmail">EMAIL</td>
            <td class="rankSummary">SUMMARY</td>
            <td class="rankViewCV">CV</td>
          </tr>
          <?php
            $index = 0;
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              $name = $row['cv_name'];
              $phone = $row['cv_phone'];
              $email = $row['cv_email'];
              $summary = $row['cv_keyword'];
              $id = $row['cv_id'];
              $index++;
              if ($index % 2 == 0) {
                echo "<tr class=\"rankEntry evenLine\">";
              } else {
                echo "<tr class=\"rankEntry oddLine\">";
              }
              echo "
                  <td class=\"rankIndex\">$index</td>
                  <td class=\"rankName\"><a href=\"cvPage.php?cv_id=$id\" target=\"_blank\">$name</a></td>
                  <td class=\"rankPhone\">$phone</td>
                  <td class=\"rankEmail\">$email</td>
                  <td class=\"rankSummary\">$summary</td>
                  <td class=\"rankViewCV\"><a id=\"rankViewCVButton\" href=\"../controller/download.php?id=$id\" target=\"_blank\">View CV</a></td>
                </tr>
              ";
            }
 
          ?>
        </table>
      </div>
    </div>

    <hr>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/indexjs.js"></script>

    <footer>
    <p>copyright@ NUS CS3219 Group 5</p>
  </footer>
  </body>
</html>