<?php
define('DB_NAME', 'D:\php-hasin-hayder\crud\data\db.txt');
function seed() {
    $data = array(
        array(
            'id' => 1,
            'fname' => 'kamal',
            'lname' => 'ahmed',
            'roll' => '11'
        ),
        array(
            'id' => 2,
            'fname' => 'jamal',
            'lname' => 'ahmed',
            'roll' => '12'
        ),
        array(
            'id' => 3,
            'fname' => 'Ripon',
            'lname' => 'ahmed',
            'roll' => '9'
        ),
        array(
            'id' => 4,
            'fname' => 'Nikhi',
            'lname' => 'chandra',
            'roll' => '8'
        ),
        array(
            'id' => 5,
            'fname' => 'John',
            'lname' => 'Rojario',
            'roll' => '7'
        ),
    );
    $serialize_data = serialize($data);
    file_put_contents(DB_NAME, $serialize_data, LOCK_EX); // loc_Ex hocche file lekhar somoy jeno modification kora na hoy
}
function generate_report() {
    $serialize_data = file_get_contents(DB_NAME);
    $students = unserialize($serialize_data);?>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Action</th>
            </tr>
            <?php
            foreach($students as $student) {?>
                <tr>
                    <td><?php printf("%s %s", $student['fname'], $student['lname']); ?></td>
                    <td><?php printf("%s", $student['roll'])?></td>
                    <td><?php printf('<a href="/crud/index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="/crud/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id'])?></td>
                </tr>
            <?php }
            ?>
        </table>
<?php }

function add_student($fname, $lname, $roll) {
    $found = false;
    $serialize_data = file_get_contents(DB_NAME);
    $students = unserialize($serialize_data);
    foreach($students as $_student) {
        if($_student['roll'] == $roll) {
            $found = true;
            break;
        }
    }
    if(!$found) {
        $newId = getNewID($students);
        $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        );
        array_push($students, $student);
        $serialize_data = serialize($students);
        file_put_contents(DB_NAME,$serialize_data, LOCK_EX);
        return true;
    }
    return false;
}

function getStudent($id) {
    $studentsData = file_get_contents(DB_NAME);
    $students = unserialize($studentsData);
    foreach($students as $_student) {
        if($_student['id'] == $id) {
            return $_student;
        }
    }
    return false;
}
function updateStudent($id, $fname, $lname, $roll) {
    $found = false;
    $serialize_data = file_get_contents(DB_NAME);
    $students = unserialize($serialize_data);
    foreach($students as $_student) {
        if($_student['roll'] == $roll && $_student['id'] != $id) {
            $found = true;
            break;
        }
    }
    if(!$found) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;
        $serialize_data = serialize($students);
        file_put_contents(DB_NAME, $serialize_data, LOCK_EX);   
        return true;
    }
    return false;
}
function deleteStudent($id) {
    $serialize_data = file_get_contents(DB_NAME);
    $students = unserialize($serialize_data);
    foreach($students as $offset => $student) {
        if($student['id'] == $id) {
            unset($students[$offset]);
        }
    }
    $serialize_data = serialize($students);
    file_put_contents(DB_NAME, $serialize_data);
}

function getNewID($students) {
    $maxID = max(array_column($students, 'id'));
    return $maxID + 1;
}