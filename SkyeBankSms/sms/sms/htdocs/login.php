<?php
session_start();
include_once('lib.php');
<<<<<<< HEAD
#$me = is_user('admin','admin');
#$query = get_user('admin');
#var_dump($me);
	 
               $error = NULL;
            if (isset($_POST['submit'])) {
=======

	session_start(); 
       /*        $error = 0;
            if (isset($_POST['pwd'])) {
>>>>>>> origin/master
                $username = 'admin';
                $password = $_POST['pwd'];
                #echo $password;
                $user_id = is_user($password, $user = 'admin');
                if($user_id == 1)   {
                    $_SESSION['currUser'] = '$username';
                    $_SESSION['pwd'] = 1;                                    
                    header('Location:index.php');
                } else {
<<<<<<< HEAD
                   $error = 'Wrong Password Used';
                   die(header('Location:login.php?loginFailed=true&error=Wrong Password Used')); 
                }             
            } 
=======
                    $error = 1;
                }
            }*/
>>>>>>> origin/master
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
                    <form role="form" name="login" id="login" method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?> " onsubmit=return(validate()) >
                        <fieldset>
                            
                            <!-- <div class="form-group">controller.php?action=is_user&redirect=index.php
                                 <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                             </div> -->
                            <div class="form-group" align="center">
                                <label>Administrator</label>
                            </div>
                            <div class="form-group" align="center">
                                <label><?php if($_GET["loginFailed"]) echo $_GET['error']; ?></label>
                            </div>
                            <div class="form-group">
                                <label style="float:left;">Password:</label>  
                                <input class="form-control" placeholder="Password" id="pwd" name="pwd" type="password" value="" style="width:60%;float:left;margin-left:15%;">
                            </div>
                            <br /><br /><p></p>
                          <!-- Change this to a button or input when using this as a form -->
                          <button type=submit name="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'js.php'; ?>
<?php include_once 'footer.php'; ?>
