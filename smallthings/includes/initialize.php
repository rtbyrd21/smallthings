<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null :
define('SITE_ROOT', ($_SERVER['DOCUMENT_ROOT']));
//define('SITE_ROOT', DS.'Applications'.DS.'MAMP'.DS.'htdocs'.DS.'final');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

require_once("config.php");
require_once("products.php");
require_once("functions.php");
require_once("session.php");
require_once("database.php");
require_once("database_object.php");
require_once("user.php");
require_once("photograph.php");
require_once("stories.php");
require_once("submitted_stories.php");

?>