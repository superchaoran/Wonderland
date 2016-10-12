<div id="loginmodal1" style="display:none;" class = "loginmodal">
    <h1 style="color:#7c8291; text-align: center; font-size: 200%; margin-bottom:20px;">User Login</h1>
    <form id="loginform" name="loginform" method="post" action="/core/login.php" class = "loginform">
      <label for="username">Email:</label>
      <input type="text" name="email" id="email" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
  <div id="loginmodal2" style="display:none;color:black;" class = "loginmodal">
    <h1 style="color:#7c8291; text-align: center; font-size: 200%; margin-bottom:20px;">User Signup</h1>
    <form id="signupform" name="signupform" method="post" action="/core/register/register.php" class = "loginform">
      <label for="email">Email Address:</label>
      <input type="text" name="email" id="email" class="txtfield" tabindex="1">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      <label for="retype">Retype Password:</label>
      <input type="password" name="retype" id="retype" class="txtfield" tabindex="2">
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Sign up" tabindex="3"></div>
    </form>
  </div>
