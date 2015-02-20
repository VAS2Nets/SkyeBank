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

function test_smpp($ip, $port, $username, $passwd) {
    $pwd = getcwd();
    $jarfile = 'SSMPPTest.jar';
    $dir = "$pwd/javafiles/";
    echo "$jarfile<br>";
    #$cmd = "cd \"$dir\" && java -jar $jarfile \"$ip\" \"$username\" \"$passwd\" \"$port\"";
    $cmd = "\"C:\Users\samson ude\Documents\NetBeansProjects\SkyeBanksms\SkyeBankSms\sms\sms\htdocs\jdk\bin\java.exe\" -jar SSMPPTest.jar '192.168.1.154' 'kannel4' '12345' 2775 2>&1";
    #$cmd = "java -jar SSMPPTest.jar $ip $username $passwd $port";
    #echo "$cmd<br>";
    $output = shell_exec($cmd);
    echo $output;
    #exec("$cmd", $output);
    sleep(1);
    $result = R::getRow('select result from smpp_test limit 1');
    return $result['result'];
    #now check the db for outcome of the test
    /*
      var_dump($output);
      $result = shell_exec($cmd);
      echo "$result<br>";
     * 
     */
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

function is_user($pwd, $user = 'admin') {
    $result = R::getRow('select count(id) num from users where username=? and passwd=? limit 1', array($user, $pwd));
    $val = $result['num'];
    return ($val == '1');
}

################# Plugins ####################

function get_plugins() {
    return R::getAll('select * from plugin order by id desc');
}

function add_plugin() {
    $plugin = R::dispense('plugin');
    $plugin->name = $_REQUEST['name'];
    $plugin->dbtype = $_REQUEST['type'];
    $plugin->host = $_REQUEST['ip'];
    $plugin->pwd = $_REQUEST['pwd'];
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
    
}

function get_plugin($id) {
    return R::getRow('select * from plugin where id = ? limit 1', array($id));
}

################# SMS Test ###################

function test_sms() {
    $sender = $_REQUEST['sender'];
    $receiver = $_REQUEST['receiver'];
    $msg = $_REQUEST['msg'];
    $cmd = "java -jar SMSTest.jar \"$sender\" \"+$receiver\" \"$ms\"";
    echo "$cmd<br>";
    exec("$cmd", $output);
    return 'Success';
}
?>