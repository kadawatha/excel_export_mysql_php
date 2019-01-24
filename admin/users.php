<?php include ("includes/header.php"); ?>


<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>



<?php
//if(!$session->is_signed_in()){
//    $location="login.php";
//    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
//    exit;/**/
//}
?>


<?php

$users=User::find_all();

?>



<div  id="page-wrapper_1">



    <div  class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div  class="col-lg-12">
                <h1 class="page-header">
                    users
                    <small>Dtails</small>
                </h1>

                <div class="container">
                <div class="col-md-12">


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>


                        </tr>
                        </thead>

                        <tbody>

                        <?php foreach ($users as $user):   ?>

                            <tr>
                                <td><?php  echo $user->id; ?></td>


                                <td>
                                    <?php  echo $user->username;  ?>
                                </td>



                                <td> <?php  echo $user->email;  ?>
                                    <div class="action_links">
                                        <a class="btn-danger" href="delete_user.php?id=<?php echo $user->id;  ?>">Delete</a>
                                    </div>
                                </td>





                            </tr>

                        <?php endforeach;   ?>


                        </tbody>
                    </table>

                </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->


</div>
<!-- /#page-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
