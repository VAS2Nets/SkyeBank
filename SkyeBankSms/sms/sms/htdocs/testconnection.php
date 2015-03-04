<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 */

$pwd = getcwd();
#$cmd = "\"$pwd\jdk\bin\java.exe\" -jar SSMPPTest.jar '192.168.1.156' 'tech' '12345' 3110 2>&1";

$cmd = "\"$pwd\jdk\bin\java.exe\" -jar DBConnectionTest.jar mytest mysql skyebank 3306 localhost root password111  2>&1";

#$cmd = "\"$pwd\jdk\bin\java.exe\" -version 2>&1";


// Show The Java Version After Setting Environmental Variable
$output = shell_exec($cmd);
echo "<strong>Java Version After Setting Environmental Variable</strong>";
echo "<hr/>";
echo $output;



?>