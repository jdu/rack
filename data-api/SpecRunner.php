<?php

if(isset($_GET['action'])) {
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
    shell_exec("/var/www/twine-jenkins-scripts/data-api/test.sh");
    echo json_encode(array(
        "success" => true
    ), true);
}

?>