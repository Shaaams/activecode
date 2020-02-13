<?php
//Declaration the constants
define('TEMP', 'includes/templates/');
define('LANG', 'includes/languages/');
define('FUNC', 'includes/functions/');
define('CSS', 'layouts/css/');
define('JS', 'layouts/js/');
define('IMG', 'layouts/images/');
define ('LOGO', 'layouts/images/logo.png');
define('PAGE', 'pages/');

//Include All Function 
include FUNC . "functions.php"; 
include LANG . "english.php"; 

// Include All Templates
include TEMP . 'header.php';
include TEMP . 'sidebar.php';
include TEMP . 'bodystart.php';