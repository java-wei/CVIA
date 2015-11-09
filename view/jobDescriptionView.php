<div class="jobDescriptionPane">
  <table class="jobDescriptionTable">
    <tr class="oddLine">
      <td class="jtLabel">Job Name</td>
      <td><?php echo $row["job_title"]?></td>
    </tr>
    <tr class="evenLine">
      <td class="jtLabel">Company</td>
      <td><?php echo $row["job_company"]?></td>
    </tr>
    <tr class="oddLine">
      <td class="jtLabel">Close Date</td>
      <td><?php echo $row["job_duedate"]?></td>
    </tr>
    <tr class="evenLine">
      <td class="jtLabel">Key Requirement</td>
      <td class="jtDescription"><?php echo $row["job_description"]?></td>
    </tr>
    <tr class="oddLine">
      <td class="jtLabel">No. of Applicants</td>
      <td>
        <?php 
          $numrows = mysql_num_rows($result);
          echo $numrows;
        ?>
      </td>
    </tr>
  </table>
</div>