<?php 
  require_once('../includes/config.php'); 
  if( !$user->is_logged_in() ){ 
    header('Location: index.php');
  } 

  $connector = mysql_connect(DBHOST,DBUSER,DBPASS)
    or die("Unable to connect");
  //echo "Connections are made successfully::";
  $selected = mysql_select_db("CViA", $connector)
    or die("Unable to connect");

  $userID = $_SESSION['id'];
?>

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
        <form name="login" action="login.php" method="post">
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
        <form name="login" action="" method="post">
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
              <td class="inputLabel">Description keywords:</td>
              <td class="inputBox"><input id="tagInputBox" name="jobKeyword" size="14"/></td>
              <td><button id="addKeywordButton" type="button" class="btn btn-default btn-lg">Add</button></td>
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
        <form name="register" action="signup.php" method="post">
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
            <a href="jobPortal.php">Job Portal</a>
            <a href="aboutUs.php">About Us</a>
            <a href="#" style="color:rgb(7, 68, 119);">My Account</a>
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
            $sql = "SELECT * FROM members WHERE memberID = $userID";
            $userInfo = mysql_query($sql);
            $row = mysql_fetch_assoc($userInfo);
      ?>
      <div class="banner">
        <div class="myAccountInfoPane">
          <p class="myAccountHeading">My Account Information</p>
          <table>
            <tr>
              <td class="label">User Name:</td>
              <td class="info"><?php echo $row["username"]; ?></td>
            </tr>
            <tr>
              <td class="label">Email Address:</td>
              <td class="info"><?php echo $row["email"]; ?></td>
            </tr>
            <tr>
              <td class="label">No. of Job Posted:</td>
              <td class="info">
                <?php 
                  $sql = "SELECT * FROM Job WHERE owner_id = $userID";
                  $jobResult = mysql_query($sql);
                  $num_rows = mysql_num_rows($jobResult);
                  echo $num_rows; 
                ?>
              </td>
            </tr>
          </table>
          <button id="UploadJobButton" type="button" class="btn btn-default btn-lg" style="margin-top:20px; margin:0 auto;">Post New Job</button>
        </div>
        <hr>
        <div class="postedJobPane">
          <p class="myAccountHeading">My Job List</p>
          <table class="myJobListTable">
            <tr class="myJobLabel">
              <td class="myJobPosition">POSITION</td>
              <td class="myJobDescription">DESCRIPTION</td>
              <td class="myJobDate">POST DATE</td>
              <td class="myJobCandidates">CANDIDATES</td>
              <td class="myJobStatus">STATUS</td>
            </tr>
            <?php
            $count = 0;
            while( $row = mysql_fetch_assoc($jobResult) ){

              $sql = "SELECT * FROM ".CV_TABLE." WHERE cv_job_id = ".$row["job_id"];
              $result = mysql_query($sql);
              $numrows = mysql_num_rows($result);

              if ($count % 2 == 0) {
                // oddLine
                echo
                "<tr class=\"myJobEntry oddLine\">";
              } else {
                // evenLine
                echo
                "<tr class=\"myJobEntry evenLine\">";
              }
              echo
              "<td class=\"myJobPosition\"><a href=\"jobPage.php?job=".$row["job_id"]."\" target=\"_blank\">".$row["job_title"]."</a></td>
              <td class=\"myJobDescription\">".$row["job_description"]."</td>
              <td class=\"myJobDate\">2015-9-30</td>
              <td class=\"myJobCandidates\">".$numrows."</td>
              <td class=\"myJobStatus\">Open</td>
            </tr>";
              $count = $count + 1;
            }
            ?>
          </table>
        </div>
      </div>

      <hr>

      <div class="jobSection">
        <p id="demo"></p>
      </div>
    </div>

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