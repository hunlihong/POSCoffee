<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="./assets/css/form.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <title>Document</title>
</head>

<body>
  <div class="formcon">
    <form action="" class="form_main">
      <p class="heading">
        <img alt="coffee-logo" src="./assets/images/coffee.png" />
      </p>
      <div class="inputContainer">
        <span class="material-symbols-outlined inputIcon">alternate_email</span>
        <input type="text" class="inputField" id="username-txt" placeholder="Username" />
      </div>
      <div class="inputContainer">
        <span class="material-symbols-outlined inputIcon">lock</span>
        <input type="password" class="inputField" id="password-txt" placeholder="Password" />
      </div>
      <button type="button" id="button">Login</button>
    </form>
  </div>

  <script type="text/javascript" src="./assets/js/jquery-3.7.1.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#button").click(function() {
        let username_txt = $("#username-txt").val();
        let password_txt = $("#password-txt").val();

        let request = $.ajax({
          type: "POST",
          url: "../src/modules/handle-sign-in.php",
          data: {
            username: username_txt,
            password: password_txt,
          },
          success: handle_sign_in_response,
        });
      });
    });

    function handle_sign_in_response(response) {
      console.log(response);
      let parsed_response = JSON.parse(response);
      if (parsed_response.status) {
        alert("sign-in success");
        header("Location: menu.php");
      } else {
        alert("sign-in invalid");
      }
    }
  </script>
</body>

</html>