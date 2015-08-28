<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';

// automatically switch between production and development configurations
switch ($_SERVER['SERVER_NAME']) {	
    case "mailnetwork.local":	
    case "localhost":
        $config=dirname(__FILE__).'/protected/config/development.php';
        // remove the following lines when in production mode
        defined('YII_DEBUG') or define('YII_DEBUG',true);
        break;

    default:
        $config=dirname(__FILE__).'/protected/config/main.php';
        break;
}

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
