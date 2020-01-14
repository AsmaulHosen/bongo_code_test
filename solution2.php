<?php
class Person {
    public function __construct($first_name, $last_name, $father) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->father = $father;
    }
}

function printDepth($data, $depth=1){
    foreach($data as $key => $value)
    {   
        print($key.' '.$depth.'<br>');
        if(is_array($data[$key])) printDepth($data[$key], $depth=$depth+1);
        if(is_object($data[$key])) printDepth(get_object_vars($data[$key]), $depth=$depth+1);
    }
}

//Creating Object of Person Class
$person_a = new Person("User", "1", NULL);
$person_b = new Person("User", "2", $person_a);
// Sample Data
$data = array (
    "key1" => 1,
    "key2" => array (
        "key3" => 1,
        "key4" => array (
            "key5" => 4,
            "User" => $person_b,
        ),
    ),
);
printDepth($data);