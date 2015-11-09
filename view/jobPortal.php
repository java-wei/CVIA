<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Powerful Dream Finder</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/indexcss.css" rel="stylesheet">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <!-- Load jQuery JS -->
    <script src="js/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="js/jquery-ui.js"></script>
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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

      $_SESSION['location'] = "../view/jobPortal.php";
    ?>  

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
        <p class="assistantButton"><a href='reset.php'>Forgot your Password?</a></p>
        <p class="assistantButton"><a href='signup.php'>Create Account</a></p>
    </div>

    <div id="postJobBox" style="display:none;"> 
        <div style="position: relative;">
          <p class="popupHead">Post New Job</p>
          <button class="cancelButton"><img src="icons/cancel.png"></button>
        </div>
        <hr>
        <form name="login" action="../controller/postJob.php" method="post">
          <table class="popupFormTable">
            <tr>
              <td class="inputLabel">Job Name:</td>
              <td class="inputBox"><input name="jobname" size="14"/></td>
            </tr>
            <tr>
              <td class="inputLabel">Company:</td>
              <td class="inputBox"><input name="jobCompany" size="14"/></td>
            </tr>
            <tr>
              <td class="inputLabel">Due Date:</td>
              <td class="inputBox"><input name="jobDueDate" type="text" id="datepicker" /></td>
            </tr>
            <tr>
              <td class="inputLabel">Description:</td>
              <td class="inputBox"><input name="jobDescription" size="14"></td>
            </tr>
            <tr>
              <td class="inputLabel">Keywords:</td>
              <td class="inputBox"><input id="tagInputBox" size="14"/></td>
              <td>
                <select id="importanceSelect">
                  <option value="1">Very Important</option>
                  <option value="2" selected>Important</option>
                  <option value="3">Less Important</option>
                </select>
              </td>
              <td><button id="addKeywordButton" type="button" name="button" class="btn btn-default btn-lg">Add</button></td>
            </tr>
          </table>
        <div id="tagArea">
        </div>
        <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Post" id="jobSubmitButton"/></center>
      </form>
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
            <a href="#" style="color:rgb(7, 68, 119);">Job Portal</a>
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

      <?php
        if ($user->is_logged_in()){
          echo "<button id=\"UploadJobButton\" type=\"button\" class=\"btn btn-default btn-lg\" style=\"margin-bottom:0px;\">Post New Job</button><hr>";
        } 
      ?>

      <div class="searchSection">
        <div class="col-lg-6" style="width:100%;">
          <div class="input-group searchBox">
            <form method="POST" action=''>
              <input id="searchJobInput" type="text" name="search_keyword" placeholder="Search for Jobs...">
              <input id="searchJobButton" type="SUBMIT" name="search_button" value="Go!">          
            </form>
          </div><!-- /input-group -->
        </div>
      </div>


      <?php 
        if ((isset($_POST['search_button']))) {
          $keyword = $_POST['search_keyword'];
          $sql = "SELECT * FROM ".JOB_TABLE." WHERE job_title LIKE '%".$keyword."%' or job_keyword LIKE '%".$keyword."%' or job_description LIKE '%".$keyword."%' ORDER BY job_id DESC";
        } else {
          $sql = "SELECT * FROM ".JOB_TABLE." ORDER BY job_id DESC";
        }

        $jobResult = mysql_query($sql);
        $num_rows = mysql_num_rows($jobResult);

        if ($num_rows == 0) {
          echoNoResult();
        } else {
          echoDiv($jobResult);
        }       

        function echoDiv($jobResult) {
          echo "<div class=\"jobList\">
                  <table class=\"jobTable\" style=\"width:100%;\">
                    <tr class=\"tableLabel\">
                      <td class=\"jobTitle\">POSITION</td>
                      <td class=\"jobCompany\">COMPANY</td>
                      <td class=\"jobDescription\">DESCRIPTION</td>
                      <td class=\"jobStatus\">CLOSE DATE</td>
                    </tr>";

            $count = 0;
            while( $row = mysql_fetch_assoc($jobResult) ){
              $today = date("Y-m-d");
              $today = intval(str_replace('-','', $today));
              $dueDate = intval(str_replace('-','', $row['job_duedate']));

              if ($today <= $dueDate) {
                // job open
                if ($count % 2 == 0) {
                // oddLine
                echo
                "<tr class=\"jobEntry oddLine\">";
              } else {
                // evenLine
                echo
                "<tr class=\"jobEntry evenLine\">";
              }
              echo
              "<td class=\"jobTitle\"><a href=\"jobPage.php?job=".$row["job_id"]."\" target=\"_blank\">".$row["job_title"]."</a></td>
              <td class=\"jobCompany\">".$row["job_company"]."</td>
              <td class=\"jobDescription\">".$row["job_description"]."</td>
              <td class=\"jobStatus\">".$row['job_duedate']."</td>
              </tr>";
              $count = $count + 1;
              } 
            }
            echo "</table></div>";
        }

        function echoNoResult() {
          echo "<p id=\"noSearchResultMessage\">No Job Found</p>";
        }
      ?>

      <div class="jobListPane" style="display:none;">
        <div class="jobList">
          <table class="jobTable">
            <tr class="tableLabel">
              <td class="jobTitle">POSITION</td>
              <td class="jobCompany">COMPANY</td>
              <td class="jobDescription">DESCRIPTION</td>
              <td class="jobStatus">CLOSE DATE</td>
            </tr>
            <?php
            $sql = "SELECT * FROM ".JOB_TABLE." ORDER BY job_id DESC";
            $jobResult = mysql_query($sql);
            $num_rows = mysql_num_rows($jobResult);
            $count = 0;
            while( $row = mysql_fetch_assoc($jobResult) ){
              if ($count % 2 == 0) {
                // oddLine
                echo
                "<tr class=\"jobEntry oddLine\">";
              } else {
                // evenLine
                echo
                "<tr class=\"jobEntry evenLine\">";
              }
              echo
              "<td class=\"jobTitle\"><a href=\"jobPage.php?job=".$row["job_id"]."\" target=\"_blank\">".$row["job_title"]."</a></td>
              <td class=\"jobCompany\">".$row["job_company"]."</td>
              <td class=\"jobDescription\">".$row["job_description"]."</td>
              <td class=\"jobStatus\">2015-2-11</td>
              </tr>";
              $count = $count + 1;
            }
            ?>
          </table>
        </div>
      </div>

      <hr>

      <div class="jobSection">
        <input type="file" id="myFile" multiple id="SubmitCVButton" onchange="myFunctionCV()" style="display:none;">
        <p id="demo"></p>
      </div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/indexjs.js"></script>

    <footer>
    <p>copyright@ NUS CS3219 Group 5</p>
  </footer>
  </body>
</html>