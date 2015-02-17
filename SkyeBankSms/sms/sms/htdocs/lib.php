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

function login($username, $pwd) {
    
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
    
}
?>

