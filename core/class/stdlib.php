<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

//SSHOW Standard Libraury Class Flie.
class sshowClass_stdlib {
	function flist($dir){
		$farray = array();
		if(is_dir($dir)){
			$fdir = dir($dir);
			
			while( false !== ( $files = $fdir->read() ) ){
			
				if( $files != '.' && $files != '..' ){
					array_push($farray, $files);
				}
			}
			$fdir->close();
		}
		return $farray;
	}
	function dlist($dir){
		$farray = array();
		if(is_dir($dir)){
			$fdir = dir($dir);
			
			while( false !== ( $files = $fdir->read() ) ){
			
				if( $files != '.' && $files != '..' && !is_file($files) ){
					array_push($farray, $files);
				}
			}
			$fdir->close();
		}
		return $farray;
	}
}

?>