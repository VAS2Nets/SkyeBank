
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
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
          <?php
        $file = file("logs.txt");
        for ($i = count($file) - 6; $i < count($file); $i++) {
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