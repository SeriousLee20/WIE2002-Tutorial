<?php

$selected_colors = filter_input(
	INPUT_POST,
	'colors',
	FILTER_SANITIZE_STRING,
	FILTER_REQUIRE_ARRAY
);
?>

<?php if ($selected_colors) : ?>
	<p>You selected the following colors:</p>
	<ul>
		<?php foreach ($selected_colors as $color) : ?>
			<li style="color:<?php echo $color ?>"><?php echo $color ?></li>
		<?php endforeach ?>
	</ul>
	<p>

	</p>

<?php else : ?>
	<p>You did not select any color.</p>
<?php endif ?>
<a href="tutorial6.php">Back to the form</a>