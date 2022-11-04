<?php

    $host ="localhost";
    $username ="root";
    $password ="";
    $dbname ="employee";

    $conn=mysqli_connect($host,$username,$password,"$dbname");
    
    if($conn)
        {        
          echo '<script type="text/javascript">

            window.onload = function () { alert("Database connection is ok");}

          </script>';  
        }

    else
        {
          echo '<script type="text/javascript">

            window.onload = function () { alert("Database connection is failed");}

          </script>';  
        }
?>