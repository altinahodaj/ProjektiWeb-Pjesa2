<?php

include './components/header.php' ?>

<div class="container">
  <div class="link-container">
    <a id="firstA" href="#">Login</a>
  </div>
  <form id="mainForm" action="loginVerify.php" method="post" onsubmit="return validate()">
    <div class="login forms form-style">
      <label for="">Username:</label>
      <input type="text" name='username' class="input" placeholder="username..." />
      <label for="">Password:</label>
      <input type="password" name='password' class="input" placeholder="password..." />
      <input id="submit" type="submit" name='login-btn' class="input submit" value="Login" />
    </div>
  </form>
</div>

<?php

include './components/footer.php' ?>