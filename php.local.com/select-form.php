<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $languages = ['bangla', 'English', 'Hindi', "marati", 'Urdu', 'Arbic'];
        $selected_lang = isset($_POST['lang']) && count($_POST['lang']) > 0 ? filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY): '';
        ?>
        <form action="" method="POST">
            <select name="lang[]" id="lang" multiple>
                <?php showLang($languages, $selected_lang); ?>
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>