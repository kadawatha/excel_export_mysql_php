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


<?php

$users=User::find_all();

?>




<div id="page-wrapper">

    <h2 align="center">Export Your Custom Data to Excel Sheet </h2>

    <div id="live_data"></div>

    <div style="margin: 2em;" align="center">



        <form method="post" class="form-inline" action="chart_export.php">

          <div class="form-group">
            <select name="users_name"  class="form-control"  id="">
                <?php foreach ($users as $user):   ?>
                <option  value="<?php  echo $user->username;  ?>"><?php  echo $user->username;  ?></option>
                <?php endforeach;   ?>
            </select>
          </div>



            <div class="form-group">
            <input type="date"  class="form-control"  name="txtStartDate">
            </div>

            <div class="form-group">
            <input type="date" class="form-control"  name="txtEndDate">
            </div>



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
