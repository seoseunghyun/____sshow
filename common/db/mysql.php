<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

//MySQL Database By SSHOW DB Form.

class _sshowClass_DB_ {
	
	public $sshowDB_config, $status;
	private $connector;
	
	function __construct( $XML ){
		$this->sshowDB_config = $XML;
	}
	
	function connectDB(){
	
		// DB Connect.
		$this->connector = mysql_connect( $this->sshowDB_config->db->hostname, 
									$this->sshowDB_config->db->username, 
									$this->sshowDB_config->db->password) or die( $this->status = 'Could not connect: ' . mysql_error() );
		$this->status = 'success';	 
		// Using SSHOW Database.
		mysql_select_db($this->sshowDB_config->db->dbname) or die( $this->status = 'Could not select database' );
		
	}
	
	function disconnectDB(){

		mysql_close($this->connector);
		$this->status = 'DB is Exit';
	}
	
	function selectDB(){
		
		$this->status = 'DB is Exit';
	}
	
	// For Using SSHOW
	function initConfig(){
	
		mysql_query('CREATE TABLE IF NOT EXISTS `SSHOW_config` (
  `index_id` char(30) NOT NULL,
  `index_info` char(30) NOT NULL,
  `layout` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `brain` varchar(255) NOT NULL,
  `api` varchar(255) NOT NULL
);') or die('Query failed: ' . mysql_error());
		
		mysql_query('ALTER TABLE `SSHOW_config` ADD PRIMARY KEY (`index_id`), ADD UNIQUE KEY `index_id` (`index_id`);') or die('Query failed: ' . mysql_error());
		
		mysql_query('CREATE TABLE IF NOT EXISTS `SSHOW_index_info` (
  `index_id` char(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `platform` int(10) NOT NULL
);') or die('Query failed: ' . mysql_error());
		
		mysql_query('ALTER TABLE `SSHOW_index_info` ADD PRIMARY KEY (`index_id`), ADD UNIQUE KEY `index_id` (`index_id`);') or die('Query failed: ' . mysql_error());
	}
	
	//function getConfig
	
	function createTB(){
	
		$query = 'SELECT * FROM SSHOW_config';
		$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		
	}
}
/*
class sshowClass_DB
{
	public $type;
	private $connector;
	
	function __construct(){
		$type = 'mysql';
	}
	
	function conntect(){
		$connector = mysql_connect($sshowXML_config->db->hostname, $sshowXML_config->db->username, $sshowXML_config->db->password) or die('Could not connect: ' . mysql_error());
	}
}

// Connecting, selecting database
$link = mysql_connect($sshowXML_config->db->hostname, $sshowXML_config->db->username, $sshowXML_config->db->password) or die('Could not connect: ' . mysql_error());

mysql_select_db($sshowXML_config->db->dbname) or die('Could not select database');
$query = 'SELECT * FROM my_table';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

// Printing results in HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);
*/
?>