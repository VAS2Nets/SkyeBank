<?php 
include_once 'lib.php';

$id = $_REQUEST['id'];

$roc = delete_plugins($id);
if($roc == 'success')   {                                 
     header('Location:viewplugins.php'); 
    } else {
        echo "Delete Failed" ;
    }  
    
?>