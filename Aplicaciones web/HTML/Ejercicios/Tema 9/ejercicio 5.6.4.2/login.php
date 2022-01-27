<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Full login form</title>
  </head>
  <body>
    <?php
    // The global $_POST variable allows you to access the data sent with the
    POST method by name
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Check the user and the password
    if ($user == "admin" && $password == "1234") {
      echo "<img src='https://raw.githubusercontent.com/twbs/icons/main/icons/hand-thumbs-up.svg' width='100' />";
      echo "<p>Perfect! :-)</p><p>Click <a href='".$_SERVER['HTTP_REFERER']."'>here</a> to go back</p>";
    }
    else {
      echo "<img src='https://raw.githubusercontent.com/twbs/icons/main/icons/hand-thumbsdown.svg' width='100' />";
      echo "<p>Invalid user or password! :-(</p><p>Click <a href='".$_SERVER['HTTP_REFERER']."'>here</a> to try again</p>";
    }
    ?>
  </body>
</html>
