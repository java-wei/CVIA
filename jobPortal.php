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
    <?php
      $username = "root";
      $password = "root";
      $host = "localhost:8888";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        //echo "Connections are made successfully::";
      $selected = mysql_select_db("CViA", $connector)
        or die("Unable to connect");
    ?>  

    <div id="loginBox" style="display:none;"> 
        <p class="popupHead">Login</p>
        <hr>
        <form name="login" action="" method="post">
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
        <hr>
        <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Login" id="loginSubmitButton"/></center>
        </form>
    </div>

    <div id="postJobBox" style="display:none;"> 
        <p class="popupHead">Post New Job</p>
        <hr>
        <form name="login" action="" method="post">
          <table class="popupFormTable">
            <tr>
              <td class="inputLabel">Job Name:</td>
              <td class="inputBox"><input name="jobname" size="14"/></td>
            </tr>
            <tr>
              <td class="inputLabel">Job Description:</td>
              <td><button id="uploadDescriptionButton" type="button" class="btn btn-default btn-lg" style="width: 80%;">Upload Job Description</button></td>
            </tr>
          </table>
        <input type="file" id="myJob" multiple onchange="myFunctionJob()" style="display:none;">
        <hr>
        <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Post" id="jobSubmitButton"/></center>
      </form>
    </div>

    <div id="registerBox" style="display:none;"> 
        <p class="popupHead">Register</p>
        <hr>
        <form name="register" action="" method="post">
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
            <a href="aboutUs.html">About Us</a>
          </div>
          <div class="buttons">
            <button id="LoginButton" type="button" class="btn btn-default btn-lg">Login</button>
            <button id="RegisterButton" type="button" class="btn btn-default btn-lg">Register</button>
          </div>
        </div>
      </div>

      <hr>

      <div class="jobListPane">
        <div class="jobList">
          <table class="jobTable">
            <tr class="tableLabel">
              <td class="jobTitle">POSITION</td>
              <td class="jobCompany">COMPANY</td>
              <td class="jobDescription">DESCRIPTION</td>
              <td class="jobStatus">STATUS</td>
            </tr>
            <?php
            $tableName = 'Job';
            $sql = "SELECT * FROM ".$tableName;
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
              "<td class=\"jobTitle\"><a href=\"#\">".$row["job_title"]."</a></td>
              <td class=\"jobCompany\">".$row["company"]."</td>
              <td class=\"jobDescription\">".$row["job_description"]."</td>
              <td class=\"jobStatus\"><button class=\"applyButton btn btn-default btn-lg\" type=\"button\" >Apply</button></td>
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