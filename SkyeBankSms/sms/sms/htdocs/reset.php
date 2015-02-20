<?php


include_once 'lib.php';
$rec = get_smpp();
// Connect to MySQL


$newpassword = md5(mysql_real_escape_string($_POST["npass"]));
$confirmpassword = md5(mysql_real_escape_string($_POST["cnpass"]));

if ($newpassword == $confirmpassword) {
    // Update the user's password
    $chpwd = change_password($newpassword, $username = 'admin');
    echo "<script type='text/javascript'>alert('Your password has been successfully reset.')</script>";
} else {
    echo "<script type='text/javascript'>alert('Your password's do not match.')</script>";
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

            function validate()
            {
                
                if (document.smpp.npass.value == "")
                {
                    alert("Please provide your Password");
                    document.smpp.npass.focus();
                    return false;
                }
                if (document.smpp.cnpass.value == "")
                {
                    alert("Please confirm your Password");
                    document.smpp.cnpass.focus();
                    return false;
                }
                return(true);
            }
        </script>
        <div style="width:80%;margin-left: 6%;border: 1px solid #ccc;"> 
            <form name = "smpp" id="tstmsg" style="margin-left: 10%;margin-top:5%;" method="post" action="" onsubmit="return(validate());" >
                <div class="form-group">
                    <label style="float:left;">New Password:</label>
                    <input class="form-control" placeholder="Enter new password" name="npass" style="margin-left:30%;width:35%;">
                </div>
                <div class="form-group">
                    <label style="float:left;">Confirm New Password:</label>
                    <input class="form-control" placeholder="Confirm new password" name="cnpass" style="margin-left:30%;width:35%;">
                </div>

                <button type="submit" class="btn btn-default" style="width:20%;background:#2c4762;color:#fff;" name="add">Save</button>


            </form>
        </div>
    </div>
</div>
<!-- JS files -->
<?php include_once 'js.php'; ?>
 <?php include_once 'footer.php'; ?>