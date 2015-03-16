<?php
include_once 'lib.php';
//$rec = get_smpp();

if (isset($_POST['sav'])) {
    $passwd = $_POST['passwd'];
  
    #echo $password;
    #$save_value = add_plug($name,$type,$ip,$pwd,$dbname,$username,$port,$sql_query,$update_sql,$sender,$msg,$cid,$receiver);
    $svalue = change_password($passwd, $username = 'admin');
    if($svalue == 'Success')   {                                 
        header('Location:index.php');
    } else {
       die(header('Location:reset.php')); 
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
                <h1 class="page-header">Reset Password</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <script type="text/javascript">
            function pvalidate() {
                if (document.reset.passwd.value != document.reset.cnpass.value)
                {
                    alert('Passwords did not match!');
                    return false;
                }
                else
                {
                    document.reset.submit();
                    alert('Passwords has been changed Successfully!');
                    return true;
                }
            }
        </script>
        <div style="width:80%;margin-left: 6%;border: 1px solid #ccc;"> 
           <form name = "reset" id="reset" style="margin-left: 10%;margin-top:5%;" method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label style="float:left;">New Password:</label>
                    <input class="form-control"  type="password" placeholder="Enter new password"  id="passwd" name="passwd" style="margin-left:30%;width:35%;">
                </div>
                <div class="form-group">
                    <label style="float:left;">Confirm New Password:</label>
                    <input class="form-control" type="password" placeholder="Confirm new password" id="cnpass" name="cnpass" style="margin-left:30%;width:35%;"><span id='message'></span>
                </div>
                <button type="reset" class="btn btn-default" style="width:20%;background:#2c4762;color:#fff;" name="reset">Clear</button>
                <button type="submit" class="btn btn-default" style="width:20%;background:#2c4762;color:#fff;" name="sav" onclick="return pvalidate()">Save</button>


            </form>
        </div>
    </div>
</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
<?php include_once 'footer.php'; ?>