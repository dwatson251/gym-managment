<?php

    $loggedin = false;

    $username = 'admin';
    $password = 'admin123';

    if(isset($_POST['username'] && $_POST['password'])) {
        if($_POST['username'] === $username && $_POST['password'] === $password)) {
            $loggedin = true;
        }
    }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php if(!$loggedin): ?>
            <form class="" action="index.html" method="post">
                <input type="text" name="username" placeholder="username" />
                <input type="text" name="password" placeholder="password" />
                <button>Login</button>
            </form>
        <?php else; ?>

            <h1>Welcome to your gym</h1>

        <?php endif; ?>
    </body>
</html>
