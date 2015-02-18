<?php

require_once 'init.php';
# set up users
# first empty all data
echo 'Emptying users...<br>';
R::wipe( 'users' );
echo 'Recreating users...<br>';
$user = R::dispense('users');
$user->username = 'admin';
$user->passwd = 'admin';
$user_id = R::store($user);
echo 'Done<br>';
echo "User created ($id)<br>";
echo 'Emptying SMPP settings...<br>';
R::wipe( 'smpp_setting' );
echo "Recreating SMPP settings..<br>";
$smpp = R::dispense('smpp_setting');
$smpp->host = '192.168.1.154';
$smpp->port = '2775';
$smpp->username = 'kannel2';
$smpp->password = '12345';
$smpp->user_id = $user_id;
$smpp->status = '1';# one if its ok
$sid = R::store($smpp);
echo "SMPP settings created ($sid)<br>";
echo "Adding default plugin<br>";
R::exec("delete from plugin where name='default'");
$plugin = R::dispense('plugin');
$plugin->name='default';
$plugin->dbtype='mysql';
$plugin->host='localhost';
$plugin->pwd = 'password';
$plugin->username='default';
$plugin->port='3306';
$plugin->sql_query="Select * from accounts where status='send'";
$plugin->update_sql="update account set status='sent' where id=$id";
$plugin->senderid_col='sender';
$plugin->msg_col='msg';
$plugin->id_col='id';
$plugin->msisdn_col='receiver';
$plugin->status='0';
$plugin->user='admin';
##
$pid = R::store($plugin);
echo "Default Plugin added ($pid)<br>";
echo "Setting up SMPP test Repository....<br>";
# a table to log result of SMPP test
R::wipe('smpp_test');
$smpp_test = R::dispense('smpp_test');
$smpp_test->result = 'Failure';
$tid = R::store($smpp_test);
echo "Done ($tid)<br>";
echo "Database Install complete";



