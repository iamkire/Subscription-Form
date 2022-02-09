<?php

class Newsletter{

    function count(){
        $conn = new Connection();
        $query = "SELECT COUNT(email) from subform";
        $stmt = $conn->Connect()->prepare($query);
        $stmt->execute();
        $result= $stmt->fetchAll();
        return $result[0];
    }
    function get(){
        $conn=new Connection();
        $query = "SELECT * FROM subform";
        $stmt = $conn->Connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function send($to,$subject,$message,$headers){
        mail($to,$subject,$message,$headers);
    }
}