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
    <?php require_once('includes/config.php'); ?>
    <div id="loginBox" style="display:none;"> 
        <p class="popupHead">Login</p>
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
            <a href="jobPortal.php">Job Portal</a>
            <a href="#" style="color:rgb(7, 68, 119);">About Us</a>
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

      <div class="selfIntroduction">
        <p class="oneSentence">The CViA website is developed by three Year-4 computer-science students from National Unversotity of Singapore(NUS).</p>
        <table>
          <tr>
            <td class="name"><p>Cheng Yingjie</p></td>
            <td class="description"><p>People find me to be an upbeat, self-motivated team player with excellent communication skills. For the past several years I have worked in lead qualification, telemarketing, and customer service in the technology industry. My experience includes successfully calling people in director-level positions of technology departments and developing viable leads. I have a track record of maintaining a consistent call and activity volume and consistently achieving the top 10 percent in sales, and I can do the same thing for your company.</p></td>
          </tr>
          <tr>
            <td class="name"><p>Wen Yiran</p></td>
            <td class="description"><p>I am a dedicated person with a family of four. I enjoy reading, and the knowledge and perspective that my reading gives me has strengthened my teaching skills and presentation abilities. I have been successful at raising a family, and I attribute this success to my ability to plan, schedule, and handle many different tasks at once. This flexibility will help me in the classroom, where there are many different personalities and learning styles.</p></td>
          </tr>
          <tr>
            <td class="name"><p>Zhang Chengwei</p></td>
            <td class="description"><p>People find me to be an upbeat, self-motivated team player with excellent communication skills. For the past several years I have worked in lead qualification, telemarketing, and customer service in the technology industry. My experience includes successfully calling people in director-level positions of technology departments and developing viable leads. I have a track record of maintaining a consistent call and activity volume and consistently achieving the top 10 percent in sales, and I can do the same thing for your company.</p></td>
          </tr>
        </table>
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