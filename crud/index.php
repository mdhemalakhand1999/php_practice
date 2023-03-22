<?php
include_once 'inc/functions.php';
$info = '';
$task = $_GET['task'] ?? 'report';
if('seed' == $task) {
    seed();
    $info = "Seeding is complete";
}
$fname = '';
$lname = '';
$roll = '';
$id = '';
$error = 0;
if(isset($_POST['submit'])) {
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING); 
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    
    if($id) {
        // update student
        if($fname != '' && $lname != '' && $roll != '' ) {
            $result = updateStudent($id, $fname, $lname, $roll);
            if($result) {
                header('location: /crud/index.php?task=report');
            } else {
                $error = 1;
            }
        }
    } else {
        // add student
        if($fname != '' && $lname != '' && $roll != '' ) {
            $result = add_student($fname, $lname, $roll);
            if($result) {
                header('location: /crud/index.php?task=report');
            } else {
                $error = 1;
            }
        }
    }
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
        <h2>Project Crud</h2>
        <p>A sample crud application</p>
        <?php include_once ('inc/templates/nav.php'); ?>
        <hr/>
        <?php
            if($info != '') {
                echo "<p>{$info}</p>";
            }
        ?>
        <?php if(1 == $error) :  ?>
            <div class="alert alert-danger">Sorry! Duplicate Rull Number</div>
        <?php endif; ?>
        <?php if('delete' == $task) : 
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            if($id > 0) {
                deleteStudent($id);
                header('location: /crud/index.php?task=report');
            }    
        ?>
            
        <?php endif; ?>
        <?php if('report' == $task) : ?>
            <?php generate_report(); ?>
        <?php endif; ?>
        <?php if('add' == $task) : ?>
            <form action="/crud/index.php?task=add" method="POST">
                <div class="form-wrapper">
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname; ?>">
                </div>
                <div class="form-wrapper">
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname; ?>">
                </div>
                <div class="form-wrapper">
                    <label for="roll" class="form-label">Roll</label>
                    <input type="number" name="roll" id="roll" class="form-control" value="<?php echo $roll; ?>">
                </div>
                <div class="form-wrapper mt-3">
                    <button value="save" name="submit" type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        <?php endif; ?>
        <?php if('edit' == $task) : 
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            $student = getStudent($id); 
            if($student) :  
        ?>
            <form  method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-wrapper">
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $student['fname']; ?>">
                </div>
                <div class="form-wrapper">
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $student['lname']; ?>">
                </div>
                <div class="form-wrapper">
                    <label for="roll" class="form-label">Roll</label>
                    <input type="number" name="roll" id="roll" class="form-control" value="<?php echo $student['roll']; ?>">
                </div>
                <div class="form-wrapper mt-3">
                    <button value="update" name="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        <?php endif;endif; ?>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>