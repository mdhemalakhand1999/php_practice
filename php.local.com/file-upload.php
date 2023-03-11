<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            $allowed_type = [
                'image/png',
                'image/jpg',
                'image/jpeg',
                'image/webv'
            ];
            var_dump($_FILES['photo']);
            if(isset($_FILES['photo']) && in_array($_FILES['photo']['type'], $allowed_type) && $_FILES['photo']['size'] < 5*1024*1024) {
                move_uploaded_file($_FILES['photo']['tmp_name'], './files/'. trim($_FILES['photo']['name']));
            }
        ?>
    </pre>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <input type="FILE" name="photo" id="photo" />
            <label for="photo">Upload image</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>