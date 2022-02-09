<?php
//
//set_time_limit(18);
//
//$news = new Newsletter();
//$template=file_get_contents("scripts/foobar.html");
//$subject = "Hello from newsletter";
//$headers="From: nynewsletter@gmail.com" . PHP_EOL;
//$headers="Reply-to: nynewsletter@gmail.com" . PHP_EOL;
//$headers = 'MIME-Version: 1.0';
//$headers = 'Content-type: text/html; charset=iso-8859-1';
//
//$all = $news->count();
//$each= 5;
//$pause=1;
//
//for ($i=1;$i<$all;$i+=$each){
//$subscribers = $news->get($i,$each);
//foreach($subscribers as $subscriber){
//echo "Email sent to:" . $subscriber['email'] . "<br>"  . PHP_EOL;
//
//$msg = str_replace("[NAME]",$subscriber['email'],$template);
//$msg='smtp.mailtrap.io';
//$news->send($subscriber['email'],$subject,$msg,$headers);
//sleep($pause);
//}
//}