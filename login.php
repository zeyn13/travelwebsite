<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <h1>LOGIN</h1>
    <br /><br />

    <form action="#" method="post">
      <div>
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Enter your username" />
      </div>

      <label for="password">Password:</label>
      <input
        type="password"
        name="password"
        placeholder="Enter your password"
      />
      <div>
        <input type="submit" value="Login" class="buton" />
        <div class="signup-link">
          Not a member? <a href="register.php">Register</a>
        </div>
      </div>
    </form>
  </body>
</html>