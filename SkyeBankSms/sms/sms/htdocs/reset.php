<?php
// Connect to MySQL


$password = md5(mysql_real_escape_string($_POST["npass"]));
$confirmpassword = md5(mysql_real_escape_string($_POST["cnpass"]));

if ($password == $confirmpassword) {
    // Update the user's password
    $update = mysql_query("UPDATE `users` SET `pass` = '$password' WHERE `email` = '$email'");
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
            <form name = "smpp" id="tstmsg" method="post" action="" onsubmit="return(validate());" >
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