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

      <h1><?php echo $title; ?></h1>
      <p><?php echo $content; ?></p>
      <p><?php echo $created_at; ?></p>
    </div>
  </body>
</html>
