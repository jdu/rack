<?php

if(isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    switch($action) {
        case 'test':
            spec_run();
            break;
        default:
            break;
    }
}

function spec_run(){
    $result = shell_exec("./test.sh 2>&1; echo $?");
    echo json_encode(array(
        "success" => true,
        "data" => $result
    ), true);
}

?>