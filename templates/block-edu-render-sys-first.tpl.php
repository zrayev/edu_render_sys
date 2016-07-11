<?php
  if (!empty($edu_block['message1'])) {
    hide($edu_block['message1']);
  }
?>
<div class="test-messages-wrapper">
  <?php print drupal_render_children($edu_block); ?>
</div>

<?php
  if (!empty($edu_block['message1'])) {
    show($edu_block['message1']);
    print drupal_render($edu_block['message1']);
  }
?>
