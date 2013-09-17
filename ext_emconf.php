<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "svconnector_feed".
 *
 * Auto generated 22-11-2012 16:01
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Connector service - JSON',
	'description' => 'Connector service for JSON data',
	'category' => 'services',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Prakash A Bhat (Cobweb)',
	'author_email' => 'typo3@cobweb.ch',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-4.7.99',
			'svconnector' => '2.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"d45f";s:16:"ext_autoload.php";s:4:"c230";s:21:"ext_conf_template.txt";s:4:"ef02";s:12:"ext_icon.gif";s:4:"d043";s:17:"ext_localconf.php";s:4:"b595";s:10:"README.txt";s:4:"4f8f";s:42:"Resources/Public/Samples/Configuration.txt";s:4:"d799";s:14:"doc/manual.pdf";s:4:"011d";s:14:"doc/manual.sxw";s:4:"6a50";s:36:"sv1/class.tx_svconnectorfeed_sv1.php";s:4:"02f3";s:17:"sv1/locallang.xml";s:4:"a236";}',
);

?>