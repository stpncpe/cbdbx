<?php

// change the following paths if necessary
//$yiit=dirname(__FILE__).'/../../../../../../opt/lampp/htdocs/yii-1.1.16.bca042/framework/yiit.php';
$yiit='/opt/lampp/htdocs/yii-1.1.16.bca042/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
