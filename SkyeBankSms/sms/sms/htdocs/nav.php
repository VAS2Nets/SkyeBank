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
                            <a class="active" href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
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
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Administrator<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <li>
                                    <a href="login.php">Logout</a>
                                </li> 
                              <li>
                                    <a href="reset.php">Reset Password</a>
                                </li>   
                            </ul>
                            <!-- /.nav-second-level -->
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