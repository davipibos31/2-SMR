<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Full contact form</title>
  </head>
  <body>
    <?php
    // The global $_GET variable allows you to access the data sent with the GET
method by name
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

// We put all data into the file "messages.csv" in a new line each time
file_put_contents("messages.csv", "$name;$email;$message\n", FILE_APPEND);

 // We show a link to the previous page and also to the file to check the
results
echo "<p>Data saved</p>";
echo "<p>Click <a href='".$_SERVER['HTTP_REFERER']."'>here</a> to go
back</p>";
echo "<p>Click <a href='messages.csv' target='_blank'>here</a> to see all
messages</p>";
?>
  </body>
</html>
