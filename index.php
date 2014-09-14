<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/


/*
	Support to php 5.0 Version.
	_SSHOW_*_ public Global Define.
	__SSHOW_*__ private Local Define (For Inner Developers).
*/
define( '_SSHOW_' , true );
define( '_SSHOW_VERSION_' , '0.01b' );
define( '_SSHOW_DIR_' , str_replace( 'config\\' , '' , str_replace( 'config/' , '' , str_replace( basename(__FILE__) , '' , __FILE__ ) ) ) );
define( '_SSHOW_URL_' , '' );

require( _SSHOW_DIR_.'core/init.php' );


?>