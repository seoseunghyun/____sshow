<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

//SSHDB Database By SSHOW DB Form.
//$sshdb_get = null;
class _sshowClass_DB_ {
	
	public $sshowDB_config, $status;
	private $connector;
	private $sshdb_use_db;
	
	function __construct( $XML ){
		$this->sshowDB_config = $XML;
	}
	
	function connectDB(){
	
		// DB Connect.
		require( _SSHOW_DIR_.'SSHDB/start.php' );
		sshdb_connect( $this->sshowDB_config->db->username , $this->sshowDB_config->db->password );
		$this->status = $sshdb_msg;
		// Using SSHOW Database.
		$this->sshdb_use_db = (string)$this->sshowDB_config->db->dbname;
	}
	
	function disconnectDB(){

		//mysql_close($this->connector);
		//$this->status = 'DB is Exit';
	}
	
	function selectDB(){
		
		//$this->status = 'DB is Exit';
	}
	
	// For Using SSHOW
	function initConfig(){
		sshdb_create_db($this->sshdb_use_db,'sshow Database');
		sshdb_create_table($this->sshdb_use_db,'SSHOW_config','Table Of SSHOW Configuration');
		sshdb_create_var($this->sshdb_use_db,'SSHOW_config','index_id,index_info,layout,style,brain,api','Index id,Index Info,Layout,Style,BRAINs,APIs');
		
		sshdb_create_table($this->sshdb_use_db,'SSHOW_index_info','Table Of SSHOW Index Info');
		sshdb_create_var($this->sshdb_use_db,'SSHOW_index_info','index_id,title','Index ID,Title');
		//sshdb_create_ele($this->sshdb_use_db,'SSHOW_config','1','','');
		//sshdb_create_ele($this->sshdb_use_db,'SSHOW_index_info','1','','');
	}
	
	function getConfig($id = 1){
		global $sshdb_get;
		sshdb_get_ele( $this->sshdb_use_db,'SSHOW_index_info',$id,'');
		$get = $sshdb_get;
		unset($sshdb_get);
		return $get[$this->sshdb_use_db]['SSHOW_index_info'][$id];
	}
	
	function getContent($id = 1){
		global $sshdb_get;
		sshdb_get_ele( $this->sshdb_use_db,'SSHOW_config',$id,'');
		$get = $sshdb_get;
		unset($sshdb_get);
		return $get[$this->sshdb_use_db]['SSHOW_config'][$id];
	}
	
	function createTB(){
	
	}
}
?>