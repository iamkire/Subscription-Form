<?php
class QueryBuilder {
    public $conn;
    public function __construct(PDO $conn)
    {
        $this->conn=$conn;
    }

    public function SelectQuery($table,$column,$email)
    {
        $sql = "SELECT * FROM $table WHERE $column = :$column";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":$column", $email);

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($res) > 0){
           return $res;
        }
    }

    public function InsertQuery($table,$params)
    {

        {
            $query = sprintf
                ("INSERT INTO %s (%s) VALUES (%s)",
            $table,
             implode(', ',array_keys($params)),
             ':' . implode(', :',array_keys($params))
            );
//            var_dump($query);
            try{
                $stmt = $this->conn->prepare($query);
                if($stmt->execute($params)){
                    echo "Thank you";
                }
            }catch(Exception $e){
                die('Something went wrong'); //If table doesn't exist
            }
        }
    }
}