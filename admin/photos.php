<?php include ("includes/header.php"); ?>


<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>

<!-- /.navbar-collapse -->


<?php
//if(!$session->is_signed_in()){
//    $location="login.php";
//    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
//    exit;/**/
//}
?>



<?php

$photos=photo::find_all();

?>






<div id="page-wrapper_2">



	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				Customer
					<small>Details</small>
				</h1>
                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Customer Name</th>
                            <th>Date</th>


                        </tr>
                        </thead>

                        <tbody>

                    <?php foreach ($photos as $photo):   ?>

                        <tr>
                            <td>
                                <div class="pictures_link">
                                    <a class="btn-danger" href="delete_photo.php?id=<?php echo $photo->id;  ?>">Delete</a>
                                    <a class="btn-success" href="excel.php">Export</a>
                                </div>
                            </td>


                            <td><?php  echo $photo->id; ?></td>
                            <td> <?php  echo $photo->username;  ?> </td>
                            <td><?php  echo $photo->firstname;   ?></td>
                            <th><?php  echo $photo->currents;    ?></th>

                        </tr>

                   <?php endforeach;   ?>


                        </tbody>
                    </table>




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
