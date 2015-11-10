<?php
      $userInfo = dbSelect(USER_TABLE, "WHERE memberID = $userID");
      $row = mysql_fetch_assoc($userInfo);
?>

<div class="myAccountInfoPane">
  <p class="myAccountHeading">My Account Information</p>
  <table>
    <tr>
      <td class="label">User Name:</td>
      <td class="info"><?php echo $row["username"]; ?></td>
    </tr>
    <tr>
      <td class="label">Email Address:</td>
      <td class="info"><?php echo $row["email"]; ?></td>
    </tr>
    <tr>
      <td class="label">No. of Job Posted:</td>
      <td class="info">
        <?php 
          $jobResult = dbSelect(JOB_TABLE, "WHERE owner_id = $userID");
          $num_rows = mysql_num_rows($jobResult);
          echo $num_rows; 
          $today = date("Y-m-d");  
        ?>
      </td>
    </tr>
  </table>
  
</div>