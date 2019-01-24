<?php include ("includes/header.php"); ?>


<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>

<?php include('server_xxx.php') ?>
<?php include('errors_xxx.php'); ?>

<div id="page-wrapper">



	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				New User
                    <small> Adding</small>
				</h1>
				<ol class="breadcrumb">

					<li>
						<i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
					</li>
					<li class="active">
						<i class="fa fa-file"></i> Blank Page
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->





        <form method="post" action="comments.php">




            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
            </div>


            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="">
            </div>


            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password_1">
            </div>


            <div class="form-group">
                <label>Confirm password</label>
                <input type="password"  class="form-control" name="password_2">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success" name="reg_user">Register</button>
            </div>


        </form>









	</div>
	<!-- /.container-fluid -->



















</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
