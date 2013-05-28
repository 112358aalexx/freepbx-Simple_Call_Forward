<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }

global $astman;

// Don't bother uninstalling feature codes, now module_uninstall does it

// remove all Simple Call Forward dbase entries
if ($astman) {
	$astman->database_deltree('SCF');
} else {
	fatal("Cannot connect to Asterisk Manager with ".$amp_conf["AMPMGRUSER"]."/".$amp_conf["AMPMGRPASS"]);
}
?>
