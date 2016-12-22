<?php

class Database extends PDO {

    public function __construct($dsn, $user, $password) {
       
        parent::__construct($dsn, $user, $password);
        $this->query("SET NAMES ´utf8´");
        $this->query("SET CHARACTER SET utf8");
    }
    
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {

  
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value){
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
        
              

}
