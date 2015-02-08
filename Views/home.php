<?php
$option_list = '<option value="#">Select a Pok&eacute;mon</option>';
$gen_1_ids = range(1, 151);

for($i = $gen_1_ids[0]; $i <= end($gen_1_ids); $i++) {
  $option_list .= "<option value='index.php?id={$i}'>" . $i . "</option>";
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
    </div>
  </body>
</html>
