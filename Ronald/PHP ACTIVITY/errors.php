<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  		<b style="color: red;"><?php echo $error ?></b>
		<br>
  	<?php endforeach ?>
  </div>
<?php  endif ?>