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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="indexjs.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    


      <div class="banner">
        <button id="UploadCVButton" type="button" class="btn btn-default btn-lg">Upload CV</button>
        <input type="file" id="myFile" multiple id="SubmitCVButton" onchange="myFunctionCV()" style="display:none;">
        <button id="UploadJobButton" type="button" class="btn btn-default btn-lg">Post Job</button>
        <div>
          <table>
            <tr>
              <td><img src="jobs.png"></td>
              <td>
                <div style="margin-left: 20px;">
                  <h2 style="color: rgb(7, 68, 119); font-weight: bold;">We find the best for you!</h2>
                  <p style="color: rgba(36, 108, 167, 0.9); ">CViA helps to find match between perfect candidates and wonderful jobs. As a job seeker, you can find you dream job here. As a HR, you might get your perfect candidate here.</p>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>

      

      <div class="jobSection">
        <p id="demo"></p>
      </div>
    </div>

   

    <footer>
    <p>copyright@ NUS CS3219 Group 5</p>
  </footer>
  </body>
</html>