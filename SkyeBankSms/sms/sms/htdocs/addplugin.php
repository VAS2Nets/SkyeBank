<?php
include_once 'lib.php';
#$roc = add_plugin();
//$testpl = test_plugin();
#var_dump($roc);
//controller.php?action=addplugin&redirect=addplugin.php
if (isset($_POST['savi'])) {
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
    $svalue = add_plug($name,$type,$ip,$pwd,$dbname,$username,$port,$sql_query,$update_sql,$sender,$msg,$cid,$receiver);
    if($svalue == 'Success')   {                                 
        header('Location:addplugin.php?addpluginUpdate=1&addpluginUp=Update Successful');
    } else {
       die(header('Location:addplugin.php?addpluginUpdate=2&addpluginUp=Update Failed')); 
    }             
}
if (isset($_POST['test'])) {
    $name = $_POST['name'];
    $type = $_POST['dbtype'];
    $dbname = $_POST['dbname'];
    $ip = $_POST['ip'];
    $port = $_POST['port'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $sql_query = $_POST['sql_query'];
    $update_sql = $_POST['update_sql'];
    $msg = $_POST['msg'];
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $cid = $_POST['cid'];
    #echo $password;
    $test_value = test_plug($name,$type,$dbname,$port,$host,$username,$pwd);
    #echo $test_value;
    if($test_value == 'Success')   {                                 
        header("Location:addplugin.php?addpluginTest=1&addpluginSa=Test Successful&name=$name&dbtype=$type&dbname=$dbname&ip=$ip&port=$port&username=$username&sql_query=$sql_query&update_sql=$update_sql&msg=$msg&sender=$sender&receiver=$receiver&cid=$cid");
    } else {
       die(header("Location:addplugin.php?addpluginTest=2&addpluginSa=Test Failed&name=$name&dbtype=$type&dbname=$dbname&ip=$ip&port=$port&username=$username&sql_query=$sql_query&update_sql=$update_sql&msg=$msg&sender=$sender&receiver=$receiver&cid=$cid")); 
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
                <h1 class="page-header">Add Plugin</h1>
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
      if (document.addplugin.name.value == "")
        {
            alert("Please enter name");
            document.addplugin.name.focus();
            return false;
        }
          if (document.addplugin.dbname.value == "")
        {
            alert("Please select database name");
            document.addplugin.dbname.focus();
            return false;
        }
          if (document.addplugin.ip.value == "")
        {
            alert("Please enter IP");
            document.addplugin.ip.focus();
            return false;
        }
          if (document.addplugin.port.value == "")
        {
            alert("Please enter the port");
            document.addplugin.port.focus();
            return false;
        }
          if (document.addplugin.username.value == "")
        {
            alert("Please enter username");
            document.addplugin.username.focus();
            return false;
        }
          if (document.addplugin.pwd.value == "")
        {
            alert("Please enter password");
            document.addplugin.pwd.focus();
            return false;
        }
          if (document.addplugin.sql_query.value == "")
        {
            alert("Please enter SQL Query");
            document.addplugin.sql_query.focus();
            return false;
        }
          if (document.addplugin.update_sql.value == "")
        {
            alert("Please enter Update SQL");
            document.addplugin.update_sql.focus();
            return false;
        }
          if (document.addplugin.sender.value == "")
        {
            alert("Please enter Sender ID");
            document.addplugin.sender.focus();
            return false;
        }
          if (document.addplugin.receiver.value == "")
        {
            alert("Please enter Receiver");
            document.addplugin.receiver.focus();
            return false;
        }
          if (document.addplugin.msg.value == "")
        {
            alert("Please enter message");
            document.addplugin.msg.focus();
            return false;
        }
          if (document.addplugin.cid.value == "")
        {
            alert("Please enter row id");
            document.addplugin.cid.focus();
            return false;
        }
        return(true);
    }
</script>
                  <div style="width:45%;margin-left: 2%;float:left;"> 
    <p align="center" style="color:#398439;margin-top: 3%;line-height:1em;"><?php if($_GET["addpluginTest"]) {echo $_GET['addpluginSa']; }
    if($_GET["addpluginUpdate"]){ echo $_GET['addpluginUp'];} ?></p>
                           <form name ="addplugin" id="addplugin" method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>" onsubmit=return(validate()) > 
                           <div class="form-group" align="center">
                            <label><?php //if($_GET["addPluginTest"]) echo $_GET['allpluginSa']; 
                            //if($_GET["addpluginUpdate"]) echo $_GET['addpluginUp'];?></label>
                            </div>
                               <div class="form-group">
                                    <div style="float: left;">    <label>Name:</label></div>
                                    <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Name" size="35" name="name" id="name" value="<?php echo htmlspecialchars($_GET['name']); ?>">
                                    </div>
                                </div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"> <label>Database Type:</label></div>
                                <div style="margin-left: 1%;float:right;"> <select class="form-control" name="dbtype" id="dbtype" value="<?php echo htmlspecialchars($_GET['dbtype']); ?>">
                                        <option>MYSQL</option>
                                        <option>ORACLE</option>
                                        <option>POSTGRES</option>
                                        <option>SQLSERVER</option>

                                    </select>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">

                                <div style="float: left;"> <label>Database Name:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Database Name" size="35" name="dbname" id="dbname" value="<?php echo htmlspecialchars($_GET['dbname']); ?>">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;"><label>Host/IP:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Host/IP" size="35" name="ip" id="ip" value="<?php echo htmlspecialchars($_GET['ip']); ?>">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Port:</label></div>
                                <div style="margin-left: 1%;float:right;">    <input class="form-control" placeholder="Enter Port" size="35" name="port" id="port" value="<?php echo htmlspecialchars($_GET['port']); ?>">
                                </div></div>
                            <div style="clear: both;"></div><p></p><div class="form-group">
                                <div style="float: left;">  <label>Username:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Username" size="35" name="username" id="username" value="<?php echo htmlspecialchars($_GET['username']); ?>">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Password:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Password" type="password" size="35" name="pwd" id="pwd">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;">  <label>Sql Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;" placeholder="Enter SQL Query" name="sql_query" id="sql_query" value="<?php echo htmlspecialchars($_GET['sql_query']); ?>"></textarea>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;">  <label>Update Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;" placeholder="Update SQL Squery" name="update_sql" id="update_sql" value="<?php echo htmlspecialchars($_GET['update_sql']); ?>"></textarea>
                                </div></div>
                            <div style="clear: both;"></div><p></p><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Message:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter message column" size="35" name="msg" id="msg" value="<?php echo htmlspecialchars($_GET['msg']); ?>">
                                </div></div>
                             <div style="clear: both;"></div><p></p><p></p>
<<<<<<< HEAD
                             <button type="submit" class="btn btn-default" style="width:50%;background: #08C;color:#fff;" name="savi" id="savi">Save</button>
                             <button type="submit" class="btn btn-default" style="width:48%;background:#2c4762;color:#fff;" name="test" id="test">Test Connection</button>
=======
                            <button type="submit" class="btn btn-default" style="width:50%;background: #08C;color:#fff;" name="sub">Save</button>
                            <button type="submit" class="btn btn-default" style="width:48%;background:#2c4762;color:#fff;" name="test">Test Connection</button>
>>>>>>> origin/master

                       
                        <p></p>
                    </div>
                    <!-- .panel-body -->
                    <div style="width:45%;margin-left:5%;margin-top:2%;float:left;"> 
                        
                            <div class="form-group">
                                <div style="float: left;">    <label>What column is Sender ID:</label></div>
<<<<<<< HEAD
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Sender id column" size="25" name="sender" id="sender" value="<?php echo htmlspecialchars($_GET['sender']); ?>">
=======
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Sender id column" size="25" name="sender">
>>>>>>> origin/master
                                </div>
                            </div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">

                                <div style="float: left;"> <label>What column is Receiver:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter receiver column" size="25" name="receiver" id="receiver" value="<?php echo htmlspecialchars($_GET['receiver']); ?>">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            
                            <div class="form-group">
                                <div style="float: left;"> <label>What column is Row ID:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter row id Column" size="25" name="cid" id="cid" value="<?php echo htmlspecialchars($_GET['cid']); ?>">
                                </div></div>
                            <div style="clear: both;"></div><br /><br />
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