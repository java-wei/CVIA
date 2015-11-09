<div class="jobDescriptionPane">
  <table class="jobDescriptionTable">
    <tr class="oddLine">
      <td class="jtLabel">Name</td>
      <td><?php echo $row["cv_name"]?></td>
    </tr>
    <tr class="evenLine">
      <td class="jtLabel">Contact Number</td>
      <td><?php echo $row["cv_phone"]?></td>
    </tr>
    <tr class="oddLine">
      <td class="jtLabel">Email Address</td>
      <td><?php echo $row["cv_email"] ?></td>
    </tr>
    <tr class="evenLine">
      <td class="jtLabel">Date of Applying</td>
      <td>2015-2-11</td>
    </tr>
    <tr class="oddLine">
      <td class="jtLabel">CV Summary</td>
      <td class="jtDescription"><?php echo $row["cv_description"]?></td>
    </tr>
  </table>
</div>