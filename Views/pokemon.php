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
          <img src="<?= $pokemon->sprite_url; ?>" alt="<?= $pokemon->name; ?>" />
        </div>
        <h1>Name: <?= $pokemon->name; ?></h1>
        <p>Species: <?= $pokemon->species; ?></p>
        <p>Height: <?= $pokemon->height . ' meter' . ($pokemon->height == 1 ? '' : 's'); ?></p>
        <p>Weight: <?= $pokemon->weight . ' kilogram' . ($pokemon->weight == 1 ? '' : 's'); ?></p>
        <span class="types <?= $pokemon->type_one; ?>"><?= $pokemon->type_one; ?></span>
        <?php if ($pokemon->type_two): ?>
          <span class="types <?= $pokemon->type_two; ?>"><?= $pokemon->type_two; ?></span>
        <?php endif; ?>
      </div>

      <div class="well">
        <ul class="base_stats">
          <li class="stat">
            <strong>HP: <?= $pokemon->hp; ?></strong>
            <meter class="hp" max="255" value="<?= $pokemon->hp; ?>">
          </li>
          <li class="stat">
            <strong>Attack: <?= $pokemon->attack; ?></strong>
            <meter class="attack" max="255" value="<?= $pokemon->attack; ?>" />
          </li>
          <li class="stat">
            <strong>Defence: <?= $pokemon->defence; ?></strong>
            <meter class="defence" max="255" value="<?= $pokemon->defence; ?>" />
          </li>
          <li class="stat">
            <strong>Special Attack: <?= $pokemon->special_attack; ?></strong>
            <meter class="special_attack" max="255" value="<?= $pokemon->special_attack; ?>" />
          </li>
          <li class="stat">
            <strong>Special Defence: <?= $pokemon->special_defence; ?></strong>
            <meter class="special_defence" max="255" value="<?= $pokemon->special_defence; ?>" />
          </li>
          <li class="stat">
            <strong>Speed: <?= $pokemon->speed; ?></strong>
            <meter class="speed" max="255" value="<?= $pokemon->speed; ?>" />
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
