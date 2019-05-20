<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <body class="align">

  <div class="grid">

    <form action="view.php" method="post" class="form login">

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="email" name="user"  placeholder="Email" required>
        </div>

        <div class="form__field">
          <input type="password" name="pass" placeholder="Password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" id="btn" value="Login">

        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>

    </form>

  </div>

</body>
  
  

</body>

</html>
