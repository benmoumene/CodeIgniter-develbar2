<?php defined('BASEPATH') or die('No direct script access.');

/*
|--------------------------------------------------------------------------
| Developer's Toolbar
|--------------------------------------------------------------------------
|
| This option allows you to enable the developer's Toolbar
|
*/
$config['enable_develbar'] = TRUE;

/*
|--------------------------------------------------------------------------
| Check for update
|--------------------------------------------------------------------------
|
| This option allows you to check if there is any new version for CodeIgniter
| if this option is set to TRUE, it will slow down the page loading
|
*/
$config['check_update'] = FALSE;

$config['documentation_link'] = 'http://www.codeigniter.com/userguide3/';

$config['ci_website'] = 'http://www.codeigniter.com';

$config['ci_download_linked'] = 'http://www.codeigniter.com/download';

$config['ci_update_uri'] = 'https://raw.githubusercontent.com/bcit-ci/CodeIgniter/develop/system/core/CodeIgniter.php';

/*
|--------------------------------------------------------------------------
| Debug Sections
|--------------------------------------------------------------------------
|
| This option allows you to enable specific sections into the Developer's Toolbar
|
*/
$config['develbar_sections'] = array(
	'Benchmarks' 		=> TRUE,
    'Memory Usage'	   	=> TRUE,
    'Request'   		=> TRUE,
    'Database'			=> TRUE,
    'Hooks'				=> TRUE,
    'Libraries'			=> TRUE,
    'Helpers' 			=> TRUE,
    'Views' 			=> TRUE,
    'Config' 			=> TRUE,
    'Session' 			=> TRUE,
    'Models' 			=> TRUE,
);