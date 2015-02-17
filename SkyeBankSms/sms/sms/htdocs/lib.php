<?php

require_once 'init.php';



################# Engine ####################

function restart_engine() {
    
}
################# SMPP ####################
function update_smpp($host, $port, $username, $pwd) {
    R::exec("update smpp_setting set host=?,port=?,username=?,password=?", array($host, $port, $username, $pwd))
            or die('failure');
    return 'success';
}

function get_smpp() {
    $one = R::getRow('select * from smpp_setting where 1 ORDER BY id LIMIT 1');
    return $one;
}



function test_smpp() {
    $pwd = getcwd();
    $jarfile = "$pwd/javafiles/SkyeBankSMPPTest.jar";
    echo $jarfile;
    exec("java -jar $jarfile \"192.168.1.154\" \"kannel2\" \"12345\" \"2775\"", $output);
    echo "<br>";
    echo $output;
}

################# Users ####################

function change_password($newpassword, $username = 'admin') {
    R::exec("update users set passwd=? where username=?", array($newpassword, $username)) or die('failure');
    return 'success';
}

function get_user($username) {
    $one = R::getRow('select * from users where username=? ORDER BY id LIMIT 1 ', array($username));
    return $one;
}

function is_user($pwd,$user = 'admin') {
    $result = R::getRow('select count(id) num from users where username=? and passwd=? limit 1',
            array($user,$pwd));
    $val = $result['num'];
    return ($val=='1');
}

################# Plugins ####################
function get_plugins() {
     return R::getAll( 'select * from plugin' );

}
function add_plugin(){
    
}
function update_plugin(){
    
}
function get_plugin($id){
    return R::getRow('select * from plugin where id = ? limit 1',array($id));
}
?>

