
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<title>Skye Bank Dashboard</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/skyedash.png" alt="skye"/></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Home</a>
                    </li>
                    <li>
                        <a href="logs.php"><i class="fa fa-bar-chart-o fa-fw"></i>Logs</a>
                        
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Plugins<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addplugin.php" class="active">Add Plugin</a>
                            </li>
                            <li>
                                <a href="viewplugins.php" >View Plugins</a>

                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="smpp.php"><i class="fa fa-edit fa-fw"></i>Configure SMPP</a>
                    </li>
                    <li>
                        <a href="tstmsg.php"><i class="fa fa-edit fa-fw"></i>Test Msg</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

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
                           <script type="text/javascript">

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
                            <form name ="addplugin" id="addplugin" method="post" action="" onsubmit="return(validate());" >
                                <div class="form-group">
                                    <div style="float: left;">    <label>Name:</label></div>
                                    <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter name" size="35" name="name">
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
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter database name" size="35" name="dbname">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;"><label>Host/IP:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter host" size="35" name="ip">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Port:</label></div>
                                <div style="margin-left: 1%;float:right;">    <input class="form-control" placeholder="Enter Port number" size="35" name="port">
                                </div></div>
                            <div style="clear: both;"></div><p></p><div class="form-group">
                                <div style="float: left;">  <label>Username:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter username" size="35" name="username">
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;"><label>Password:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter password" type="password" size="35" name="pwd">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;">  <label>Sql Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;" name="sql_query"></textarea>
                                </div></div>
                            <div style="clear: both;"></div><p></p>
                            <div class="form-group">
                                <div style="float: left;">  <label>Update Query:</label></div>
                                <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;" name="update_sql"></textarea>
                                </div></div>
                            <div style="clear: both;"></div><p></p><p></p>
                            <button type="submit" class="btn btn-default" style="width:50%;background: #08C;color:#fff;">Save</button>
                            <button type="submit" class="btn btn-default" style="width:48%;background:#2c4762;color:#fff;">Test Connection</button>

                       
                        <p></p>
                    </div>
                    <!-- .panel-body -->
                    <div style="width:45%;margin-left:5%;margin-top:2%;float:left;"> 
                        
                            <div class="form-group">
                                <div style="float: left;">    <label>What column is Sender ID:</label></div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter Sender id column" size="25" name="senderid">
                                </div>
                            </div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">

                                <div style="float: left;"> <label>What column is Receiver:</label> </div>
                                <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter receiver column" size="25" name="receiver">
                                </div></div>
                            <div style="clear: both;"></div><p></p>

                            <div class="form-group">
                                <div style="float: left;"><label>What column is Message:</label></div>
                                <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter message column" size="25" name="msg">
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
</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

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


<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    alert("I am an alert box!");
}
</script>


  <?php
    if( $posted ) {
      if( $result ) 
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    }
  ?>