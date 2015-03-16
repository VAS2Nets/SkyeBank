<?php
include_once 'lib.php';

$id = isset($_REQUEST) ? $_REQUEST['id']:$_POST['id'];
/*
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id']; 
    $rc = get_plugin($id);
}
 * 
 */
$rc = get_plugin($id);
//var_dump($rc);

if (isset($_POST['sub'])) {
    
    $name = $_POST['name'];
    $type = $_POST['dbtype'];
    $dbname = $_POST['dbname'];
    $ip = $_POST['ip'];
    $port = $_POST['port'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $sql_query = $_POST['sql_query'];
    $update_sql = $_POST['update_sql'];
    $msg = $_POST['msg'];
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $cid = $_POST['cid'];
    #echo $password;
    #$save_value = add_plug($name,$type,$ip,$pwd,$dbname,$username,$port,$sql_query,$update_sql,$sender,$msg,$cid,$receiver);
    $svalue = update_plugin();
    if($svalue == 'Success')   {                                
        header('Location:viewplugins.php?updatepluginUpdate=1&updatepluginUp=Update Successful');
    } else {
       die(header('Location:viewplugins.php?updatepluginUpdate=2&updatepluginUp=Update Failed')); 
    }             
}     
?>
<title>Skye Bank Dashboard</title>
<?php  include_once 'css.php'; ?>
<div id="wrapper">

     <!-- Navigation -->
    <?php include_once 'nav.php'; ?>
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Plugin</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Plugin Form
                    </div>
                    <!-- /.panel-heading -->
                  

    <script>
    function validate()
    {
      if (document.updateplugin.name.value == "")
        {
            alert("Please enter name");
            document.updateplugin.name.focus();
            return false;
        }
          if (document.updateplugin.dbname.value == "")
        {
            alert("Please select database name");
            document.updateplugin.dbname.focus();
            return false;
        }
          if (document.updateplugin.ip.value == "")
        {
            alert("Please enter IP");
            document.updateplugin.ip.focus();
            return false;
        }
          if (document.updateplugin.port.value == "")
        {
            alert("Please enter the port");
            document.updateplugin.port.focus();
            return false;
        }
          if (document.updateplugin.username.value == "")
        {
            alert("Please enter username");
            document.updateplugin.username.focus();
            return false;
        }
          if (document.updateplugin.pwd.value == "")
        {
            alert("Please enter password");
            document.updateplugin.pwd.focus();
            return false;
        }
          if (document.updateplugin.sql_query.value == "")
        {
            alert("Please enter SQL Query");
            document.updateplugin.sql_query.focus();
            return false;
        }
          if (document.updateplugin.update_sql.value == "")
        {
            alert("Please enter Update SQL");
            document.updateplugin.update_sql.focus();
            return false;
        }
          if (document.updateplugin.senderid.value == "")
        {
            alert("Please enter Sender ID");
            document.updateplugin.senderid.focus();
            return false;
        }
          if (document.updateplugin.receiver.value == "")
        {
            alert("Please enter Receiver");
            document.updateplugin.receiver.focus();
            return false;
        }
          if (document.updateplugin.msg.value == "")
        {
            alert("Please enter message");
            document.updateplugin.msg.focus();
            return false;
        }
          if (document.updateplugin.cid.value == "")
        {
            alert("Please enter row id");
            document.updateplugin.cid.focus();
            return false;
        }
        return(true);
    }
</script>

                  <div style="width:45%;margin-left: 2%;float:left;"> 
   <p align="center" style="color:#398439;margin-top: 3%;line-height:1em;"><?php if($_GET["updatepluginUpdate"]){ echo $_GET['updatepluginUp'];} ?></p>
                           <form name ="updateplugin" id="updateplugin" method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>" onsubmit="return(validate());" > 
                           <div class="form-group">
                                    <div style="float: left;">    <label>Name:</label></div>
                                    <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo $rc['name']; ?>" size="35" name="name" placeholder="<?php echo ( htmlspecialchars( $rc['name'] ) ); ?>">
                                    </div>
                                </div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"> <label>Database Type:</label></div>
                                <div style="margin-left: 1%;float:right;"> <select class="form-control" name="dbtype" value="<?php echo ( htmlspecialchars($rc['dbtype'])); ?>" >
                                        <option>MYSQL</option>
                                        <option>ORACLE</option>
                                        <option>POSTGRE</option>
                                        <option>SQLSERVER</option>

                                    </select>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">

                                <div style="float: left;"> <label>Database Name:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo ( htmlspecialchars($rc['dbname'])); ?>" size="35" name="dbname">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;"><label>Host/IP:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo ( htmlspecialchars($rc['host'])); ?>" size="35" name="ip">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Port:</label></div>
                                <div style="margin-left: 1%;float:right;">    <input class="form-control" value="<?php echo ( htmlspecialchars($rc['port'])); ?>" size="35" name="port">
                                </div></div>
                            <div style="clear: both;"></div><p></p><div class="form-group">
                                <div style="float: left;">  <label>Username:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo ( htmlspecialchars($rc['username'])); ?>" size="35" name="username">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Password:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo ( htmlspecialchars($rc['pwd'])); ?>" type="password" size="35" name="pwd">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;">  <label>Sql Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" rows="3" value="<?php echo ( htmlspecialchars($rc['sql_query'])); ?>" name="sql_query" size ="35" style="height:100px;" ></input>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;">  <label>Update Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" size="35" style="height:100px;" value="<?php echo ( htmlspecialchars($rc['update_sql'])); ?>" name="update_sql"></input>
                                </div></div>
                            <div style="clear: both;"></div><p></p><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Message:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" value="<?php echo ( htmlspecialchars($rc['msg_col'])); ?>" size="35" name="msg">
                                </div></div>
                             <div style="clear: both;"></div><p></p><p></p>
                            <button type="submit" class="btn btn-default" style="width:100%;background: #08C;color:#fff;" name="sub" id="sub">Update</button>
                   
                        <p></p>
                    </div>
                    <!-- .panel-body -->
                    <div style="width:45%;margin-left:5%;margin-top:2%;float:left;"> 
                        
                            <div class="form-group">
                                <div style="float: left;">    <label>What column is Sender ID:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo ( htmlspecialchars($rc['senderid_col'])); ?>" size="25" name="sender">
                                </div>
                            </div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">

                                <div style="float: left;"> <label>What column is Receiver:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" value="<?php echo ( htmlspecialchars($rc['msisdn_col'])); ?>" size="25" name="receiver">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            
                            <div class="form-group">
                                <div style="float: left;"> <label>What column is Row ID:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" value="<?php echo ( htmlspecialchars($rc['id_col'])); ?>" size="25" name="cid">
                                </div></div>
                            <div style="clear: both;"></div><br /><br />
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        </form>
                        <p></p>
                    </div>
            </div>
        </div>

    </div>
</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>
<!-- Page-Level Demo Scripts - Notifications - Use for reference -->
<script>
// tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

// popover demo
    $("[data-toggle=popover]")
            .popover()
</script>