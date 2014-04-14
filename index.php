<?php
//
// PHASE: BOOTSTRAP
//
define('CAESAR_INSTALL_PATH', dirname(__FILE__));
define('CAESAR_SITE_PATH', CAESAR_INSTALL_PATH . '/site');

require(CAESAR_INSTALL_PATH.'/src/CCaesar/bootstrap.php');

$CAESAR = CCaesar::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$CAESAR->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$CAESAR->ThemeEngineRender();