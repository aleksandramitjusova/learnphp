<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$vars)
{
    echo '<pre>';
    var_dump(...$vars);
    echo '<pre>';
}


spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    $class = str_replace('\\');
    require_once __DIR__ . "/../src/$class.php";

});

use App\Controllers\PublicController as PC;

$controller = new App\Controllers\PublicController();
$router = new Router();
$db = new App\DB();
dump($router,$db);
