<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'lib.php';

#$result = change_password('admin');
#var_dump(get_user('admin'));
$result = update_smpp('197.253.10.25','2775', 'kannel2', '12345');
#echo $result;
#var_dump(get_smpp());
var_dump(get_plugins())

?>

