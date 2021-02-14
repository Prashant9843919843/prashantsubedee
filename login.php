<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.google.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
      <title>Prashant</title>
      <style>
body{
  position: relative;
  background-color: black;
 }
</style>
</head>
<body>
<form method="post" action="register.php">
  	
  	<div class="input-group">
  	  <label class="text-white">Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label class="text-white">Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label class="text-white">Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label class="text-white">Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		 <a href="index.php"> Already a member? log in</a>
  	</p>
  </form>

</body>
</html>