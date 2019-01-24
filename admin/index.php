<?php include ("includes/header.php"); ?>



<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>

<!-- /.navbar-collapse -->

<?php include('server_xxx.php') ?>

<div id="page-wrapper">

    <?php include ("includes/admin_content.php")?>


    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <h1 align="center" class="alert alert-primary">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
        <h2 align="center"> <a href="index.php?logout='1'" style="color: red;">logout</a> </h2>
    <?php endif ?>


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
