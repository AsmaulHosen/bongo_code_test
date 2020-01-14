<?php
function printDepth($data, $depth=1){
    foreach($data as $key => $value)
    {   
        print($key.' '.$depth.'<br>');
        if(is_array($data[$key])){
            printDepth($data[$key], $depth=$depth+1);
        }
    }
}

//Sample Data
$data = array (
    "key1" => array(
        "key2" => 5,
        "key3" => array(
            "key4" => 9,
        ),
    ),
    "key5" => array (
        "key6" => 1,
        "key7" => array (
            "key8" => 4,
        ),
    ),
);

printDepth($data);