<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// Define DB Type For include DB Class file.
define( '__SSHOW_DB_TYPE__' ,  $sshowXML_config->db->type );

require( _SSHOW_DIR_.'common/db/'.__SSHOW_DB_TYPE__.'/class.php' );

// Extending & Binding Class For Forming.
class sshowClass_DB extends _sshowClass_DB_ {
	public $type = __SSHOW_DB_TYPE__;
}

// Connect DB.
$sshowClass_DB = new sshowClass_DB($sshowXML_config);

?>
