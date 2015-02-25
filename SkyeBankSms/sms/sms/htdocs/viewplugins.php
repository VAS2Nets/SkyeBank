<?php
include_once 'lib.php';
$rec = get_plugins();
//$mes = delete_plugin($id);
//$id =$recs['id'];
//var_dump($id);
?>
<title>Skye Bank Dashboard</title>
<!-- including the css file -->
 <?php include_once 'css.php'; ?>
<div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'nav.php'; ?>
        <script>
        function msg1(id)
        {
            alert(id);
         // alert("<?PHP echo $mes ?>");
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
                                echo '<table class="table table-striped table-bordered" id="dataTables-example" name="plugin-table">';
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
                                    $id=3;
                                    echo "<td align=center>" . '<button onclick="">Edit</button>' . "</td>";
                                    echo "<td align=center>" . '<button onclick="msg1(id)">Delete</button>' . "$id</td>";
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
           </div>
    </div>

    </div>
   
    <?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
