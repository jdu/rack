<?php

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'test':
            spec_run();
            break;
        default:
            break;
    }
}

function spec_run(){
    shell_exec("test.sh");
    echo json_encode(array(
        "success" => true
    ), true);
}

?>