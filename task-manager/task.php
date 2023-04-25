<?php
include_once "config.php";
// $action = isset($_POST['action']) ? $_POST['action']: '';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection) {
    throw new Exception("Database not connected!");
} else {
    $action = $_POST['action'] ?? '';
    if(!$action) {
        header("Location: index.php");
        die();
    } else {
        if('add' == $action) {
            // insert record
            $tasks = $_POST['tasks'];
            $date = $_POST['date'];
            if($tasks && $date) {
                $query = "INSERT INTO tasks ( tasks, date) VALUES ('{$tasks}','{$date}')";
                mysqli_query($connection, $query);
                header("Location: index.php?added=true");
            }
        } elseif('complete' == $action) {
            $taskid = $_POST['taskid'];
            if($taskid) {
                $query = "UPDATE tasks SET complete=1 WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection, $query);
            }
            header("Location: index.php");
        } elseif('incomplete' == $action) {
            $taskid = $_POST['taskid'];
            if($taskid) {
                $query = "UPDATE tasks SET complete=0 WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection, $query);
            }
            header("Location: index.php");
        } elseif('delete' == $action) {
            $taskid = $_POST['dtaskid'];
            if($taskid) {
                $query = "DELETE FROM tasks WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection, $query);
                header("Location: index.php?delete=true");
            }
            header("Location: index.php");
        } elseif('bulk_delete' == $action) {
            $bulk_select_action = $_POST['bulk_select_input'] ?? '';
            $bulk_check = $_POST['bulk_check'] ?? '';
            $bulk_check_arr = join($bulk_check, ',');
            $query = "DELETE FROM tasks WHERE id in ($bulk_check_arr)";
            mysqli_query($connection, $query);
            header("Location: index.php?bulk_delete=true"); 
        }
         elseif('bulk_complete' == $action) {
            $bulk_select_action = $_POST['bulk_select_input'] ?? '';
            $bulk_check = $_POST['bulk_check'] ?? '';
            $bulk_check_arr = join($bulk_check, ',');
            $query = "UPDATE tasks SET complete=1 WHERE id in ($bulk_check_arr)";
            mysqli_query($connection, $query);
            header("Location: index.php?bulk_complete=true"); 
        }
    }
    mysqli_close($connection);
}

