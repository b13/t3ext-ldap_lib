<?php

########################################################################
# Extension Manager/Repository config file for ext "ldap_lib".
#
# Auto generated 09-12-2009 14:44
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'LDAP Library',
	'description' => 'This extension provides a class you can use in your own extensions for connecting and retrieving data from LDAP Sources.',
	'category' => 'misc',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Daniel Thomas, Benjamin Mack',
	'author_email' => 'dt@dpool.net,benni@typo3.org',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:20:"class.tx_ldaplib.php";s:4:"62f8";s:12:"ext_icon.gif";s:4:"0898";s:14:"doc/manual.sxw";s:4:"c31e";s:19:"doc/wizard_form.dat";s:4:"2c49";s:20:"doc/wizard_form.html";s:4:"22d7";}',
);

?>