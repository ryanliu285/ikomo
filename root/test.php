<!-- add tutorials for each thing -->
<!DOCTYPE html>

<html>

<head>
  <title>VEI iKOMO!</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="https://i.kym-cdn.com/entries/icons/original/000/017/403/218_copy.jpg" /> <!-- placeholder favicon -->
</head>

<body>

  <div class="container-fluid" onclick="closeSignUp" onclick="closeLogin">
    <div class="row">
      <div class="col-md-4">
        <h2>Welcome, Brandon</h2> <!-- write a function in order to say, welcome User -->
      </div>
      <div class="col-md-4">
        <h2>Credit 100 Ether</h2> <!-- write a function to determine amount of ether in account -->
      </div>
      <div class="col-md-4">
        <a href = "logout.php">LOGOUT</a>

      </div>
    </div>

  </div>
  <div class="container" id="signUpL">
    <div class="row">
      <div class="col-md-3">
        <img src="https://cryptokitties411.files.wordpress.com/2018/02/miss-canada.png?w=310&h=278">
      </div>
      <div class="col-md-6">
        <form id="register" action="FILL IN WITH PHP FILE" method="post" accept-charset="UTF-8">  <!-- needs finalized sign up php file -->
          <fieldset>
            <legend>
              <center>
                <h2>Sign Up for iKOMO!</h2>
              </center>
            </legend>
            <input type="hidden" name="submitted" id="submitted" value="1" />
            <br><label for "name"> Your Name*: </label>
            <input type="text" name="name" id="name" maxlength="50" /></br>
            <br><label for "email">Email Address*: </label>
            <input type="text" name="email" id="email" maxlength="50" /></br>
            <br><label for "username"> Your VEI username*: </label>
            <input type="text" name="username" id="username" maxlength="50" /></br>
            <br><label for "password"> Password*: </label>
            <input type="text" name="password" id="username" maxlength="50" /></br>
            <br><input type="submit" name="Submit" value="Submit" style="margin-bottom:30px" /></br>
          </fieldset>
        </form>
      </div>
      <div class="col-md-3">
        <img src="https://cryptokitties411.files.wordpress.com/2018/02/miss-canada.png?w=310&h=278">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    var frmvalidator = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name", "req", "Please provide your name");
    frmvalidator.addValidation("email", "req", "Please provide your email address");
    frmvalidator.addValidation("username", "req", "Please provide your VEI username");
    frmvalidator.addValidation("password", "req", "Please provide a password");
  </script>
  <script type="text/javascript">
    var signup = document.getElementById("signUpL");

    function openSignUp() {
      signup.style.display = "block";
    }

    function closeSignUp() {
      signup.style.display = "none";
    }
  </script>
  <script type="text/javascript">
    var login = document.getElementById("LoginL");

    function openLogin() {
      login.style.display = "block";
    }

    function closeLogin() {
      login.style.display = "none";
    }
  </script>
</body>

</html>
