# CodeIgniter Template

A Simple Template System to CodeIgniter

## Controllers usage

* Language
```php
$data['lang'] = 'pt-BR';
```

* Page located in application/views/pages/template/index.php
```php
$data['page'] = 'template/index';
```

* Page Title
```php
$data['title'] = 'CodeIgniter Template';
```

* Body Attributes
```php
$data['body_attr'] = 'class="grey"';
```
* CSS links
```php
$data['link_css'] = array(
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
			base_url('assets/css/styles.css'),
		);
```

* CSS inline. Used just in the current page
```php
$data['inline_css'] = array(
	'body {padding-top: 70px}',			
	'a {color: #dd4814}',
);
```

* JS links
```php
$data['link_js'] = array(
	'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
	'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',			
	base_url('assets/js/scripts.js'),
);
```

* JS inline.
```php
$data['inline_js'] = array(
	'$("#learn-more").modal({keyboard: false, show: false})',
);
```

* Loads the main view and set dynamic data
```php
$this->load->view('html', $data);
```
