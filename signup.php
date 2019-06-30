<?php require "header.php" ?>
  <main>
    <scetion class="section-default">
        <form id="formone" onsubmit="return crousa();" name="signform" class="signup-form" action="includes/signup.inc.php" method="post" >
          <input type="text" name="unm" placeholder="Username" minlength="6" maxlength="20" required />
          <span id="errorUser"></span>
          <br/>
          <input type="email" name="mail" placeholder="E-mail" minlength="15" maxlength="42" required/>
          <span id="errorEmail"></span>
          <br/>
          <input type="password" name="pwdr" placeholder="Password" minlength="12" maxlength="22" required/>
          <span id="errorPass"></span>
          <br/>
          <input type="password" name="pwdrc" placeholder="Confirm Password" minlength="12" maxlength="22" required/>
          <span id="errorPassC"></span>
          <br/>
          <button type="submit" name="signupsubmit">SignUp</button>
          <p id="submitError"></p>
        </form>

    </scetion>
  </main>
<?php require "footer.php" ?>
