<?php
class Database{
    protected $connection;
    /*Создаем конструктор  который будет подключаться к БД*/
    public function __construct($host, $user, $password, $db)
    {
        $this->connection = new mysqli($host, $user, $password, $db);
        
        if(!$this->connection){
            echo "Нет подключения";
        }
    }
    /*Метод экранирование символов*/
    public function escape($str){
        return mysqli_escape_string($this->connection, $str);
    }
    /*Метод обработки к БД*/
    public function selectAll($sql){
        //$mysqli_query($connection, $sql);
        $result = $this->connection->query($sql);
        $data = [];
        foreach ($result as $item){
            $data[]=$item;
        }
        return $data;
    }

}


?>