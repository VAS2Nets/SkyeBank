<?php

include_once 'lib.php';
$rec = get_smpp();
#var_dump($rec);
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
                    <h1 class="page-header">SMPP Connection</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <script type="text/javascript">

    function validate()
    {
      if (document.smpp.ip.value == "")
        {
            alert("Please provide your IP");
            document.smpp.ip.focus();
            return false;
        }
        if (document.smpp.port.value == "")
        {
            alert("Please provide your Port No.");
            document.smpp.port.focus();
            return false;
        }
        if (document.smpp.uname.value == "")
        {
            alert("Please provide your Username");
            document.smpp.uname.focus();
            return false;
        }
        if (document.smpp.pass.value == "")
        {
            alert("Please provide your Password");
            document.smpp.pass.focus();
            return false;
        }
        return(true);
    }
</script>
<div style="width:80%;margin-left: 6%;"> 
    <form name ="smpp" id="smpp" method="post" action="" onsubmit="return(validate());" >
        <div class="form-group">
            <label style="float:left;">IP:</label>
            <input class="form-control" placeholder="Enter IP" name="ip" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Port:</label>
            <input class="form-control" placeholder="Enter Port No" name="port" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Username:</label>
            <input class="form-control" placeholder="<?php echo $rec['username'] ?>" name="uname" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Password:</label>
            <input class="form-control" placeholder="Enter password" name="pass" type="password" value="" style="margin-left:15%;width:65%;">
        </div>
        <button type="submit" class="btn btn-default" style="width:20%;background:#2c4762;color:#fff;" name="add">Save</button>
       <button type="submit" class="btn btn-default" style="width:20%;background: #08C;color:#fff;" >Test</button>

    </form>
                        </div>
        </div>
        
        <!-- /#page-wrapper -->

    </div>
   <!-- JS files -->
<?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>