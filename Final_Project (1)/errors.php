<?php  if (count($errors) > 0) : ?>
  <div class="error">
  <p class="alert">ALERT</p>
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>