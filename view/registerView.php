<div id="registerBox" style="display:none;"> 
  <div style="position: relative;">
    <p class="popupHead">Register</p>
    <button class="cancelButton"><img src="icons/cancel.png"></button>
  </div>
  <hr>
  <form name="register" action="../controller/signup.php" method="post">
    <table class="popupFormTable">
      <tr>
        <td class="inputLabel">Username:</td>
        <td class="inputBox"><input name="username" size="14"/></td>
      </tr>
      <tr>
        <td class="inputLabel">Email:</td>
        <td class="inputBox"><input name="email" type="email" size="14" /></td>
      </tr>
      <tr>
        <td class="inputLabel">Password:</td>
        <td class="inputBox"><input name="password" type="password" size="14"/></td>
      </tr>
      <tr>
        <td class="inputLabel">Confirm Password:</td>
        <td class="inputBox"><input name="passwordConfirm" type="password" size="14"/></td>
      </tr>
    </table>
  <hr>
  <center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Register" id="registerSubmitButton"/></center>
  </form>
</div>