<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP MVC</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
    <div class="content">
      <?php require '_header.html'; ?>
      <?php require '_navigation.php'; ?>

      <h1>Name: <?php echo $name; ?></h1>
      <p>Height: <?php echo $height; ?> feet</p>
      <p>Weight: <?php echo $weight; ?> pounds</p>
    </div>
  </body>
</html>
