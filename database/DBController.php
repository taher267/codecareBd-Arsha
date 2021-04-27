<?php
namespace Arsha;
/**
 * Database Controller
 */
class DBController
{
	protected $host ="localhost";
	protected $username ="arshauser";
	protected $password ="arshapass";
	protected $database ="arsha";
	public $conn = null;

	function __construct()
	{
		$this->conn = new \mysqli($this->host, $this->username,
			$this->password, $this->database);
		if ($this->conn->connect_error) {
			echo "Failed" . connect_error;
		}else{
			//echo "sucessful";
		}
	}

	//connection close

	public function __destruct (){
		$this->connectionClose();
	}

	public function connectionClose()
	{
		if ($this->conn !=null ) {
			$this->conn->close();
			$this->conn =  null;
		}
	}
}