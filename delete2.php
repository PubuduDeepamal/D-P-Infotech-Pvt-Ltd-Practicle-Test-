<?php
        include("Connecting.php");
        error_reporting(0);

       $EmployeeCode=$_GET['rn'];

       $query = "DELETE FROM employee details WHERE name = '$EmployeeCode'";
       
       $data = mysqli_query($conn,$query);

       if($data)
       {
            echo '<script type="text/javascript">

            window.onload = function () { alert("data deleted");window.location.href = "EmployeeDetailsView.php";  }
         
            </script>';
       }
       else
       {
            echo '<script type="text/javascript">

            window.onload = function () { alert("faild to data deleted");window.location.href = "EmployeeDetailsView.php";  }
         
            </script>';
       }

?>