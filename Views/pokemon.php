<?php
$option_list = '<option value="#">Select a Pok&eacute;mon</option>';
$gen_1_ids = range(1, 151);

for($i = $gen_1_ids[0]; $i <= end($gen_1_ids); $i++) {
  $option_list .= "<option value=\"index.php?id={$i}\">" . $i . "</option>";
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
      <p>Species: <?php echo $pokemon->species; ?></p>
      <p>Height: <?php echo $pokemon->height; ?> feet/inches</p>
      <p>Weight: <?php echo $pokemon->weight; ?> pounds</p>

      <ul class="base_stats">
        <li class="stat">
          <strong>HP</strong>
          <meter class="hp" max="255" value="<?php echo $pokemon->hp; ?>">
            <strong>HP</strong>
          </meter>
        </li>
        <li class="stat">
          <strong>Attack</strong>
          <meter class="attack" max="255" value="<?php echo $pokemon->attack; ?>">
            <strong>Attack</strong>
          </meter>
        </li>
        <li class="stat">
          <strong>Defence</strong>
          <meter class="defence" max="255" value="<?php echo $pokemon->defence; ?>">
            <strong>Defence</strong>
          </meter>
        </li>
        <li class="stat">
          <strong>Special Attack</strong>
          <meter class="special_attack" max="255" value="<?php echo $pokemon->special_attack; ?>">
            <strong>Special Attack</strong>
          </meter>
        </li>
        <li class="stat">
          <strong>Special Defence</strong>
          <meter class="special_defence" max="255" value="<?php echo $pokemon->special_defence; ?>">
            <strong>Special Defence</strong>
          </meter>
        </li>
        <li class="stat">
          <strong>Speed</strong>
          <meter class="speed" max="255" value="<?php echo $pokemon->speed; ?>">
            <strong>Speed</strong>
          </meter>
        </li>
      </ul>
    </div>
  </body>
</html>
