<?php
        include("Connecting.php");
        error_reporting(0);

       $FirstName=$_GET['rn'];

       $query = "DELETE FROM employee family details WHERE FirstName = '$FirstName'";
       
      $data = mysqli_query($conn,$query);

       if($data)
       {
            echo '<script type="text/javascript">

            window.onload = function () { alert("data deleted");window.location.href = "EmployeeFamilyDetailsView.php";  }
         
            </script>';
       }
       else
       {
            echo '<script type="text/javascript">

            window.onload = function () { alert("faild to data deleted");window.location.href = "EmployeeFamilyDetailsView.php";  }
         
            </script>';
       }

?>