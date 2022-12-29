


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Create Account</h2>
      </div>
      <form id="form" class="form">
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Username" id="username" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Email</label>
          <input type="email" name="email" placeholder="Email" id="email" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Password</label>
          <input type="password" name="password" placeholder="Password" id="password" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Password check</label>
          <input type="password" name="cpassword" placeholder="Password two" id="password2" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
        <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
          
          <input class="form-btn" type="submit" name="submit" value="Register now">
        <p>Already have an account ? <a href="login.php">Login now</p>
        </div>
          </div>
        

        
    <script>
      const form = document.getElementById("form");
      const username = document.getElementById("username");
      const email = document.getElementById("email");
      const password = document.getElementById("password");
      const password2 = document.getElementById("password2");

      form.addEventListener("submit", (e) => {
        e.preventDefault();

        checkInputs();
      });

      function checkInputs() {
        // trim to remove the whitespaces
        const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        const password2Value = password2.value.trim();

        if (usernameValue === "") {
          setErrorFor(username, "Username cannot be blank");
        } else {
          setSuccessFor(username);
        }

        if (emailValue === "") {
          setErrorFor(email, "Email cannot be blank");
        } else if (!isEmail(emailValue)) {
          setErrorFor(email, "Not a valid email");
        } else {
          setSuccessFor(email);
        }

        if (passwordValue === "") {
          setErrorFor(password, "Password cannot be blank");
        } else {
          setSuccessFor(password);
        }

        if (password2Value === "") {
          setErrorFor(password2, "Password2 cannot be blank");
        } else if (passwordValue !== password2Value) {
          setErrorFor(password2, "Passwords does not match");
        } else {
          setSuccessFor(password2);
        }
      }

      function setErrorFor(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector("small");
        formControl.className = "form-control error";
        small.innerText = message;
      }

      function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = "form-control success";
      }

      function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
          email
        );
      }
    </script>
  </body>
</html>