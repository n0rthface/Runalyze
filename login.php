<?php
/**
 * RUNALYZE
 * 
 * @author Hannes Christiansen <mail@laufhannes.de>
 * @copyright http://www.runalyze.de/
 */
if (!file_exists('config.php')) {
	include 'install.php';
	exit();
}

if (isset($_GET['delete'])) 
    SessionAccountHandler::logout();
/*$title = 'Runalyze v'.RUNALYZE_VERSION.' - '.__('Please login');
$tpl   = 'tpl.loginWindow.php';

if (isset($_GET['chpw']))
	$tpl = 'tpl.loginWindow.setNewPassword.php';
if (isset($_GET['activate']))
	$tpl = 'tpl.loginWindow.activateAccount.php';
if (isset($_GET['delete'])) 
    $tpl = 'tpl.loginWindow.deleteAccount.php';


include 'inc/tpl/tpl.installerHeader.php';
include 'inc/tpl/'.$tpl;
include 'inc/tpl/tpl.installerFooterText.php';
include 'inc/tpl/tpl.installerFooter.php';*/