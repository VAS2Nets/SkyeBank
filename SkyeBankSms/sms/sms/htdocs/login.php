<?php
include_once('lib.php');

	session_start(); 
               $error = 0;
            if (isset($_POST['login'])) {
                
                $password = $_POST['pwd'];
                $_SESSION['currUser'] = '$username';
                $user_id = is_user($pwd, $user = 'admin');
                $query = get_user($username);
                if (mysql_num_rows($query) > 0) {
                    if ($user_id == "admin") {
                        $_SESSION['login'] = 1;
                        header('Location:index.php');
                    }
                } else {
                    $error = 1;
                }
            }
            ?>

<title>Login Page- Skye Bank</title>

<?php include_once 'css.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <!--<h3 class="panel-title">Please Sign In</h3> -->
                    <img src="img/skyebank.png" alt="skye"/>
                </div>
                <script type="text/javascript">

                    function validate()
                    {
                        if (document.login.pwd.value == "")
                        {
                            alert("Please enter your password");
                            document.login.pwd.focus();
                            return false;
                        }

                        return(true);
                    }
                </script>
                <div class="panel-body">
                    <form role="form" name="login" id="login" method="post" action="controller.php?action=is_user&redirect=index.php" onsubmit="return(validate());" >
                        <fieldset>
                            <!-- <div class="form-group">
                                 <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                             </div> -->
                            <div class="form-group" align="center">
                                <label>Administrator</label> 
                            </div>
                            <div class="form-group">
                                <label style="float:left;">Password:</label>  
                                <input class="form-control" placeholder="Password" name="pwd" type="password" value="" style="width:60%;float:left;margin-left:15%;">
                            </div>
                            <br /><br /><p></p>
                          <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'js.php'; ?>
<?php include_once 'footer.php'; ?>
