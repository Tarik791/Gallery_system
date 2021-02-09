<?php 

//Path
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//ODREDITE SVOJ FOLDER DA BI PATH FUNKCIONISAO!!!!!!!!!
define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'example' . DS . 'cms_template');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');


require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."config.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."user.php");
require_once(INCLUDES_PATH.DS."photo.php");
require_once(INCLUDES_PATH.DS."session.php");
require_once(INCLUDES_PATH.DS."paginate.php");

?>