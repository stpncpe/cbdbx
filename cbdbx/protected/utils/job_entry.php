<?php
// change the following paths if necessary 
$yii='/opt/lampp/htdocs/yii/framework/yii.php';
$config=dirname(__FILE__).'/../config/main.php';

// remove the following lines when in production mode 
defined('YII_DEBUG') or define('YII_DEBUG',true); 
// specify how many levels of call stack should be shown in each log message 
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0); 
require_once($yii); 
$app = Yii::createConsoleApplication($config)->run();
?>

