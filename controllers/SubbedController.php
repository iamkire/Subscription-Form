<?php


class SubbedController {


    public function index()
    {
        require'views/subbed.view.php';
    }

    public function subscribe()
    {
        $email=$_POST['email'];
        $notify = new Notify;
        $notify->NotifySubUsers($email);
        require'views/subbed.view.php';
    }
}