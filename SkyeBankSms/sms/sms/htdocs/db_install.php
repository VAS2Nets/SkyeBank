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
$smpp->host = '192.168.1.156';
$smpp->port = '3110';
$smpp->username = 'tech';
$smpp->password = '12345';
$smpp->user_id = $user_id;
$smpp->status = '1';# one if its ok
$sid = R::store($smpp);
echo "SMPP settings created ($sid)<br>";
echo "Adding default plugin<br>";
R::exec("delete from plugin where name='default'");
/*
$plugin = R::dispense('plugin');
$plugin->name='default';
$plugin->dbtype='mysql';
$plugin->host='localhost';
$plugin->pwd = 'password';
$plugin->username='default';
$plugin->port='3306';
$plugin->sql_query="Select * from accounts where status='send'";
$plugin->update_sql="update account set status='sent' where id=$id";
$plugin->msg_template="Your account balance is [bal]";
$plugin->sender_id = 'Skyebank';
$plugin->id_col='id';
$plugin->msisdn_col='receiver';
$plugin->status='0';
$plugin->user='admin';
##
$pid = R::store($plugin);
 * 
 */
$plugin2 = R::dispense('plugin');
$plugin2->name='mysql2';
$plugin2->dbtype='mysql';
$plugin2->dbname='skyebank';
$plugin2->host='localhost';
$plugin2->pwd = 'password';
$plugin2->username='root';
$plugin2->port='3306';
$plugin2->sql_query="select * from transaction_table where sms_sent = 'no'";
$plugin2->update_sql="update transaction_table set sms_sent = ? where id = ?";
$plugin2->msg_template="Your account balance is [balance]";
$plugin2->sender_id = 'Skyebank';
$plugin2->id_col='id';
$plugin2->msisdn_col='phone_number';
$plugin2->status='0';
$plugin2->user='admin';
##
$pid2 = R::store($plugin2);
echo "Default Plugin added ($pid)<br>";
echo "Setting up SMPP test Repository....<br>";
# a table to log result of SMPP test
R::wipe('smpp_test');
$smpp_test = R::dispense('smpp_test');
$smpp_test->result = 'Failure';
$tid = R::store($smpp_test);
echo "Done ($tid)<br>";
echo "Database Install complete";



