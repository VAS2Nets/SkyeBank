<?php
include_once 'lib.php';
$rec = get_plugins();
//var_dump($rec);
$id =$recs['id'];
var_dump($id);
?>
<title>Skye Bank Dashboard</title>
<!-- including the css file -->
 <?php include_once 'css.php'; ?>
<div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'nav.php'; ?>
       <script>
function myFunction(id) {
    alert(id);
        document.getElementById("plugin-table").deleteRow(0);
   
}
</script>
     <!-- Page Content -->
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Plugins</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div>
                            <div class="table-responsive">
                                <?php
                                echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example plugin-table">';
                                echo "<tr><th width=5%>Name</th><th width=5%>Type</th>
                                      <th width=5%>DB</th><th width=5%>Host</th><th width=5%>Port</th>
                                      <th width=5%></th><th width=5%></th><th width=5%>Status</th>
                                        </tr>";

                                foreach ($rec as $recs) {
                                    
                                    echo "<td>" . $recs['name'] . "</td>";
                                    echo "<td>" . $recs['type'] . "</td>";
                                    echo "<td>" . $recs['dbname'] . "</td>";
                                    echo "<td>" . $recs['host'] . "</td>";
                                    echo "<td>" . $recs['port'] . "</td>";
                                    echo "<td align=center>" . '<button onclick="">Edit</button>' . "</td>";
                                    echo "<td align=center>" . '<button onclick="myFunction(2)">Delete</button>' . "</td>";
                                    echo "<td>" . '' . "</td>";
                                    echo "</tr>";
                                }

                                echo "</table>";
                                ?> 

                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
