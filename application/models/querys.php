<?php

/**
 * Description of querys
 *
 * @author hunter
 */
class Querys extends CI_Model
{
    function __construct() 
    {
        parent::__construct();
    }
    
    public function sampleQuery()
    {
        $sql=$this->db->query("select * from user");
        foreach ($sql->result_array() as $value)
        {
            $usuarios[]=$value;            
        }
        return $usuarios;
    }
}

?>
