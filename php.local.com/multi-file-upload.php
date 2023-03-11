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
            echo '<pre>'; var_dump($_FILES['photo']); echo '</pre>';
            if(isset($_FILES['photo'])) {
                $file_count = count($_FILES['photo']['name']);
                for($i=0; $i<$file_count; $i++) {
                    if(in_array($_FILES['photo']['type'][$i], $allowed_type) && $_FILES['photo']['size'][$i] < 5*1024*1024) {
                        move_uploaded_file($_FILES['photo']['tmp_name'][$i], './files/'. trim($_FILES['photo']['name'][$i]));
                    }
                }
            }
        ?>
    </pre>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <input type="FILE" name="photo[]" />
            <input type="FILE" name="photo[]" />
            <input type="FILE" name="photo[]" />
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>