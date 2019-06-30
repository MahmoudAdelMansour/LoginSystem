<?php require "header.php" ?>
  <main>
    <scetion class="section-default">
      <p id='error'></p>
        <form id="formone" name="signform" class="signup-form" action="includes/signup.inc.php" method="post" onsubmit="return secureform()">
          <input type="text" name="unm" placeholder="Username" minlength="6" maxlength="20" required />
          <br/>
          <input type="email" name="mail" placeholder="E-mail" minlength="6" maxlength="20" required/>
          <br/>
          <input type="password" name="pwdr" placeholder="Password" minlength="6" maxlength="20" required/>
          <br/>
          <input type="password" name="pwdrc" placeholder="Confirm Password" minlength="6" maxlength="20" required/>
          <br/>
          <button type="submit" name="signup-submit">SignUp</button>
        </form>
    </scetion>
  </main>
<?php require "footer.php" ?>
