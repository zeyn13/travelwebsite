<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="loginstyle.css" />
  </head>
  <body>
    <div class="form-container">
      <form action="" method="post">
        <h3>Login now</h3>
        <input
          type="email"
          name="email"
          required
          placeholder="Enter your email"
        />
        <input
          type="password"
          name="password"
          required
          placeholder="Enter your password"
        /> 
        <input
          type="submit"
          name="submit"
          value="Login now"
          class="form-btn"
        />
        <p>Don't have an ccount ? <a href="register.php">Register now</a></p>
      </form>
    </div>
  </body>
</html>
