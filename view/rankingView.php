<div id="rankPane" style="display: none;">
  <hr>
  <table class="rankTable">
    <tr class="rankLabel">
      <td class="rankIndex">No.</td>
      <td class="rankName">NAME</td>
      <td class="rankPhone">PHONE</td>
      <td class="rankEmail">EMAIL</td>
      <td class="rankSummary">SUMMARY</td>
      <td class="rankViewCV">CV</td>
    </tr>
    <?php
      $index = 0;
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $name = $row['cv_name'];
        $phone = $row['cv_phone'];
        $email = $row['cv_email'];
        $summary = $row['cv_keyword'];
        $id = $row['cv_id'];
        $index++;
        if ($index % 2 == 0) {
          echo "<tr class=\"rankEntry evenLine\">";
        } else {
          echo "<tr class=\"rankEntry oddLine\">";
        }
        echo "
            <td class=\"rankIndex\">$index</td>
            <td class=\"rankName\"><a href=\"cvPage.php?cv_id=$id\" target=\"_blank\">$name</a></td>
            <td class=\"rankPhone\">$phone</td>
            <td class=\"rankEmail\">$email</td>
            <td class=\"rankSummary\">$summary</td>
            <td class=\"rankViewCV\"><a id=\"rankViewCVButton\" href=\"../controller/download.php?id=$id\" target=\"_blank\">View CV</a></td>
          </tr>
        ";
      }

    ?>
  </table>
</div>