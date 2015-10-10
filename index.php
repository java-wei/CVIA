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
        <input type="file" id="myJob" multiple id="SubmitCVButton" onchange="myFunctionJob()" style="display:none;">
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
            <a href="#" style="color:rgb(7, 68, 119);">Home Page</a>
            <a href="#">Job Portal</a>
            <a href="aboutUs.html">About Us</a>
          </div>
          <div class="buttons">
            <button id="LoginButton" type="button" class="btn btn-default btn-lg">Login</button>
            <button id="RegisterButton" type="button" class="btn btn-default btn-lg">Register</button>
          </div>
        </div>
      </div>

      <hr>

      <div class="banner">
       <button id="SubmitCVButton" type="button" class="btn btn-default btn-lg">Upload CV</button>
       <input type="file" id="myFile" multiple id="SubmitCVButton" onchange="myFunctionCV()" style="display:none;">
       <button id="UploadJobButton" type="button" class="btn btn-default btn-lg">Post Job</button>
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

    <script>
      $("#LoginButton").click(function() {
        $("#loginBox").fadeIn("slow");
        $("#loginBox").css("z-index", "5");
        $("#blockMask").fadeIn("slow");
        $("#blockMask").css("display", "block");
      });

      $("#RegisterButton").click(function() {
        $("#registerBox").fadeIn("slow");
        $("#registerBox").css("z-index", "5");
        $("#blockMask").fadeIn("slow");
        $("#blockMask").css("display", "block");
      });
 
      $("#UploadJobButton").click(function() {
        $("#postJobBox").fadeIn("slow");
        $("#postJobBox").css("z-index", "5");
        $("#blockMask").fadeIn("slow");
        $("#blockMask").css("display", "block");
      });

      $("#uploadDescriptionButton").click(function() {
        $("#myJob").trigger('click');
      });

      $("#SubmitCVButton").click(function() {
        $("#myFile").trigger('click');
      });

      $("#loginSubmitButton").click(function() {
        $("#loginBox").fadeOut("slow");
        $("#blockMask").fadeOut("slow");
      });

      $("#registerSubmitButton").click(function() {
        $("#registerBox").fadeOut("slow");
        $("#blockMask").fadeOut("slow");
      });

      $("#jobSubmitButton").click(function() {
        $("#postJobBox").fadeOut("slow");
        $("#blockMask").fadeOut("slow");
      });

      function myFunctionCV(){
        var x = document.getElementById("myFile");
        var txt = "";
        if ('files' in x) {
            if (x.files.length == 0) {
                txt = "Select one or more files.";
            } else {
                for (var i = 0; i < x.files.length; i++) {
                    txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                    var file = x.files[i];
                    if ('name' in file) {
                        txt += "name: " + file.name + "<br>";
                    }
                    if ('size' in file) {
                        txt += "size: " + file.size + " bytes <br>";
                    }
                }
            }
        } 
        else {
            if (x.value == "") {
                txt += "Select one or more files.";
            } else {
                txt += "The files property is not supported by your browser!";
                txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
            }
        }
        document.getElementById("demo").innerHTML = txt;
      }

      function myFunctionJob(){
        var x = document.getElementById("myJob");
        var txt = "";
        if ('files' in x) {
            if (x.files.length == 0) {
                txt = "Select one or more files.";
            } else {
                for (var i = 0; i < x.files.length; i++) {
                    txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                    var file = x.files[i];
                    if ('name' in file) {
                        txt += "name: " + file.name + "<br>";
                    }
                    if ('size' in file) {
                        txt += "size: " + file.size + " bytes <br>";
                    }
                }
            }
        } 
        else {
            if (x.value == "") {
                txt += "Select one or more files.";
            } else {
                txt += "The files property is not supported by your browser!";
                txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
            }
        }
        document.getElementById("demo").innerHTML = txt;
        

    }

    </script>
  </body>

  <footer>
    <p>copyright@ NUS CS3219 Group 5</p>
  </footer>
</html>