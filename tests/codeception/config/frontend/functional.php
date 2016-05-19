<?php
$_SERVER['SCRIPT_FILENAME'] = FRONTEND_ENTRY_FILE;
$_SERVER['SCRIPT_NAME'] = FRONTEND_ENTRY_URL;

/**
 * Application configuration for frontend functional tests
 */
return yii\helpers\ArrayHelper::merge(
    require(YII_APP_BASE_PATH . '/config/common/main.php'),
    require(YII_APP_BASE_PATH . '/config/common/main-local.php'),
    require(YII_APP_BASE_PATH . '/config/frontend/main.php'),
    require(YII_APP_BASE_PATH . '/config/frontend/main-local.php'),
    require(dirname(__DIR__) . '/config.php'),
    require(dirname(__DIR__) . '/functional.php'),
    require(__DIR__ . '/config.php'),
    [
    ]
);
