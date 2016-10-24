<?php
/**
 * CodeIgniter Template - A Simple Template System
 *
 * @package  CodeIgniter Template
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @var string        $lang
 * @var string        $body_attr
 * @var string        $page
 *
 * @var CI_Controller $this
 */
?>
<!doctype html>
<html lang="<?= isset($lang) ? $lang : 'en' ?>">
<?php
$this->load->view('templates/head');
?>
<body<?= isset($body_attr) ? " {$body_attr}" : '' ?>>
<?php
$filepath = '';
$path = explode('/', $page);
if ( ! isset($path[1]))
{
	array_push($path, 'index');
}
foreach ($path as $item)
{
	$filepath .= "/{$item}";
}
$this->load->view("pages/{$filepath}");
$this->load->view('templates/scripts');
?>
</body>
</html>
