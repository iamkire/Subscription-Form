<?php

class SubPhone
{
    public $queryBuilder;
    public function __construct(QueryBuilder $queryBuilder)
    {
        $this->queryBuilder=$queryBuilder;
    }
    public function validatePhone($phone)
    {

        if (empty($phone)) {
            throw new Exception('Please fill out the field');
        }

    }

    public function CheckPhone($phone)
    {
        {
            if ($this->queryBuilder->SelectQuery('phone','phoneNo',$phone)) {
                throw new Exception('Phone number already exists');
            }
        }
    }

    public function InsertPhone($phone)

    {
        if($this->queryBuilder->InsertQuery('phone',['phoneNo' => $phone])){
            return true;
        }
    }
}