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

    static function parseSqlUserRows($sqlResult)
    {
        $users = new ArrayObject();
        foreach ($sqlResult as $row)
            $users->append(new User($row));
        return $users;
    }
}

?>