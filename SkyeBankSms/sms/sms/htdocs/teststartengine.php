<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pwd = getcwd();

$cmd = "\"$pwd\jdk\bin\java.exe\" -jar SMSTest.jar iheanyi +2347032700097 againamen!!! 2>&1";

shell_exec("c:\WINDOWS\system32\cmd.exe /c start_engine.bat");

#exec("start_engine.bat");

?>