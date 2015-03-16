<title>Skye Bank Dashboard</title>
      <!-- css -->
 <?php include_once 'css.php'; ?>
   <div id="wrapper">
 <
        <!-- Navigation -->
       <?php include_once 'nav.php'; ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                  <img src="img/home.png" alt="skye" width="66" height="55"/>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <div class="huge"></div>
                                    <div>HOME</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="img/logs.png" alt="skye" width="66" height="55"/> 
                                </div>
                                <div class="col-xs-9 text-right">
                                     <div class="huge"></div>
                                    <div>LOGS</div>
                                </div>
                            </div>
                        </div>
                        <a href="logs.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                  <img src="img/plugins.gif" alt="skye" width="66" height="55"/>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>PLUGINS</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewplugins.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <img src="img/tst.png" alt="skye" width="66" height="55"/>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>TEST MSG</div>
                                </div>
                            </div>
                        </div>
                        <a href="tstmsg.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><div style="margin-top: 5%;float:right;background: #08C;color:#000;"> 
                <script type="text/javascript">
function change( engine )
{
    if ( engine.value === "START ENGINE" )
       {engine.value = "STOP ENGINE";
        window.location="start_engine.php";
    }
    else
        {engine.value = "START ENGINE";
        window.location="stop_engine.php";}
}
                </script>
       <input type="button" id="eng" value="START ENGINE" onclick="return change(this);" style="width:200px;height:50px;background:#039;color:#fff;" /></div>
        </div>
        
   </div>   
       <?php include_once 'js.php'; ?>
  <?php include_once 'footer.php'; ?>


     