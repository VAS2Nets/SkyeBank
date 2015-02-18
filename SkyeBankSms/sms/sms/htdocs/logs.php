
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
                <h1 class="page-header">Logs</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php
        $file = fopen("logs.txt", "r");
        echo fgets($file);
        fclose($file);
        ?>
        <br />
        <?php
        $file = fopen("logs.txt", "r");

        while (!feof($file)) {
            echo fgets($file) . "<br />";
        }

        fclose($file);
        ?> 
    </div>

    <!-- /#page-wrapper -->

</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>