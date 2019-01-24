<?php include ("includes/header.php"); ?>



<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>

<!-- /.navbar-collapse -->

<?php

$output='';
if (isset($_POST["export_excel"])){

$sql="SELECT * FROM photos ORDER BY id DESC";
$result=mysqli_query($connec);

}



?>



<div id="page-wrapper">



    <h2 align="center">Export Your data to Excel Sheet </h2>

      <div id="live_data"></div>

    <div style="margin: 2em;" align="center">
    <form method="post" action="export.php">

        <input type="date" name="txtStartDate">
        <input type="date" name="txtEndDate">

        <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
    </div>



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
