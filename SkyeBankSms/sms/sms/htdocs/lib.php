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

function test_smpp($host, $port, $username, $passwd) {
    
    $pwd = getcwd();
    
    $cmd = "\"$pwd\jdk\bin\java.exe\"  -jar SSMPPTest.jar $host $username $passwd $port 2>&1";
    
    $output = shell_exec($cmd);
    sleep(1);
    $result = R::getRow('select result from smpp_test limit 1');
    return $result['result'];
   
}

################# Users ####################

function change_password($newpassword, $username = 'admin') {
    R::exec("update users set passwd=? where username=?", array($newpassword, $username)) or die('failure');
    return 'success';
}

function get_user($username) {
    $one = R::getRow('select count(id) as num from users where username=?', array($username));
    $on = $result['num'];
    return $on;
}

function is_user($pwd, $user = 'admin') {
    $result = R::getRow("select count(id) as num from users where username='$user' and passwd=?", array($pwd));
    $val = $result['num'];
    #return ($val == '1');
    return $val;
}

################# Plugins ####################


function delete_plugin($id){
    $plugin = R::load('plugin-table', $id);
    R::trash($plugin);
}

function get_plugins() {
    return R::getAll('select * from plugin order by id desc');
}

function add_plugin() {
    $plugin = R::dispense('plugin');
    $plugin->name = $_REQUEST['name'];
    $plugin->dbtype = $_REQUEST['type'];
    $plugin->host = $_REQUEST['ip'];
    $plugin->pwd = $_REQUEST['pwd'];
    $plugin->dbname = $_REQUEST['dbname'];
    $plugin->username = $_REQUEST['username'];
    $plugin->port = $_REQUEST['port'];
    $plugin->sql_query = $_REQUEST['sql_query'];
    $plugin->update_sql = $_REQUEST['update_sql'];
    $plugin->senderid_col = $_REQUEST['sender'];
    $plugin->msg_col = $_REQUEST['msg'];
    $plugin->id_col = $_REQUEST['cid'];
    $plugin->msisdn_col = $_REQUEST['receiver'];
    $plugin->status = '0';
    $plugin->user = 'admin';
    $pid = R::store($plugin) or die('Failure');
    return 'Success';
}

/*
function add_plug($name,$type,$ip,$pwd,$dbname,$username,$port,$sql_query,$update_sql,$sender,$msg,$cid,$receiver){
    $plugin = R::dispense('plugin');
    $plugin->name = $name;
    $plugin->dbtype = $type;
    $plugin->host = $ip;
    $plugin->pwd = $pwd;
    $plugin->dbname = $dbname;
    $plugin->username = $username;
    $plugin->port = $port;
    $plugin->sql_query = $sql_query;
    $plugin->update_sql = $update_sql;
    $plugin->senderid_col = $sender;
    $plugin->msg_col = $msg;
    $plugin->id_col = $cid;
    $plugin->msisdn_col = $receiver;
    $plugin->status = '0';
    $plugin->user = 'admin';
    $pid = R::store($plugin) or die('Failure');
    return 'Success';
}
*/


function add_plug() {
    $plugin = R::dispense('plugin');
    $plugin->name = $_REQUEST['name'];
    $plugin->dbtype = $_REQUEST['dbtype'];
    $plugin->host = $_REQUEST['ip'];
    $plugin->pwd = $_REQUEST['pwd'];
    $plugin->dbname = $_REQUEST['dbname'];
    $plugin->username = $_REQUEST['username'];
    $plugin->port = $_REQUEST['port'];
    $plugin->sql_query = $_REQUEST['sql_query'];
    $plugin->update_sql = $_REQUEST['update_sql'];
    $plugin->senderid_col = $_REQUEST['sender'];
    $plugin->msg_col = $_REQUEST['msg'];
    $plugin->id_col = $_REQUEST['cid'];
    $plugin->msisdn_col = $_REQUEST['receiver'];
    $plugin->status = '0';
    $plugin->user = 'admin';
    $pid = R::store($plugin) or die('Failure');
    return 'Success';
}
 
 

function update_plugin() {
    try {
        R::exec("update plugin set name=?,dbtype=?,host=?,pwd=?,username=?,sql_query=?,update_sql=?,"
                . "senderid_col=?,msg_col=?,msisdn_col=?,id_col=?,status=?,user=? where id=?", array(
            $_REQUEST['name'],
            $_REQUEST['type'],
            $_REQUEST['ip'],
            $_REQUEST['pwd'],
            $_REQUEST['username'],
            $_REQUEST['sql_query'],
            $_REQUEST['update_sql'],
            $_REQUEST['sender'],
            $_REQUEST['msg'],
            $_REQUEST['receiver'],
            $_REQUEST['cid'],
            $_REQUEST['status'],
            'admin',
            $_REQUEST['id']
        ));
        return 'Success';
    } catch (Exception $ex) {
        return 'Failure';
    }
}

function test_plugin(){
    
    $name = $_REQUEST['name'];
    $dbtype = $_REQUEST['dbtype'];
    $databasename = $_REQUEST['dbname'];
    $port = $_REQUEST['port'];
    $host = $_REQUEST['host'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['pwd'];
    $pwd = getcwd();
    $cmd = "\"$pwd\jdk\bin\java.exe\" -jar DBConnectionTest.jar $name $dbtype $databasename $port $host $username $password 2>&1";
    $output = shell_exe($cmd);
    #echo $output;
    return $output;
}

function test_plug($name,$dbtype,$databasename,$port,$host,$username,$password){
    
    //$name = $_REQUEST['name'];
    //$dbtype = $_REQUEST['dbtype'];
    //$databasename = $_REQUEST['databasename'];
    //$port = $_REQUEST['port'];
    //$host = $_REQUEST['host'];
    //$username = $_REQUEST['username'];
    //$password = $_REQUEST['pwd'];
    $pwd = getcwd();
    $cmd = "\"$pwd\jdk\bin\java.exe\" -jar DBConnectionTest.jar $name $dbtype $databasename $port $host $username $password 2>&1";
    $output = shell_exec($cmd);
    #echo $output;
    return $output;
}


function get_plugin($id) {
    return R::getRow('select * from plugin where id = ? limit 1', array($id));
}
################# SMS Test ###################

function test_sms() {
    
    $pwd = getcwd();
    
    $sender = $_REQUEST['sender'];
    $receiver = $_REQUEST['receiver'];
    $msg = $_REQUEST['msg'];
    $cmd = "\"$pwd\jdk\bin\java.exe\" -jar SMSTest.jar $sender $receiver $msg";
    echo "$cmd<br>";
    $output = shell_exec($cmd);
    return 'Success';
}
?>