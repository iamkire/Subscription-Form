<?php

class EmailSubController{
   public $queryBuilder;
    public function __construct(QueryBuilder $queryBuilder)
    {
        $this->queryBuilder=$queryBuilder;
    }

    public function index()
    {
        require'views/email-sub.view.php';
    }
    public function subscribe()
    {
        $email=($_POST['email']);

        $em = new SubEmail($this->queryBuilder);

        $em->validateEmail($email);
        $em->CheckEmail($email);
        $em->InsertEmail($email);

        require'views/email-sub.view.php';
    }
}
