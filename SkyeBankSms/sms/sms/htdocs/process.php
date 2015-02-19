if (isset($_POST['add'])) {

    $slf_pt = $_POST['slf_pt'];
    $fam_fnd = $_POST['fam_fnd'];
    $cre_crd = $_POST['cre_crd'];
    $oth = $_POST['oth'];

 echo "<br/><br/><span>Congratulations! Your application has been submitted successfully. Thank you. Please </span>";
        echo "<span> click <strong>'Close'</strong> to close the pop-up window</span>";
    } else {
        echo "<h3>Registration Failed </h3> </p>";
       
    }
}


function add($name) { 
}; 
 function update_smpp($host, $port, $username, $pwd) {
    R::exec("update smpp_setting set host=?,port=?,username=?,password=?", array($host, $port, $username, $pwd))
            or die('failure');
    return 'success';

if(isset($_POST['name'])) 
{ 
$host = $_POST['host'];
$port = $_POST['port'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else { echo "<script type='text/javascript'>alert('failed!')</script>" }  


