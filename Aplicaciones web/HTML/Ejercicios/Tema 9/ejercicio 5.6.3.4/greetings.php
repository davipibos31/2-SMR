<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Full greetings form</title>
  </head>
  <body>
    <?php
     // The global $_GET variable allows you to access the data sent with the GET
     method by name
     $say = $_GET['say'];
     $to = $_GET['to'];

    // We put all data into the file "greetings.csv" in a new line each time
   file_put_contents("greetings.csv", "$say,$to\n", FILE_APPEND);

   // We show a link to the previous page and also to the file to check the
    results
    echo "<p>Data saved</p>";
    echo "<p>Click <a href='".$_SERVER['HTTP_REFERER']."'>here</a> to go back</p>";
    echo "<p>Click <a href='greetings.csv' target='_blank'>here</a> to see all messages</p>";
    ?>
  </body>
</html>
