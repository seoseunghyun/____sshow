<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// This File is Init & Define configration file.

// if user's config file is exist, go to '_requireMain' Function else, fo to _requireSetup Function.
if( file_exists( _SSHOW_DIR_.'data/config.xml' ) ) {

	// First Setup's Setting File : _SSHOW_DIR_.'data/config.xml'
	$sshowXML_config = simplexml_load_file( _SSHOW_DIR_.'data/config.xml' );
	require( _SSHOW_DIR_.'core/class/db.php' );
	
	$sshowClass_DB->connectDB();
	//$sshowDB->initConfig();
	$sshowMain_config = $sshowClass_DB->getConfig();
	$sshowMain_content = $sshowClass_DB->getContent();
	
	$sshowDisplay = 'main';
	//	_sshowMain_Require_();
	
} else { 
	
	$sshowDisplay = 'setup';
	
}
?>
