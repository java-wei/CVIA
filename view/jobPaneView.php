<div class="jobListPane" style="display:none;">
  <div class="jobList">
    <table class="jobTable">
      <tr class="tableLabel">
        <td class="jobTitle">POSITION</td>
        <td class="jobCompany">COMPANY</td>
        <td class="jobDescription">DESCRIPTION</td>
        <td class="jobStatus">CLOSE DATE</td>
      </tr>
      <?php
      $sql = "SELECT * FROM ".JOB_TABLE." ORDER BY job_id DESC";
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
        "<td class=\"jobTitle\"><a href=\"jobPage.php?job=".$row["job_id"]."\" target=\"_blank\">".$row["job_title"]."</a></td>
        <td class=\"jobCompany\">".$row["job_company"]."</td>
        <td class=\"jobDescription\">".$row["job_description"]."</td>
        <td class=\"jobStatus\">2015-2-11</td>
        </tr>";
        $count = $count + 1;
      }
      ?>
    </table>
  </div>
</div>

<hr>