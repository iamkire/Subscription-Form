<?php

include 'app/core/db.php';
include 'app/core/QueryBuilder.php';
include 'app/core/Router.php';

include'controllers/EmailSubController.php';
include'controllers/PhoneSubController.php';
include'controllers/HomeController.php';
include'controllers/SubbedController.php';
include'controllers/WelcomeController.php';
include'controllers/ScriptController.php';


include 'model/SubPhone.php';
include 'model/SubEmail.php';


include 'routes/routes.php';

include 'scripts/news.php';
include 'scripts/Notify.php';
include 'scripts/script.php';

$conn = new Connection();
$qBuilder = new QueryBuilder($conn->Connect());
try {
    $router = new Route($routes, $qBuilder);
    $subEmailController = new EmailSubController($qBuilder);
    $uri = $router->getUri();
    $router->direct($uri);

} catch (Exception $e) {
    echo $e->getMessage();
}