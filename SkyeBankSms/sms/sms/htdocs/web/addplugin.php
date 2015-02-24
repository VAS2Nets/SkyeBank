
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

</head>

<body>

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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Logs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="chart1.php">Charts 1</a>
                                </li>
                                <li>
                                    <a href="chart2.php">Charts 2</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Plugins<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addplugin.php" class="active">Add Plugin</a>
                                </li>
                                 <li>
                                    <a href="viewplugin.php" >View Plugin</a>
                                    
                                </li>
                               
                            </ul>
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
                        <div style="width:45%;margin-left: 2%;float:left;"> 
                            <form role="form">
                                        <div class="form-group">
                                            <div style="float: left;">    <label>Name:</label></div>
                                            <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter name" size="35">
                                            </div>
                                        </div>
                                         <div style="clear: both;"></div><p></p>
                                       <div class="form-group">
                                           <div style="float: left;"> <label>Database Type:</label></div>
                                           <div style="margin-left: 1%;float:right;"> <select class="form-control">
                                                <option>MYSQL</option>
                                                <option>ORACLE</option>
                                                <option>POSTGRE</option>
                                                <option>SQLSERVER</option>

                                            </select>
                                           </div></div>
                                         <div style="clear: both;"></div><p></p>
                                       <div class="form-group">
                                          
                                           <div style="float: left;"> <label>Database Name:</label> </div>
                                        <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter database name" size="35">
                                        </div></div>
                                          <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;"><label>Port number:</label></div>
                                        <div style="margin-left: 1%;float:right;">    <input class="form-control" placeholder="Enter Port number" size="35">
                                        </div></div>
                                           <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;"><label>Host:</label></div>
                                       <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter host" size="35">
                                       </div></div>
                                                <div style="clear: both;"></div><p></p>
                                       <div class="form-group">
                                           <div style="float: left;">  <label>Username:</label></div>
                                           <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter username" size="35">
                                           </div></div>
                                                        <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;"><label>Password:</label></div>
                                   <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter password" type="password" size="35">
                                   </div></div>
                                                                <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;"><label>Sender id:</label></div>
                                    <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter sender" size="35">
                                    </div></div>
                                                                        <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;"> <label>Msisdn:</label></div>
                                    <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter msisdn" size="35">
                                    </div></div>
                                                                        <div style="clear: both;"></div><p></p>
                                                                        <div class="form-group">
                                                                            <div style="float: left;"><label>Message:</label></div>
                                                                            <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter message" size="35">
                                                                            </div></div>
                                                                        <div style="clear: both;"></div><p></p>
                                                                        <div class="form-group">
                                                                            <div style="float: left;">  <label>Sql Query:</label></div>
                                                                            <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;"></textarea>
                                                                            </div></div>
                                                                            <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;">  <label>Update Query:</label></div>
                                    <div style="margin-left: 1%;float:right;"> <textarea class="form-control" rows="3" style="width:275px;height:100px;"></textarea>
                                   </div></div>
                                     <div style="clear: both;"></div><p></p>
                                <button type="submit" class="btn btn-default" style="width:50%;background: #08C;color:#fff;">Test Connection</button>
                                <button type="submit" class="btn btn-default" style="width:48%;background:#2c4762;color:#fff;">Query</button>
                                <button type="submit" class="btn btn-default" style="width:100%;background: #2d5900;color:#fff;">Add Plugin</button>
                            </form>
                            <p></p>
                        </div>
                        <!-- .panel-body -->
                        <div style="width:45%;margin-left:5%;float:left;"> 
                            <form role="form">
                                        <div class="form-group">
                                            <div style="float: left;">    <label>Name:</label></div>
                                            <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter name" size="35">
                                            </div>
                                        </div>
                                         <div style="clear: both;"></div><p></p>
                                       
                                         <div style="clear: both;"></div><p></p>
                                       <div class="form-group">
                                          
                                           <div style="float: left;"> <label>Database Name:</label> </div>
                                        <div style="margin-left: 1%;float:right;"> <input class="form-control" placeholder="Enter database name" size="35">
                                        </div></div>
                                          <div style="clear: both;"></div><p></p>
                               
                                <div class="form-group">
                                    <div style="float: left;"><label>Sender id:</label></div>
                                    <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter sender" size="35">
                                    </div></div>
                                                                        <div style="clear: both;"></div><p></p>
                                <div class="form-group">
                                    <div style="float: left;"> <label>Msisdn:</label></div>
                                    <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter msisdn" size="35">
                                    </div></div>
                                                                        <div style="clear: both;"></div><p></p>
                                                                        <div class="form-group">
                                                                            <div style="float: left;"><label>Message:</label></div>
                                                                            <div style="margin-left: 1%;float:right;"><input class="form-control" placeholder="Enter message" size="35">
                                                                            </div></div>
                                                                        <div style="clear: both;"></div><p></p>
                                                           
                                     <div style="clear: both;"></div><br /><br />
                                <button type="submit" class="btn btn-default" style="width:30%;background:#2c4762;color:#fff;"">Test Connection</button>
                                </form>
                            <p></p>
                        </div>
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
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

</body>

</html>
