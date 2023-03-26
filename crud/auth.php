<?php
session_start([
    'cookie_lifetime' => 300
]);
$error = false;
// session_destroy();
$fp = fopen('./data/users.txt', 'r');
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
if($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = false;
    $_SESSION['role'] = false;
    while($data = fgetcsv($fp)) {
        if(isset($_POST['submit'])) {
            if($data[0] == $username && $data[1] == sha1($password)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $data[2];
                header('location: index.php');
            }
        }
    }
    if(isset($_SESSION['loggedin']) && false == $_SESSION['loggedin']) {
        $error = true;
    }
}
if(isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location: index.php');
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
            if(!isset($_SESSION['loggedin']) || false == $_SESSION['loggedin']) :
        ?>
        <form method="POST">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <button type="submit" class="btn btn-warning mt-3" name="submit">Log in</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>