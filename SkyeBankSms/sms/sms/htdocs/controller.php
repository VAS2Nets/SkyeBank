<?php

include_once 'lib.php';
# maine controller handlign all posts from the views
# all views must send a parameter to determine the action they want exscuted
# after execution, controller will redirect to the next view recommended by the calling view
$action= $_REQUEST['action'];
$redirect=$_REQUEST['redirect'];
$flash=null;

switch ($action) {
    case 'testsms':
        #test_smpp($ip, $port, $username, $passwd);
        $flash="Test Completed";
        break;

    default:
        break;
}
header("Location: $redirect?flash=$flash");

