<?php
/**
 * CodeIgniter Template - A Simple Template System
 *
 * @package  CodeIgniter Template
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Template
 *
 * An example page using CodeIgniter Template
 */
class Template extends CI_Controller {


	/**
	 * Template constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helpers(['url']);
	}


	/**
	 * Template index
	 */
	public function index()
	{
		// Language
		$data['lang'] = 'pt-BR';

		// Page located in application/views/pages/template/index.php
		$data['page'] = 'template';

		// Page Title
		$data['title'] = 'CodeIgniter Template';

		// Body Attributes
		$data['body_attr'] = 'class="grey"';

		// CSS links
		$data['link_css'] = array(
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', // External
			base_url('assets/css/styles.css'), // Internal
		);

		// CSS inline. Used just in the current page
		$data['inline_css'] = array(
			'body {padding-top: 70px}',
			'.grey {background-color: #f9f9f9}',
			'.jumbotron {background-color: #343131; color: #b3b3b3 }',
			'h1 {color: #fff !important}',
			'.glyphicon-fire {color: #dd4814; font-size: 150%}',
			'.btn-primary {background-color: #f9f9f9; color: #dd4814; border: 0}',
			'.btn-primary:hover {background-color: #dd4814; color: #fff}',
			'.btn-primary:focus {background-color: #dd4814 !important; color: #fff}',
			'.btn-primary:active {background-color: #4e4a4a !important; color: #fff}',
			'a {color: #dd4814 !important}',
		);

		// JS links
		$data['link_js'] = array(
			'https://code.jquery.com/jquery-2.2.4.min.js', // External
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', // External
			base_url('assets/js/scripts.js'), // Internal
		);

		// JS inline. Uses jQuery! See application/views/templates/scripts.php
		$data['inline_js'] = array(
			'$("#learn-more").modal({keyboard: false, show: false})',
		);

		// Loads the main view and set dynamic data
		$this->load->view('html', $data);
	}

}
