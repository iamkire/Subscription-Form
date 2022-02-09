<?php

class PhoneSubController{

        public $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder)
    {
       $this->queryBuilder=$queryBuilder;
    }
    public function index()
    {
        require('views/phone.view.php');
    }


    public function subscribe()
    {
        $phone= $_POST['phoneNo'];

        $ph= new SubPhone($this->queryBuilder);

        $ph->validatePhone($phone);

        $ph->CheckPhone($phone);

        $ph->insertPhone($phone);

        header( 'Location: views/phone.view.php');
    }
}