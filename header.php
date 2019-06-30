<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Login Traning" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css"/>
  </head>
  <body>
    <!-- The Head Of Page-->
    <header>
      <!-- The Navbar Of Page-->
      <nav>
        <a class="header-logo" href="#">
          <img src="img/logo2.png" alt="logo"/>
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li>
            <a href="#" id="about">AboutMe</a>
          </li>
        </ul>
      </nav>
        <!-- The Login Of Page-->
      <div class="header-login">
        <form class="login-f"  method="post">
          <input type="text" name="userin" placeholder="Username E-mail"  />
          <input type="password" name="pwd" placeholder="Password"  />
          <button type="submit" name="login-submit">Login</button>
        </form>
        <form class="login-f" action="includes/login.inc.php" method="post">
          <input type="text" name="userin" placeholder="Username E-mail"/>
          <input type="password" name="pwd" placeholder="Password" />
          <button type="submit" name="login-submit">Login</button>
        </form>
        <!-- The Register Of Page-->
        <a href="signup.php" class="signup-l">SignUp</a>
        <!-- The signout Of Page-->
        <form class="signout-f" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </header>
    <!-- End Of Header -->
