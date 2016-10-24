<?php
/**
 * CodeIgniter Template - A Simple Template System
 *
 * @package  CodeIgniter Template
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @var array $link_js
 * @var array $inline_js
 */

if (isset($link_js)):
	?>
	<!-- Link JS -->
	<?php
	foreach ($link_js as $link):
		?>
		<script src="<?= $link ?>" type="text/javascript"></script>
		<?php
	endforeach;
endif;

if (isset($inline_js)):
	?>
	<!-- Inline JS -->
	<script type="text/javascript">
		<?php
		foreach ($inline_js as $inline):
			echo $inline;
		endforeach;
		?>
	</script>
	<?php
endif;
?>
