<?php
include_once 'lib.php';
//$rec = get_smpp();
$redirect=$_REQUEST['redirect'];

if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $ip = $_POST['ip'];
    $pwd = $_POST['pwd'];
    $username = $_POST['username'];
    $port = $_POST['port'];
    $sql_query = $_POST['sql_query'];
    $update_sql = $_POST['update_sql'];
    $sender = $_POST['sender'];
    $msg = $_POST['msg'];
    $cid = $_POST['cid'];
    $receiver = $_POST['receiver'];

    $pro = add_plugin();
    
    echo "<script type='text/javascript'>alert('Plugin Added successfully!')</script>";
} else {
    echo "<script type='text/javascript'>alert('Plugin cannot be added')</script>";
}
?>