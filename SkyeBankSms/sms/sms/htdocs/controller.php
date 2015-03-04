<?php

include_once 'lib.php';
# maine controller handlign all posts from the views
# all views must send a parameter to determine the action they want executed
# after execution, controller will redirect to the next view recommended by the calling view
# eg controller.php?action=addplugin&redirect=addplugin.php
$action= $_REQUEST['action'];
$redirect=$_REQUEST['redirect'];
$flash=null;

switch ($action) {
    case 'testsms':
        $flash = test_sms();
        //$flash = "Success";
        break;
    case 'addplugin':
        # the correct way to do it, always set $flash = function return
        $flash = add_plugin(); 
        //$flash = "Success";
        break;
    case 'test_smpp':
        # the correct way to do it, always set $flash = function return
        #add_plugin(); 
        $flash = test_smpp($ip, $port, $username, $passwd);
        #$flash = "Success";
        break;
    case 'get_smpp':
        $flash= get_smpp(); 
        //$flash = "Success";
        break;
    case 'update_smpp':
        $flash=update_smpp($host, $port, $username, $pwd); 
        #$flash = "Success";
        break;
    case 'change_password':
        #change_password($newpassword, $username);
        $flash="success";
        break;
    case getplugins;
        $flash= "get_plugins()";
        break;
    case'updateplugin':
        $flash= update_plugin();
        #$flash="success";
        break;
    case 'is_user':
        $flash="is_user($pwd, $user = 'admin')";
        break;
    default:
        break;
}
header("Location: $redirect?flash=$flash");

