<?php
include_once 'lib.php';
$rec = get_plugins();
//$id =$recs['id'];
//var_dump($id);
?>
<title>Skye Bank Dashboard</title>
<!-- including the css file -->
 <?php include_once 'css.php'; ?>
<div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'nav.php'; ?>
        <?php>
$message1 = "You pressed the MESSAGE 1 button";
$message4 = "You pressed the MESSAGE 4 button";
?>
<script>
function msg1(){alert("<?PHP echo $message1 ?>");}
function msg4(){alert("<?PHP echo $message4 ?>");}
</script>
<button onclick="msg1()">MESSAGE 1</button>
<button onclick="msg4()">MESSAGE 4</button>
       <script>
function myFunction(name) {
    alert(name);
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
                                echo "<tr><th width=5%>Id</th><th width=5%>Name</th><th width=5%>Type</th>
                                      <th width=5%>DB</th><th width=5%>Host</th><th width=5%>Port</th>
                                      <th width=5%></th><th width=5%></th><th width=5%>Status</th>
                                        </tr>";

                                foreach ($rec as $recs) {
                                    echo "<td>" . $recs['id'] . "</td>";
                                    echo "<td>" . $recs['name'] . "</td>";
                                    echo "<td>" . $recs['type'] . "</td>";
                                    echo "<td>" . $recs['dbname'] . "</td>";
                                    echo "<td>" . $recs['host'] . "</td>";
                                    echo "<td>" . $recs['port'] . "</td>";
                                    echo "<td align=center>" . '<button onclick="">Edit</button>' . "</td>";
                                    echo "<td align=center>" . '<button onclick="myFunction()">Delete</button>' . "</td>";
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
