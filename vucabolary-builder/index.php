<?php
    session_start();
    $_user_id = $_SESSION['id'] ?? 0;
    if($_user_id) {
        header("Location: words.php");
        die();
    }
    require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container pt-5">
        <div class="vocabolary-section">
            <h1 class="text-center">My Vocabolaries</h1>
            <div class="vocabolary-links">
                <a href="#" id="login">Login</a> | <a href="#" id="register">Register Account</a>
            </div>
            <div class="register-vocabolary-box">
                <form id="form1" method="post" action="tasks.php">
                    <h3 class="text-center">Login</h3>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <p>
                            <?php
                                $status = $_GET['status'] ?? 0;
                                $class = 'danger';
                                if($status == 3) {
                                    $class = 'success';
                                } else if($status == 2) {
                                    $class = 'warning';
                                }
                                if($status) {
                                    echo "<div class='alert alert-{$class}'>".getStatusMessage($status).'</div>';
                                }
                            ?>
                        </p>
                        <input type="hidden" id="action" name="action" value="login">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
</body>
</html>