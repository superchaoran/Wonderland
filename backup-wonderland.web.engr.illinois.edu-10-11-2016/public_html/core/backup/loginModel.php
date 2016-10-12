<div id="loginmodal1" style="display:none;" class = "loginmodal">
    <h1>User Login</h1>
    <form id="loginform" name="loginform" method="post" action="login.php" class = "loginform">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
  <div id="loginmodal2" style="display:none;" class = "loginmodal">
    <h1>User signup</h1>
    <form id="signupform" name="signupform" method="post" action="" class = "loginform">
      <label for="email">email address:</label>
      <input type="text" name="email" id="email" class="txtfield" tabindex="1">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      <label for="retype">Retype password:</label>
      <input type="retype" name="retype" id="retype" class="txtfield" tabindex="2">
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Sign up" tabindex="3"></div>
    </form>
  </div>