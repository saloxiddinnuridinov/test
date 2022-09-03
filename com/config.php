<?php  
class Config{
    private $connection;
    private const DB_NAME = 'test_db';
    private const DB_USER = 'root';
    private const DB_PASS = '';
    private const HOST = 'localhost';

    public function __construct()
    {
        $this->connection = new mysqli(self::HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
    }

    public function sql($query){
        return mysqli_query($this->connection, $query);
    }

    public function sqlArray($obj){
        $result = [];
        while($row = $obj->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}
 ?>