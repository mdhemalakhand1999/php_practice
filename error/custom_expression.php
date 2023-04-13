<?php
$person = [
    "name" => "MD hemal",
    "id" => "334",
    "age" => "23",
    "sex" => "F"
];
function processMetarnetyLavel($person) {
    if('M' == $person["sex"]) {
        echo "processed";
    } else if($person['age'] < 18) {
        throw new Exception("Too young");
    }
    else {
        throw new genderMissmatchException($person); 
    }
}
class genderMissmatchException extends Exception {
    private $person;
    function __construct($person) {
        $this->person = $person;
        parent::__construct("Gender Missmatch<br/>");
    }
    function getDetailedMessage() {
        echo "Gender missmatch for person with id is {$this->person['id']}";
    }
}
try {
    processMetarnetyLavel($person);
} catch(genderMissmatchException $e) {
    echo $e->getMessage();
    echo $e->getDetailedMessage();
} catch(Exception $e) {
    echo $e->getMessage(). "Other exception";
}