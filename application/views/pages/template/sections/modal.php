<?php
/**
 * CodeIgniter Template - A Simple Template System
 *
 * @package  CodeIgniter Template
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Modal -->
<div class="modal fade" id="learn-more" tabindex="-1" role="dialog" aria-labelledby="Learn more">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">CodeIgniter Template</h4>
			</div>
			<div class="modal-body">
				<h2>A Simple Template System to CodeIgniter</h2>
				<h3>Controllers usage</h3>
				<p>Language</p>
				<pre>$data['lang'] = 'pt-BR';</pre>
				<p>Page located in application/views/pages/template/index.php</p>
				<pre>$data['page'] = 'template/index';</pre>
				<p>Page Title</p>
				<pre>$data['title'] = 'CodeIgniter Template';</pre>
				<p>Body Attributes</p>
				<pre>$data['body_attr'] = 'class="grey"';</pre>
				<p>CSS links</p>
				<pre>$data['link_css'] = array(<?= PHP_EOL . "\t" ?>'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',<?= PHP_EOL . "\t" ?>base_url('assets/css/styles.css'),<?= PHP_EOL ?>);</pre>
				<p>CSS inline. Used just in the current page</p>
				<pre>$data['inline_css'] = array(<?= PHP_EOL . "\t" ?>'body {padding-top: 70px}',<?= PHP_EOL . "\t" ?>'a {color: #dd4814}',<?= PHP_EOL ?>);</pre>
				<p>JS links</p>
				<pre>$data['link_js'] = array(<?= PHP_EOL . "\t" ?>'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',<?= PHP_EOL . "\t" ?>'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',<?= PHP_EOL . "\t" ?>base_url('assets/js/scripts.js'),<?= PHP_EOL ?>);</pre>
				<p>JS inline. Uses jQuery! See application/views/templates/scripts.php</p>
				<pre>$data['inline_js'] = array( <?= PHP_EOL . "\t" ?>'$("#learn-more").modal({keyboard: false, show: false})',<?= PHP_EOL ?>);</pre>
				<p>Loads the main view and set dynamic data</p>
				<pre>$this->load->view('html', $data);</pre>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
