<?php
include_once 'lib.php';
//$rec = get_smpp();
$redirect=$_REQUEST['redirect'];

if (isset($_POST['sub'])) {
    $host = $_POST['host'];
    $port = $_POST['port'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    
    $pro = update_smpp($host, $port, $username, $pwd);
    
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
} else {
    echo "<script type='text/javascript'>alert('submission failed!')</script>";
}
?>

