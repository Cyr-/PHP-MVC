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

      <?php echo $title; ?>
      <?php echo $content; ?>
      <?php echo $created_at; ?>
    </div>
  </body>
</html>
