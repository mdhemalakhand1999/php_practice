<?php require_once 'functoins.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $checked = '';
        $fruits = '';
        if(isset($_POST['cb1']) == '1') {
            $checked = 'checked';
        }
        print_r($_REQUEST);
    ?>
    <form action="" method="POST">
        <div class="field-group">
            <input type="checkbox" name="cb1" value="1" id="cb1" <?php echo $checked; ?>>
            <label for="cb1">some checkbox</label>
            <h2>Select Some Fruits</h2>
            <div>
                <input type="checkbox" name="fruits[]" id="orange" value="orange" <?php checkInputBox('fruits', 'orange'); ?>>
                <label for="orange">Orange</label>
            </div>
            <div>
                <input type="checkbox" name="fruits[]" id="mango" value="mango" <?php checkInputBox('fruits', 'mango'); ?>>
                <label for="mango">Mango</label>
            </div>
            <div>
                <input type="checkbox" name="fruits[]" id="banana" value="banana" <?php checkInputBox('fruits', 'banana'); ?>>
                <label for="banana">Banana</label>
            </div>
            <div>
                <input type="checkbox" name="fruits[]" id="lemon" value="lemon" <?php checkInputBox('fruits', 'lemon'); ?>>
                <label for="lemon">Lemon</label>
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>