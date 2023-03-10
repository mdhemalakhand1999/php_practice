<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <?php
    // get for read
    // post for create/update
    // put for update ( for api )
    // patch for small amount of data update
    // delete for delete dat
    ?>
    <div class="container">
        <h1>First Form</h1>
        <?php
            $fname = '';
            $lname = '';
        ?>
        <?php if(isset($_REQUEST['fname'])) {
            // $fname = htmlspecialchars($_REQUEST['fname']);
            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS );
        }?>
        <?php if(isset($_REQUEST['lname'])){
            // $lname = htmlspecialchars($_REQUEST['lname']);
            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
        }?>
        <form method="POST" action="">
            <fieldset>
                <label for="fname">First Name</label>
                <input type="text" placeholder="First Name" name="fname" id="fname" value="<?php echo $fname; ?>">
                <label for="lname">Last Name</label>
                <input type="text" placeholder="Last Name" name="lname" id="lname" value="<?php echo $lname; ?>">
                <input class="button-primary" type="submit" value="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>