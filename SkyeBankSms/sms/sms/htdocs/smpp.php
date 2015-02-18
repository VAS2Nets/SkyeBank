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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="logs.php"><i class="fa fa-bar-chart-o fa-fw"></i> Logs</a>
                           
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Plugins<span class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                                <li>
                                    <a href="addplugin.php">Add Plugin</a>
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
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SMPP Connection</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <script type="text/javascript">

    function validate()
    {
      if (document.smpp.ip.value == "")
        {
            alert("Please provide your IP");
            document.smpp.ip.focus();
            return false;
        }
        if (document.smpp.port.value == "")
        {
            alert("Please provide your Port No.");
            document.smpp.port.focus();
            return false;
        }
        if (document.smpp.uname.value == "")
        {
            alert("Please provide your Username");
            document.smpp.uname.focus();
            return false;
        }
        if (document.smpp.pass.value == "")
        {
            alert("Please provide your Password");
            document.smpp.pass.focus();
            return false;
        }
        return(true);
    }
</script>
<div style="width:80%;margin-left: 6%;"> 
    <form name ="smpp" id="smpp" method="post" action="" onsubmit="return(validate());" >
        <div class="form-group">
            <label style="float:left;">IP:</label>
            <input class="form-control" placeholder="Enter IP" name="ip" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Port:</label>
            <input class="form-control" placeholder="Enter Port No" name="port" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Username:</label>
            <input class="form-control" placeholder="Enter username" name="uname" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Password:</label>
            <input class="form-control" placeholder="Enter password" name="pass" type="password" value="" style="margin-left:15%;width:65%;">
        </div>
        <button type="submit" class="btn btn-default" style="width:20%;background:#2c4762;color:#fff;" name="add">Save</button>
       <button type="submit" class="btn btn-default" style="width:20%;background: #08C;color:#fff;" >Test</button>

    </form>
                        </div>
        </div>
        
        <!-- /#page-wrapper -->

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


