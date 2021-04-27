<?php
namespace Arsha\classes;

/**
 * Table Class
 */
class Table
{
	public $db = null;
    /**
     * 
     */
    public function __construct(\Arsha\DBController $db)
    {
     	if (!isset($db->conn)) return null;
     	$this->db = $db;  
    }

    function GetTable($table = null)
    {
    	if ($table != null) {
    		if ($result = $this->db->conn->query("SELECT * FROM {$table}")) {
    			$clients=[];
    			while ($client = $result->fetch_assoc()) {
    			    $clients[] = $client;
    			}
    			return $clients;
    		}
    	}
    }


}