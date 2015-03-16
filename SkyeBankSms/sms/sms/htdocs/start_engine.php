<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

system("c:\WINDOWS\system32\cmd.exe /c start_engine.bat 2>&1");
#shell_exec("start_engine.bat 2>&1");
#pclose(popen("start "."start_engine.bat", "r"));
exit;

#header("Location:index.php");