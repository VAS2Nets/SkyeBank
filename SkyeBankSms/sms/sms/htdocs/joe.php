<?php


/*
#$cmd = "\"C:\Users\samson ude\Documents\NetBeansProjects\SkyeBanksms\SkyeBankSms\sms\sms\htdocs\jdk\bin\java.exe\" -version >2";
$cmd = "java -version";
$res = exec($cmd, $output, $return);
#echo $res;
echo "$return<br>";
var_dump($res, $output, $return);
*/
$pwd = getcwd();
#$cmd = "\"$pwd\jdk\bin\java.exe\" -jar SSMPPTest.jar '192.168.1.156' 'tech' '12345' 3110 2>&1";

$cmd = "\"$pwd\jdk\bin\java.exe\" -jar SMSTest.jar iheanyi +2347032700097 againamen!!! 2>&1";

#$cmd = "\"$pwd\jdk\bin\java.exe\" -version 2>&1";


// Show The Java Version After Setting Environmental Variable
$output = shell_exec($cmd);
echo "<strong>Java Version After Setting Environmental Variable</strong>";
echo "<hr/>";
echo $output;
echo "<br/>";
echo 'Done';
?>
