
<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";


    $location="login_xxx.php";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
    exit;/**/

}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);

    $location="login_xxx.php";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
    exit;/**/
}

?>