<?php 

class User
{
    public $UserName, $Age, $Id;

    function User($row)
    {
        $argsCount = func_num_args();
        if($argsCount == 1)
        {
            $this->Id = $row['id'];
            $this->UserName = $row['username'];
            $this->Age = $row['age'];
        }
        else
        {
            $this->UserName = func_get_arg(0);
            $this->Age = func_get_arg(1);
        }
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