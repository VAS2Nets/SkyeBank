<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dir =  getcwd();
#die($dir);


#$out = shell_exec("c:\WINDOWS\system32\cmd.exe /c stop_engine.bat 2>&1");

#$out = shell_exec("c:\WINDOWS\system32\cmd.exe \/c TASKKILL \/FI \"WINDOWTITLE eq sms_engine\"");
#shell_exec("cd  stop_engine.bat");
#shell_exec("cd \"$dir\" && stop_engine.bat 2>&1");
//shell_exec("c:\WINDOWS\system32\cmd.exe /c START C:\\Users\IHEAYIN\Desktop\skye_test\htdocs\stop_engine.bat");
//system("cmd /c start_engine.bat");
exec('start stop_engine.bat',$output,$return);

header("Location:index.php");
?>