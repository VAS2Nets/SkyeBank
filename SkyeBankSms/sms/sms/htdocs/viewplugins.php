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
                                <script src="js/jquery-1.11.1.min.js"></script>
                                <script language="JavaScript" type="text/javascript">
                                $(document).ready(function(){
                                    $("a.delete").click(function(e){
                                        if(!confirm('Are you sure?')){
                                            e.preventDefault();
                                            return false;
                                        }
                                        return true;
                                    });
                                });
                                </script>

                                <?php
                                
                                
                                
                                echo '<table class="table table-striped table-bordered" id="dataTables-example" name="dataTables-example">';
                                echo "<tr><th width=5%>Name</th><th width=5%>Type</th>
                                      <th width=5%>DB</th><th width=5%>Host</th><th width=5%>Port</th>
                                      <th width=5%>Edit</th><th width=5%>Delete</th><th width=5%>Status</th>
                                        </tr>";

                                foreach ($rec as $recs) {
                                    $rss = $recs['status'];
                                    if ($rss == 1){$chk='<img src="img/green.png">';}else{$chk='<img src="img/red.png">';}
                                    echo "<td>" . $recs['name'] . "</td>";
                                    echo "<td>" . $recs['dbtype'] . "</td>";
                                    echo "<td>" . $recs['dbname'] . "</td>";
                                    echo "<td>" . $recs['host'] . "</td>";
                                    echo "<td>" . $recs['port'] . "</td>";
                                    echo "<td align=center>" . '<a href="updateplugin.php?id='.$recs['id'] .'">Edit</a>' . "</td>";
                                    echo "<td align=center>" . '<a class="delete" href="process.php?id='.$recs['id'] .'"><img alt="" align="absmiddle" border="0" src="img/delete.png" /></a>' . "</td>";
                                    echo "<td>" .$chk. "</td>";
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
