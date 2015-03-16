<title>Skye Bank Dashboard</title>
<!-- including the css file -->
 <?php include_once 'css.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include_once 'nav.php'; ?>
    <!-- Page Content -->
    <script type="text/javascript">
window.setTimeout(function(){ document.location.reload(true); }, 15000);
</script>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Logs</h1>
                <!--<div><input type="button" id="eng" style="float:right" value="DOWNLOAD LOGS" onclick=";" style="width:200px;height:50px;background:#039;color:#fff;" /></div>
            </div>
            <!-- /.col-lg-12 -->
          <!--  <a rel="nofollow" href="logs.txt" target=" "><input type="button" id="eng" style="float:right" value="DOWNLOAD LOGS" onclick="location.href='logstext'" style="width:200px;height:50px;background:#039;color:#fff;" /></a>
        </div>-->
           <!-- <a href="download.php?file=file.pdf">Download Me</a> -->
         <a href="download.php"><button style="float:right;">Download Logs</button></a>
        <!-- /.row -->
          <?php
        $file = file("logs.txt");
        for ($i = count($file) - 20; $i < count($file); $i++) {
            echo $file[$i] . "\n";
            echo '<br />';
        }
        ?>
    </div>

    <!-- /#page-wrapper -->

</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>