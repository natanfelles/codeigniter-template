<?php
/**
 * CodeIgniter Template - A Simple Template System
 *
 * @package  CodeIgniter Template
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @var CI_Controller $this
 */
?>
	<div class="container">
		<div class="jumbotron">
			<h1><span class="glyphicon glyphicon-fire"></span> CodeIgniter Template</h1>
			<p>This is a simple example page.</p>
			<p>
				<button class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#learn-more">
					<span class="glyphicon glyphicon-book"></span> Learn more
				</button>
			</p>
		</div>
		<div class="text-right">
			Created by
			<a href="https://natanfelles.github.io" target="_blank">Natan Felles</a>
		</div>
	</div>
<?php
$this->load->view('pages/template/sections/modal');
