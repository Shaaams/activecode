<?php

//include database connection 
include 'configdb.php';

//Declaration the constants And Check If Exists OR Not
defined('TEMP') ? null : define('TEMP', 'includes/templates/');
defined('FUNC') ? null : define('FUNC', 'includes/functions/');
defined('LANG') ? null : define('LANG', 'includes/languages/');
defined('CSS')  ? null : define('CSS', 'layouts/css/');
defined('JS')   ? null : define('JS', 'layouts/js/');
defined('IMG')  ? null : define('IMG', 'layouts/images/');
defined('LOGO') ? null : define ('LOGO', 'layouts/images/logo.png');
defined('PAGE') ? null : define('PAGE', 'pages/');

//Include All Function 
include LANG . "english.php"; 
include FUNC . "functions.php"; 




// Include All Templates
include TEMP . 'header.php';
