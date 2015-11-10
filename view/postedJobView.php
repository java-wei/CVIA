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

      $jobID = $row["job_id"];
      $result = dbSelect(CV_TABLE, "WHERE cv_job_id = $jobID");
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
      <td class=\"myJobDate\">".$row['job_postdate']."</td>
      <td class=\"myJobCandidates\">".$numrows."</td>
      <td class=\"myJobStatus\">";

      $today = intval(str_replace('-','', $today));
      $dueDate = intval(str_replace('-','', $row['job_duedate']));

      if ($today <= $dueDate) {
        echo "Open";
      } else {
        echo "Closed";
      }
      echo "</td></tr>";
      $count = $count + 1;
    }
    ?>
  </table>
</div>
