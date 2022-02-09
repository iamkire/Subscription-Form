<?php


class SubEmail
{
    public $queryBuilder;
    public function __construct(QueryBuilder $queryBuilder)
    {
        $this->queryBuilder=$queryBuilder;
    }

    public function validateEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter valid email address');
        }
    }

    public function CheckEmail($email)

    {
         if($this->queryBuilder->SelectQuery('subform','email',$email)){
            throw new Exception('Email is already in our system');
        }
    }


    public function InsertEmail($email)

    {
        if($this->queryBuilder->InsertQuery('subform',['email' => $email])){
            return true;
        }
    }
}
