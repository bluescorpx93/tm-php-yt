<?php
  if (isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);
    setcookie('username', $username, time()+3600);
    header('Location: pg2.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Cookie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type='text' name='username' placeholder="Username" />
    <input type='submit' name='submit' value='Submit' />
  </form>
</body>
</html>