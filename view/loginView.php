<div id="loginBox" style="display:none;"> 
	<div style="position: relative;">
	  <p class="popupHead">Login</p>
	  <button class="cancelButton"><img src="icons/cancel.png"></button>
	</div>
	<hr>
	<form name="login" action="../controller/login.php" method="post">
	  <table class="popupFormTable">
	    <tr>
	      <td class="inputLabel">Username:</td>
	      <td class="inputBox"><input name="username" size="14"/></td>
	    </tr>
	    <tr>
	      <td class="inputLabel">Password:</td>
	      <td class="inputBox"><input name="password" type="password" size="14"/></td>
	    </tr>
	  </table>
	<center><input type="submit" name="submit" class="btn btn-default btn-lg" value="Login" id="loginSubmitButton"/></center>
	</form>
	<p class="assistantButton"><a href='reset.php'>Forgot your Password?</a></p>
	<p class="assistantButton"><a href='signup.php'>Create Account</a></p>
</div>