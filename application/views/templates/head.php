<?php
/**
 * CodeIgniter Template - A Simple Template System
 *
 * @package  CodeIgniter Template
 * @author   Natan Felles <natanfelles@gmail.com>
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @var string $title
 * @var array  $link_css
 * @var array  $inline_css
 */
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= isset($title) ? $title : 'CodeIgniter' ?></title>
	<?php
	if (isset($link_css)):
		?>
		<!-- Link CSS -->
		<?php
		foreach ($link_css as $link):
			?>
			<link rel="stylesheet" href="<?= $link ?>">
			<?php
		endforeach;
	endif;

	if (isset($inline_css)):
		?>
		<!-- Inline CSS -->
		<style type="text/css">
			<?php
				foreach ($inline_css as $inline):
					echo  $inline;
				endforeach;
			?>
		</style>
		<?php
	endif;
	?>
</head>
