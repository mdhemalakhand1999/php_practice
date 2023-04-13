<?php
interface BaseStudent {
    function displayName();
}
class ImprovedStudent implements BaseStudent {
    private $name;
    private $title;
    function __construct($name, $title) {
        $this->name = $name;
        $this->title = $title;
    }
    function displayName() {
        echo "Hello from {$this->title}. {$this->name}";
    }
}
class Students implements BaseStudent {
    private $name;
    function __construct($name) {
        $this->name = $name;
    }
    function displayName() {
        echo "Hello from ".$this->name;
    }
}

// class StudentManager {
//     function introduceStudent($name) {
//         $st = new Students($name);
//         $st->displayName();
//     }
// }
class StudentManager {
    function introduceStudent(BaseStudent $student) {
        $student->displayName();
    }
}
$d = new dateTime();

$ist = new ImprovedStudent("John Doe", "MR");
$st = new Students("John Doe");
$sm = new StudentManager();
$sm->introduceStudent($ist);