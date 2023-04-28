<?php
session_start();
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['loggedin']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Form Login</title>
</head>
<body>
    <div class="container pt-5">
        <?php
            if(!isset($_SESSION['loggedin'])) {
                ?>
                <form method="POST" action="form.php">
                    Username: <input type="text" name="user" id="user" class="form-control">
                    Password: <input type="password" name="password" id="password" class="form-control">
                    <button type="submit" name="submit" class="mt-3 btn btn-primary">Submit</button>
                </form>
            <?php 
        } else {
            ?>
            <p>Hello You're logged in</p>
        <?php }
        ?>

        <?php
        if(isset($_POST['submit'])) {
            if('john' == $_POST['user'] && 'hello' == $_POST['password']) {
                $_SESSION['loggedin'] = 1;
                echo "Successfull";
            }
        }
        ?>
    </div>
</body>
</html>