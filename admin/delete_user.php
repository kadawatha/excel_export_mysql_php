

<?php include ("includes/init.php"); ?>



<?php

if (empty($_GET['id'])){
      $location="users.php";
                 echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                 exit;/**/
}



$user=User::find_by_id($_GET['id']);
if ($user){
    $user->delete();
     $location="users.php";
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                exit;/**/
}else{
      $location="users.php";
                 echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                 exit;/**/
}









?>