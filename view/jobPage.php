<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Page</title>

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
      require_once('../controller/processAction.php'); 
      require_once('../model/db.php'); 

      $jobID = $_GET["job"];
      $result = dbSelect(JOB_TABLE, "WHERE job_id = $jobID");
      $row = mysql_fetch_assoc($result);
      if ($user->is_logged_in()){
        $userID = $_SESSION['id'];
      }
      $_SESSION['location'] = "../view/jobPage.php?job=$jobID";
      $result = dbSelect(CV_TABLE, "WHERE cv_job_id = $jobID");

      require_once('loginView.php'); 
      require_once('registerView.php'); 
    ?>

    <div id="blockMask" style="display: none;"></div>

    <div id="wrapper">
      <?php
        require_once('tabbarView.php'); 
        require_once('jobDescriptionView.php'); 
        require_once('submitCVView.php');
        require_once('rankingView.php');
      ?>
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