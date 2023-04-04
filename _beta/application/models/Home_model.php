<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Home_model extends CI_Model{ 
     
    function __construct() { 
        
    } 
    public function insertRecord($tableName, $insertDataArray)
    {  
        $result = $this->db->insert($tableName, $insertDataArray); 
        return (count($result) > 0)? $this->db->insert_id() : NULL;
    }
    public function updateRecord($tableName,$wherefieldName='', $updateDataArray)
    {  
        if ($wherefieldName!='') {
            $this->db->where($wherefieldName, $updateDataArray[$wherefieldName]);        
        }
        $result = $this->db->update($tableName, $updateDataArray);
        return (count($result) > 0)?  $result : NULL;
    }
    public function deleteStudent($tableName, $wherefieldName='')
    {   
        $result = $this->db->delete($tableName, array($wherefieldName => $updateDataArray[$wherefieldName])); 
        return (count($result) > 0)?  $result : NULL;
    }
}