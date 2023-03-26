<?php
session_start([
    'cookie_lifetime' => 300
]);
$error = false;
// session_destroy();
if(isset($_POST['username']) && isset($_POST['password'])) {
    if(isset($_POST['submit'])) {
        if('admin' == $_POST['username'] && 'a51e47f646375ab6bf5dd2c42d3e6181' == md5($_POST['password'])) {
            $_SESSION['loggedin'] = true;
        } else {
            $_SESSION['loggedin'] = false;
            $error = true;
        }
    }
}
if(isset($_POST['logout'])) {
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Simple Auth Example</h2>
        <p>
        <?php
        if( isset($_SESSION['loggedin']) && true == $_SESSION['loggedin']) {
            echo 'Hello Admin! Welcome.';
        } else {
            echo 'Hello strenger! Login below';
        }
        ?></p>
        <?php if($error) : ?>
            <div class="alert alert-danger">Username & Password Did Not Match!</div>
        <?php endif; ?>
        <?php
            if(isset($_SESSION['loggedin']) && false == $_SESSION['loggedin']) :
        ?>
        <form method="POST">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <button type="submit" class="btn btn-warning mt-3" name="submit">Log in</button>
        </form>
        <?php else: ?>
            <form action="auth.php?logout=true" method="POST">
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="btn btn-warning mt-3" name="submit">Log out</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>