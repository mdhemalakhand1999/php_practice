<?php
require "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection) {
    throw new Exception("Database not connected!");
} else {
    $upcomming_query = "SELECT * FROM tasks WHERE complete=0 ORDER BY date ASC";
    $upcomming_result = mysqli_query($connection, $upcomming_query);
    $upcomming_result_count = mysqli_num_rows($upcomming_result);
    $completed_query = "SELECT * FROM tasks WHERE complete=1 ORDER BY date ASC";
    $completed_result = mysqli_query($connection, $completed_query);
    $completed_result_count = mysqli_num_rows($completed_result);
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
    <div class="task-manager-section">
        <div class="container">
            <h1>Task Manager</h1>
            <p>This sample project for managing daily task using php, javascript, mySql on this project.</p>
            <?php if($upcomming_result_count > 0) : ?>
                <h4>Upcomming Tasks</h4>
                <form method="POST" action="task.php">
                    <input type="hidden" name="bulk_select_input" id="bulk_select_input" />
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($data = mysqli_fetch_assoc($upcomming_result)) {
                                    $timestamp = strtotime($data['date']);
                                    $date = date('jS M, Y', $timestamp);
                                    ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="<?php echo $data['id']; ?>" name="bulk_check[]" id="check">
                                        </td>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['tasks']; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td>
                                        <a href="#" class="delete" data-deletetaskid="<?php echo $data['id'] ?>">Delete</a> | 
                                            <a href="#" class="complete" data-taskid="<?php echo $data['id']; ?>">Complete</a>
                                        </td>
                                    </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                    <select class="task form-select mb-3 w-50" name="action" id="taskaction">
                        <option selected value="bulk_delete">Delete</option>
                        <option value="bulk_complete">Mark As Complete</option>
                    </select>
                    <button type="submit" class="btn bulk_submit btn-success">Submit</button>
                </form>
            <?php endif; ?>
            <br/>
            <p>....</p>
            <?php if($completed_result_count > 0) : ?>
                <h4>Completed Tasks</h4>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($data = mysqli_fetch_assoc($completed_result)) {
                                $timestamp = strtotime($data['date']);
                                $date = date('jS M, Y', $timestamp);
                                ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check[]" value="<?php echo $data['id']; ?>" id="check">
                                    </td>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['tasks']; ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td>
                                        <a href="#" class="delete" data-deletetaskid="<?php echo $data['id'] ?>">Delete</a> | 
                                        <a href="#" data-intaskid="<?php echo $data['id'] ?>" class="incomplete">Mark Incomplete</a>
                                    </td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
            <?php endif; ?>
            <div class="add-task-form mt-5">
                <h3>Add Task</h3>
                <form method="POST" action="task.php">
                    <?php
                    $added = $_GET['added'] ?? '';
                    if($added) {
                        echo "<div class='alert alert-success mt-3'>Data Submitted Successfully</div>";
                    }
                    ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Task</label>
                        <input type="text" name="tasks" class="form-control" aria-describedby="Task">
                        <div class="form-text">add your task</div>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="date">
                    </div>
                    <button type="submit" class="btn btn-warning">Add Task</button>
                    <input type="hidden" name="action" value="add">
                </form>
            </div>
        </div>
    </div>

    <form action="task.php" method="post" id="completeform">
        <input type="hidden" id="caction" name="action" value="complete" />
        <input type="hidden" id="taskid" name="taskid" />
    </form>
    <form action="task.php" method="post" id="incompleteform">
        <input type="hidden" id="inaction" name="action" value="incomplete" />
        <input type="hidden" id="intaskid" name="taskid" />
    </form>
    <form action="task.php" method="post" id="deleteform">
        <input type="hidden" id="daction" name="action" value="delete" />
        <input type="hidden" id="dtaskid" name="dtaskid" />
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script>
        ;(function($) {
            $(document).ready(function() {
                $('.complete').on('click', function(e) {
                    var taskid = $(this).data('taskid');
                    $('#taskid').val(taskid);
                    $('#completeform').submit();
                });
                $('.incomplete').on('click', function(e) {
                    var intaskid = $(this).data('intaskid');
                    $('#intaskid').val(intaskid);
                    $('#incompleteform').submit();
                })
                $('.delete').on('click', function(e){
                    if(confirm("Are you sure want to delete?")) {
                        var deltaskid = $(this).data('deletetaskid');
                        $('#dtaskid').val(deltaskid);
                        $('#deleteform').submit();
                    }
                })
                $('.bulk_submit').on('click', function() {
                    var actionVal = $('#taskaction').val();
                    if('bulk_complete' == actionVal) {
                        $('#bulk_select_input').val('complete');
                    } else if('bulk_delete' == actionVal) {
                        $('#bulk_select_input').val('delete');
                    }

                })
            })
        })(jQuery)
    </script>
</body>
</html>