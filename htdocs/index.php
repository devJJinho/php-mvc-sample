<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1> hi</h1>
	<h1>
<?php
	define('_ROOT',dirname(__FILE__)."/");
    define('_APP',_ROOT."application/");
    define('_PUBLIC',_ROOT."public/");
    define('_MODEL',_APP."model/");
    define('_CONFIG',_APP."config/");
    define('_CONTROLLER',_APP."controller/");
    define('_VIEW',_APP."view/");
    $url = str_replace("index.php","","http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}");
    define('_URL',$url);
    define('_IMG',_URL.'public/img/');
    define('_CSS',_URL.'public/common/css/');
    define('_JS',_URL.'public/common/js/');

    require_once(_CONFIG."lib.php");
    new Application();
?>
</h1>

</body>
</html>


