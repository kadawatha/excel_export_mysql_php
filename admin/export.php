<?php
//export.php
$connect = mysqli_connect("localhost", "admoohos_login", "110d220g330j", "admoohos_dataentry");
$output = '';
if(isset($_POST["export"]))
{
     $txtStartDate =$_POST['txtStartDate'];
     $txtEndDate =$_POST['txtEndDate'];


    $query = "SELECT * FROM photos WHERE currents BETWEEN '$txtStartDate' and '$txtEndDate'";

    $result = mysqli_query($connect, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr> 
                     
                         <th>firstname</th>  
                         <th>lastname</th>  
                         <th>nic</th>  
       <th>date</th>
       <th>month</th>
        <th>year</th>
         <th>email</th>
          <th>phone</th>
          <th>number</th>
          <th>street</th>
          <th>suberb</th>
          <th>town</th>
          <th>review</th>
       <th>remarks</th>
       <th>username</th>
       <th>date</th>
       
                    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
    <tr>  
                         <td>'.$row["firstname"].'</td>  
                         <td>'.$row["lastname"].'</td>  
                         <td>'.$row["nic"].'</td>  
       <td>'.$row["date"].'</td>  
       <td>'.$row["month"].'</td>
       <td>'.$row["year"].'</td>
       <td>'.$row["email"].'</td>
       <td>'.$row["phone"].'</td>
       <td>'.$row["number"].'</td>
       <td>'.$row["street"].'</td>
       <td>'.$row["suberb"].'</td>
       <td>'.$row["town"].'</td>
        <td>'.$row["review"].'</td>
         <td>'.$row["remarks"].'</td>
         <td>'.$row["username"].'</td>
          <td>'.$row["currents"].'</td>
                    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=download.xls');
        echo $output;
    }
}
?>





















