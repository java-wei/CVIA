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
  require_once('../includes/config.php'); 

  $location = $_SESSION['location'];
  if (isset($_POST['search_button'])) {
  	$keyword = $_POST['search_keyword'];
    $jobResult = dbSelect(JOB_TABLE, "WHERE job_title LIKE '%".$keyword."%' or job_keyword LIKE '%".$keyword."%' or job_description LIKE '%".$keyword."%'");
    $num_rows = mysql_num_rows($jobResult);

    if ($num_rows == 0) {
      echoNoResult();
    } else {
      echoDiv($jobResult);
    }     
  } 
  else if(strrpos($location, "jobPortal.php")) {
    $jobResult = dbSelect(JOB_TABLE, "ORDER BY job_id DESC");
  	$num_rows = mysql_num_rows($jobResult);

  	if ($num_rows == 0) {
  	  echoNoResult();
  	} else {
  	  echoDiv($jobResult);
  	}    
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

<hr>