<!DOCTYPE html>
<html lang="en">
  <?php
    require_once('includes/config.php'); 

    $jobID = $_GET["job"];
    $tableName = 'Job';
    $sql = "SELECT * FROM ".$tableName." WHERE job_id = ".$jobID;
    $jobResult = mysql_query($sql);
    $num_rows = mysql_num_rows($jobResult);
    $row = mysql_fetch_assoc($jobResult);
  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $row["job_title"]."-".$row["company"] ?></title>

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
          <button class="cancelButton"><img src="files/cancel.png"></button>
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

    <div id="registerBox" style="display:none;"> 
        <div style="position: relative;">
          <p class="popupHead">Register</p>
          <button class="cancelButton"><img src="files/cancel.png"></button>
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
            <td><?php echo $row["company"]?></td>
          </tr>
          <tr class="oddLine">
            <td class="jtLabel">Post Date</td>
            <td>2015-2-11</td>
          </tr>
          <tr class="evenLine">
            <td class="jtLabel">Key Requirement</td>
            <td class="jtDescription"><?php echo $row["job_description"]?></td>
          </tr>
          <tr class="oddLine">
            <td class="jtLabel">No. of Applicants</td>
            <td>12</td>
          </tr>
        </table>
        <?php
          if ($user->is_logged_in()){
            echo "<button id=\"checkRankingButton\" class=\"btn btn-default btn-lg\" type=\"button\" style=\"margin-top:20px;\">Check Ranking</button>";
          } 
        ?>
      </div>

      <div id="body">
        <?php
          echo '<form action="uploadCV.php?jobID='.$jobID.'" method="post" enctype="multipart/form-data">';
        ?>
          <input type="file" name="myFile" accept="application/pdf" value="Choose file" />
          <button class="UploadCVButton btn btn-default btn-lg" button type="submit" name="btn-upload">Submit CV</button>
        </form>
        <br /><br />
        <?php
          if(isset($_GET['status']) and $_GET['status'] === 'success')
          {
        ?>
            <script>
              alert('successfully uploaded!');
            </script>
            <label>File Uploaded Successfully...  <a href="viewCV.php">click here to view file.</a></label>
        <?php
          }
          else if(isset($_GET['status']) and $_GET['status'] === 'fail')
          {
        ?>
            <script>
              alert('error while uploading file');
            </script>
            <label>Problem While File Uploading !</label>
        <?php
          }
        ?>
      </div>
      
      <div id="rankPane" style="display: none;">
        <hr>
        <table class="rankTable">
          <tr class="rankLabel">
            <td class="rankIndex">Rank</td>
            <td class="rankName">Name</td>
            <td class="rankPhone">Phone</td>
            <td class="rankEmail">Email</td>
            <td class="rankSummary">Summary</td>
          </tr>
          <tr class="rankEntry oddLine">
            <td class="rankIndex">1</td>
            <td class="rankName"><a href="#" target="_blank">Wen Yiran</a></td>
            <td class="rankPhone">98911715</td>
            <td class="rankEmail">aieryiran@gmail.com</td>
            <td class="rankSummary">UI designer; Web developer; Java, C, Objective-C, Javascript, PHP, MySQL; Here is some random text. Here is some random text. Here is some random text. Here is some random text. Here is some random text. Here is some random text. Here is some random text.</td>
          </tr>
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