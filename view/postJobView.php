<div id="postJobBox" style="display:none;"> 
    <div style="position: relative;">
      <p class="popupHead">Post New Job</p>
      <button class="cancelButton"><img src="icons/cancel.png"></button>
    </div>
    <hr>
    <form name="login" action="../controller/postJob.php" method="post">
      <table class="popupFormTable">
        <tr>
          <td class="inputLabel">Job Name:</td>
          <td class="inputBox"><input name="jobname" size="14"/></td>
        </tr>
        <tr>
          <td class="inputLabel">Company:</td>
          <td class="inputBox"><input name="jobCompany" size="14"/></td>
        </tr>
        <tr>
          <td class="inputLabel">Due Date:</td>
          <td class="inputBox"><input name="jobDueDate" type="text" id="datepicker" /></td>
        </tr>
        <tr>
          <td class="inputLabel">Description:</td>
          <td class="inputBox"><input name="jobDescription" size="14"></td>
        </tr>
        <tr>
          <td class="inputLabel">Keywords:</td>
          <td class="inputBox"><input id="tagInputBox" size="14"/></td>
          <td>
            <select id="importanceSelect">
              <option value="1">Very Important</option>
              <option value="2" selected>Important</option>
              <option value="3">Less Important</option>
            </select>
          </td>
          <td><button id="addKeywordButton" type="button" name="button" class="btn btn-default btn-lg">Add</button></td>
        </tr>
      </table>
    <div id="tagArea">
    </div>
    <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Post" id="jobSubmitButton"/></center>
  </form>
</div>

<?php
  if ($user->is_logged_in()){
    echo "<button id=\"UploadJobButton\" type=\"button\" class=\"btn btn-default btn-lg\" style=\"margin-bottom:0px;\">Post New Job</button><hr>";
  } 
?>
