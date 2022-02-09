<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h2>Subscribe to our newsletter</h2>
<form action="email-sub" method="POST">
    Email :
    <input type="text" name="email">

    <input type="submit" name="submit" value="Subscribe ">
</form>
<form action="phone" method="post"> <br>

    <input type="submit" name="phoneSub" value="Sub with phone here">
</form>
<br>
<form method="POST" action="subbed">
<input type="submit" name="already-subbed" value="AlreadySubbed?">
</form>
</body>
</html>