<?php
function find_length($val){
    return strlen($val);
}

$data = array('banana','orange','apple');
$length = array_map("find_length", $data);
print_r($length);

?>