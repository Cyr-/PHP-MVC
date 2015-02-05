<?php
$option_list = '<option value="#">Select a Pok&eacute;mon</option>';
$gen_1_ids = range(1, 151);

for($i = $gen_1_ids[0]; $i <= end($gen_1_ids); $i++) {
  $option_list .= "<option value='index.php?id={$i}'>" . $i . "</option>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP MVC</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
    <div class="content">
      <?php require 'Partials/_header.html'; ?>
      <?php require 'Partials/_navigation.php'; ?>

      <select onChange="window.location.href=this.value">
        <?php echo $option_list; ?>
      </select>

      <h1>Name: <?php echo $pokemon->name; ?></h1>
      <p>Height: <?php echo $pokemon->height; ?> feet/inches</p>
      <p>Weight: <?php echo $pokemon->weight; ?> pounds</p>
    </div>
  </body>
</html>
