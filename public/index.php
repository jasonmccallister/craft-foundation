<?php

// Path to your craft/ folder
$craftPath = '..';

// Setup environment-friendly configs
switch ($_SERVER['SERVER_NAME']) {

	case 'DOMAINNAME.COM' :
		define('CRAFT_ENVIRONMENT', 'live');
		break;

	case 'DEV.DOMAINNAME.COM' :
		define('CRAFT_ENVIRONMENT', 'dev');
		break;

	default :
		define('CRAFT_ENVIRONMENT', 'local');
		break;

}

// PHP constants
define('CRAFT_TEMPLATES_PATH', '../templates/');
define('CRAFT_STORAGE_PATH', '../storage/');
define('CRAFT_PLUGINS_PATH', '../plugins/');

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
