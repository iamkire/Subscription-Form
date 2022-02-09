<?php

$routes =  [
    'subform' => 'HomeController@index',
    'subform/email-sub' => 'EmailSubController@subscribe',
    'subform/phone' => 'PhoneSubController@index',
    'subform/sub-phone' => 'PhoneSubController@subscribe',
    'subform/subbed' => 'SubbedController@index',
    'subform/already-subbed' => 'SubbedController@subscribe',
    'subform/welcome' => 'WelcomeController@index',
    'subform/script' => 'ScriptController@index'
];