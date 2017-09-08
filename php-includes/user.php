<?php 

class User
{
    public $UserName, $Age, $Id;

    function User($row)
    {
        $this->Id = $row['id'];
        $this->UserName = $row['username'];
        $this->Age = $row['age'];
    }

    function ToString()
    { return "$Id: $UserName, $Age"; }    
}

?>