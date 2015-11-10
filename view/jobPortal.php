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
      require_once('../controller/processAction.php'); 
      require_once('../model/db.php'); 
      $_SESSION['location'] = "../view/jobPortal.php";
      require_once('loginView.php'); 
      require_once('registerView.php'); 
    ?>  

    <div id="blockMask" style="display: none;"></div>

    <div id="wrapper">
      <?php
        require_once('tabbarView.php');
        require_once('postJobView.php'); 
        require_once('searchJobView.php');
        require_once('jobPaneView.php'); 
      ?>  
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/indexjs.js"></script>

    <footer>
    <p>copyright@ NUS CS3219 Group 5</p>
  </footer>
  </body>
</html>