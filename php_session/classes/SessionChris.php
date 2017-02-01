<?php

/**
* Session
*/
class Session {
	
	/**
	* Db Object
	*/
	private $db;
	private $_sess_db;

	public function __construct(){
		
		// Set handler to overide SESSION
		
		
		session_set_save_handler(
			array($this, "_open"),
			array($this, "_close"),
			array($this, "_read"),
			array($this, "_write"),
			array($this, "_destroy"),
			// array($this, "_gc")
			array($this, "_clean")
		);
		
		//setting session name
		session_name('local');
		
		// Start the session
		session_start();
		
	
		
	}
	
	/**
	* Open
	*/
	public function _open(){

		if ($this->_sess_db = mysql_connect('localhost', 'root', 'tahir') or die(mysql_error())) {
			return mysql_select_db('php_session', $this->_sess_db) or die(mysql_error());
		}
		
		return FALSE;
	}
	
	/**
	* Close
	*/
	public function _close(){
		
		return mysql_close($this->_sess_db);
	
	}

	/**
	* Read
	*/
	public function _read($id){
		
		$id = mysql_real_escape_string($id);

		$sql = "SELECT data FROM sessions WHERE id = '$id'";

		if ($result = mysql_query($sql, $this->_sess_db) or die(mysql_error())) {
			
			if (mysql_num_rows($result)) {
				
				$record = mysql_fetch_assoc($result);
				return $record['data'];
				
			}
		}

		return '';
	}
	

	/**
	* Write
	*/
	public function _write($id, $data){

		$access = time();

		$id = mysql_real_escape_string($id);
		$access = mysql_real_escape_string($access);
		$data = mysql_real_escape_string($data);
	
		$sql = "REPLACE INTO sessions (id,access,data) VALUES ('$id', '$access', '$data')";
		// mysql_query($sql,$this->_sess_db) or die(mysql_error());
		return mysql_query($sql,$this->_sess_db) or die(mysql_error());
	}
	
	
	/**
	* Destroy
	*/
	public function _destroy($id){
		
		$id = mysql_real_escape_string($id);

		$sql = "DELETE FROM sessions WHERE id = '$id'";

		return mysql_query($sql, $this->_sess_db) or die(mysql_error());
		
	}
	
	/**
	* Garbage Collection
	*/
	

	public function _clean($max) {

		$old = time() - $max;
		$old = mysql_real_escape_string($old);

		$sql = "DELETE FROM sessions WHERE access < '$old'";

		return mysql_query($sql, $this->_sess_db) or die(mysql_error());
		
	}
	
	
	
	
	
	
	
}