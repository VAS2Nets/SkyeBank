<?php
include_once 'lib.php';

$rec = get_plugins();
//$mes = delete_plugin($id);
//$id =$recs['id'];
//var_dump($rec);
?>
<title>Skye Bank Dashboard</title>
<!-- including the css file -->
 
 <?php include_once 'css.php'; ?>
 
<div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'nav.php'; ?>
   
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

                                <script> $('#stat').each(function(){

                             var closestTd = $(this).closest('td');
                             var valueCache = parseInt($(this).val());

                             if(valueCache > 0) {
                                closestTd .addClass('positive');
                             }
                             else if(valueCache < 0) {
                                closestTd.addClass('negative');
                             }
                             else {
                                closestTd.addClass('negative');
                             }

                          });
                                </script>

                                <?php
                                $rss = $recs['status'];
                                if ($rss == 1){$chk="Active";}else{$chk= "Inactive";}
                                
                                echo '<table class="table table-striped table-bordered" id="dataTables-example" name="dataTables-example">';
                                echo "<tr><th width=5%>Name</th><th width=5%>Type</th>
                                      <th width=5%>DB</th><th width=5%>Host</th><th width=5%>Port</th>
                                      <th width=5%>Edit</th><th width=5%>Delete</th><th width=5%>Status</th>
                                        </tr>";

                                foreach ($rec as $recs) {
                                    echo "<td>" . $recs['name'] . "</td>";
                                    echo "<td>" . $recs['dbtype'] . "</td>";
                                    echo "<td>" . $recs['dbname'] . "</td>";
                                    echo "<td>" . $recs['host'] . "</td>";
                                    echo "<td>" . $recs['port'] . "</td>";
                                    echo "<td align=center>" . '<a href="updateplugin.php?id='.$recs['id'] .'">Edit</a>' . "</td>";
                                    echo "<td align=center>" . '<a href="process.php?id='.$recs['id'] .'" ><img alt="" align="absmiddle" border="0" src="img/delete.png" /></a>' . "</td>";
                                    echo "<td class='stat'>" .$chk. "</td>";
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
        $('.stat').css('background-color', 'red');
    });
    </script>   
