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
	
		mysql_query('CREATE TABLE IF NOT EXISTS `'.$this->sshowDB_config->db->dbname.'`.`SSHOW_COMMON_index` (
  `index_num` INT NOT NULL AUTO_INCREMENT,
  `index_id` VARCHAR(35) NOT NULL,
  `inder_info` VARCHAR(45) NULL,
  `layout` VARCHAR(45) NULL,
  `style` VARCHAR(45) NULL,
  `brain` VARCHAR(45) NULL,
  `plugin` VARCHAR(45) NULL,
  PRIMARY KEY (`index_num`, `index_id`),
  INDEX `fk_SSHOW_COMMON_index_SSHOW_COMMON_layout1_idx` (`layout` ASC),
  INDEX `fk_SSHOW_COMMON_index_SSHOW_COMMON_style1_idx` (`style` ASC),
  INDEX `fk_SSHOW_COMMON_index_SSHOW_COMMON_brain1_idx` (`brain` ASC),
  INDEX `fk_SSHOW_COMMON_index_SSHOW_COMMON_plugin1_idx` (`plugin` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `'.$this->sshowDB_config->db->dbname.'`.`SSHOW_COMMON_layout` (
  `layout_id` VARCHAR(45) NOT NULL,
  `layout_maker` VARCHAR(45) NULL,
  `layout_version` VARCHAR(45) NULL,
  PRIMARY KEY (`layout_id`))
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `'.$this->sshowDB_config->db->dbname.'`.`SSHOW_COMMON_style` (
  `style_id` VARCHAR(45) NOT NULL,
  `style_maker` VARCHAR(45) NULL,
  `style_version` VARCHAR(45) NULL,
  PRIMARY KEY (`style_id`))
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `'.$this->sshowDB_config->db->dbname.'`.`SSHOW_COMMON_brain` (
  `brain_id` VARCHAR(45) NOT NULL,
  `brain_maker` VARCHAR(45) NULL,
  `brain_version` VARCHAR(45) NULL,
  PRIMARY KEY (`brain_id`))
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `'.$this->sshowDB_config->db->dbname.'`.`SSHOW_COMMON_plugin` (
  `plugin_id` VARCHAR(45) NOT NULL,
  `plugin_maker` VARCHAR(45) NULL,
  `plugin_version` VARCHAR(45) NULL,
  PRIMARY KEY (`plugin_id`))
ENGINE = InnoDB') or die('Query failed: ' . mysql_error());
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