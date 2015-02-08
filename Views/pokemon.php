<?php
$option_list = '<option value="#">Select a Pok&eacute;mon</option>';
$gen_1_ids = range(1, 151);

for($i = $gen_1_ids[0]; $i <= end($gen_1_ids); $i++) {
  $option_list .= "<option value=\"index.php?id={$i}\">" . $i . "</option>";
}
?>
<!DOCTYPE html>
<html>
  <?php require 'Partials/_head.html'; ?>
  <body>
    <div class="content">
      <?php require 'Partials/_header.html'; ?>
      <?php require 'Partials/_navigation.php'; ?>

      <select onChange="window.location.href=this.value">
        <?php echo $option_list; ?>
      </select>

      <div class="well">
        <div class="sprite">
          <img src="<?php echo $pokemon->sprite_url; ?>" alt="<?php echo $pokemon->name; ?>" />
        </div>
        <h1>Name: <?php echo $pokemon->name; ?></h1>
        <p>Species: <?php echo $pokemon->species; ?></p>
        <p>Height: <?php echo $pokemon->height; ?> meters</p>
        <p>Weight: <?php echo $pokemon->weight; ?> kilograms</p>
      </div>

      <div class="well">
        <ul class="base_stats">
          <li class="stat">
            <strong>HP: <?php echo $pokemon->hp; ?></strong>
            <meter class="hp" max="255" value="<?php echo $pokemon->hp; ?>">
          </li>
          <li class="stat">
            <strong>Attack: <?php echo $pokemon->attack; ?></strong>
            <meter class="attack" max="255" value="<?php echo $pokemon->attack; ?>" />
          </li>
          <li class="stat">
            <strong>Defence: <?php echo $pokemon->defence; ?></strong>
            <meter class="defence" max="255" value="<?php echo $pokemon->defence; ?>" />
          </li>
          <li class="stat">
            <strong>Special Attack: <?php echo $pokemon->special_attack; ?></strong>
            <meter class="special_attack" max="255" value="<?php echo $pokemon->special_attack; ?>" />
          </li>
          <li class="stat">
            <strong>Special Defence: <?php echo $pokemon->special_defence; ?></strong>
            <meter class="special_defence" max="255" value="<?php echo $pokemon->special_defence; ?>" />
          </li>
          <li class="stat">
            <strong>Speed: <?php echo $pokemon->speed; ?></strong>
            <meter class="speed" max="255" value="<?php echo $pokemon->speed; ?>" />
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
