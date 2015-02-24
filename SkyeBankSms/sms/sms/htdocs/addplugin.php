<?php
include_once 'lib.php';
//$roc = add_plugin();
//$testpl = test_plugin();
//var_dump($testpl);
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
          if (document.addplugin.senderid.value == "")
        {
            alert("Please enter Sender ID");
            document.addplugin.senderid.focus();
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
    <p align="center" style="color:#398439;margin-top: 3%;line-height:1em;"><?php echo $_REQUEST['flash']; ?></p>
                           <form name ="addplugin" id="addplugin" method="post" action="controller.php?action=addplugin&redirect=addplugin.php" onsubmit="return(validate());" > 
                           <div class="form-group">
                                    <div style="float: left;">    <label>Name:</label></div>
                                    <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Name" size="35" name="name">
                                    </div>
                                </div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"> <label>Database Type:</label></div>
                                <div style="margin-left: 1%;float:right;"> <select class="form-control" name="type">
                                        <option>MYSQL</option>
                                        <option>ORACLE</option>
                                        <option>POSTGRE</option>
                                        <option>SQLSERVER</option>

                                    </select>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">

                                <div style="float: left;"> <label>Database Name:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Database Name" size="35" name="dbname">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;"><label>Host/IP:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Host/IP" size="35" name="ip">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Port:</label></div>
                                <div style="margin-left: 1%;float:right;">    <input class="form-control" placeholder="Enter Port" size="35" name="port">
                                </div></div>
                            <div style="clear: both;"></div><p></p><div class="form-group">
                                <div style="float: left;">  <label>Username:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Username" size="35" name="username">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Password:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Password" type="password" size="35" name="pwd">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;">  <label>Sql Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;" placeholder="Enter SQL Query" name="sql_query"></textarea>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;">  <label>Update Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;" placeholder="Update SQL Squery" name="update_sql"></textarea>
                                </div></div>
                            <div style="clear: both;"></div><p></p><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Message:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter message column" size="35" name="msg">
                                </div></div>
                             <div style="clear: both;"></div><p></p><p></p>
                            <button type="submit" class="btn btn-default" style="width:50%;background: #08C;color:#fff;" name="sub">Save</button>
                            <button type="submit" class="btn btn-default" style="width:48%;background:#2c4762;color:#fff;" name="test">Test Connection</button>

                       
                        <p></p>
                    </div>
                    <!-- .panel-body -->
                    <div style="width:45%;margin-left:5%;margin-top:2%;float:left;"> 
                        
                            <div class="form-group">
                                <div style="float: left;">    <label>What column is Sender ID:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Sender id column" size="25" name="sender">
                                </div>
                            </div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">

                                <div style="float: left;"> <label>What column is Receiver:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter receiver column" size="25" name="receiver">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            
                            <div class="form-group">
                                <div style="float: left;"> <label>What column is Row ID:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter row id Column" size="25" name="cid">
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