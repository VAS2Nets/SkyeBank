<?php
include_once 'lib.php';
//$rec = get_smpp();
//var_dump($rec);
//$mg = update_smpp($host, $port, $username, $pwd);
//var_dump($mg);
if (isset($_POST['savi'])) {
    $host = $_POST['ip'];
    $port = $_POST['port'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    #echo $password;
    $save_value = update_smpp($host, $port, $username, $password);
    if($save_value == 'success')   {                                 
        header('Location:smpp.php?smppUpdate=1&smppUp=Update Successful');
    } else {
       die(header('Location:smpp.php?smppUpdate=2&smppUp=Update Failed')); 
    }             
}
if (isset($_POST['test'])) {
    $host = $_POST['ip'];
    $port = $_POST['port'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    #echo $password;
    $test_value = test_smpp($host, $port, $username, $password);
    if($test_value == 'Success')   {                                 
        header("Location:smpp.php?smppTest=1&smppSa=Test Successful&ip=$host&port=$port&user=$username&pwd=$password");
    } else {
       die(header("Location:smpp.php?smppTest=2&smppSa=Test Failed&ip=$host&port=$port&user=$username&pwd=$password")); 
    }             
}

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
        if (document.smpp.username.value == "")
        {
            alert("Please provide your Username");
            document.smpp.username.focus();
                    return false;
        }
        if (document.smpp.pwd.value == "")
        {
            alert("Please provide your Password");
            document.smpp.pwd.focus();
            return false;
        }
                //document.getElementById("smpp").submit();
                //controller.php?action=update_smpp&redirect=smpp.php
        return(true);
    }
        </script>

<div style="width:80%;margin-left: 6%;border: 1px solid #ccc;"> 
    <p align="center" style="color:#398439;margin-top: 3%;line-height:1em;"><?php echo $_REQUEST['flash']; ?></p>
    <form role="form" name ="smpp" id="smpp" method="post" style="margin-left: 10%;margin-top:5%;" action="<?php echo ($_SERVER["PHP_SELF"]); ?>" onsubmit=return(validate()) >
        <div class="form-group" align="center">
            <label><?php if($_GET["smppTest"]) echo $_GET['smppSa']; if($_GET["smppUpdate"]) echo $_GET['smppUp'];?></label>
            </div>
        <div class="form-group">
            <label style="float:left;">IP:</label>
            <input class="form-control" placeholder="Enter Host" id = "ip" name="ip" style="margin-left:15%;width:65%;" value="<?php echo htmlspecialchars($_GET['ip']); ?>">
        </div>
        <div class="form-group">
            <label style="float:left;">Port:</label>
            <input class="form-control" placeholder="Enter Port" type="number" id="port" name="port" style="margin-left:15%;width:65%;" value="<?php echo htmlspecialchars($_GET['port']); ?>">
        </div>
        <div class="form-group">
            <label style="float:left;">Username:</label>
            <input class="form-control" placeholder="Enter Username" id="username" name="username" style="margin-left:15%;width:65%;" value="<?php echo htmlspecialchars($_GET['user']); ?>">
        </div>
        <div class="form-group">
            <label style="float:left;">Password:</label>
            <input class="form-control" placeholder="Enter Password" id="pwd" name="pwd" type="password" value="" style="margin-left:15%;width:65%;">
        </div>
        <button type="submit" id="savi" class="btn btn-default" style="width:20%;background:#2c4762;color:#fff;" name="savi">Save</button>
        <button type="submit"  id="test" class="btn btn-default" style="width:20%;background: #08C;color:#fff;"  name="test">Test</button>
     </form>
</div>

        </div>

</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
<?php include_once 'footer.php'; ?>