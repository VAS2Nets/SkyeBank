
<?php

include_once 'lib.php';
//$rec = get_smpp();
?>
<title>Skye Bank Dashboard</title>
<!-- including the css file -->
 <?php include_once 'css.php'; ?>
<div id="wrapper">

        <!-- Navigation -->
       <?php include_once 'nav.php'; ?>
         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Test Message</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
     <script type="text/javascript">

    function validate()
    {
      if (document.tstmsg.sender_id.value == "")
        {
            alert("Please provide your Sender ID");
            document.tstmsg.sender_id.focus();
            return false;
        }
        if (document.tstmsg.msisdn.value == "")
        {
            alert("Please provide your Mobile No.");
            document.tstmsg.msisdn.focus();
            return false;
        }
        if (document.tstmsg.message.value == "")
        {
            alert("Please provide your Message");
            document.tstmsg.message.focus();
            return false;
        }
        
        return(true);
    }
</script>
<div style="width:80%;margin-left: 6%;"> 
    <p><?php echo $_REQUEST['flash']; ?></p>
    <form name = "tstmsg" id="tstmsg" method="post" action="controller.php?action=testsms&redirect=tstmsg.php" onsubmit="return(validate());" >
        <div class="form-group">
            <label style="float:left;">Sender ID:</label>
            <input class="form-control" placeholder="Enter sender id" name="sender_id" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">MSISDN:</label>
            <input class="form-control" placeholder="Enter MSISDN" name="msisdn" style="margin-left:15%;width:65%;">
        </div>
        <div class="form-group">
            <label style="float:left;">Message:</label>
            <textarea class="form-control" rows="3" name="message" style="margin-left:15%;width:65%;"></textarea>
        </div>

        <button type="submit" class="btn btn-default" onsubmit="return(validate());">Submit</button>

                 </form>
            </div>
      </div>
</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>