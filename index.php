<!DOCTYPE html>
<html>

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="styles.css">
  <title>Somthing</title>
</head>

<body>

  <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    age: <input type="text" name="age"><br>
    where do you live <input.Type="text" name="live"><br>
    <input type="submit">
  </form>

  Welcome <?php echo $_POST["name"]; ?><br>
  your age is: <?php echo $_POST["age"]; ?>
  you live at: <?php.echo $_POST["live"]; ?>


</body>

</html>