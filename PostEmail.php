<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Email</title>
  </head>
  <body>
    <?php
        $myEmailAddress = "hovhan198@gmail.com";
        $subject = "Question from Me!";

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];
        $header = "from: $name $email";

        mail($myEmailAddress, $subject, $message, $header);

    ?>
    <h2>Thank you for your feedback</h2>
  </body>
</html>
