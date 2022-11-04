<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>D P Infotech (Pvt) Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png"
        href="https://media-exp1.licdn.com/dms/image/C4E0BAQEVZhFtW5R-Ug/company-logo_200_200/0/1593054047271?e=2147483647&v=beta&t=XMe21TRnKZj5UUDtvPs3-4wMC8sfltuDVTVSvUAlNHk">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">E</span>MS</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="EmployeeDetailsView.php" class="nav-item nav-link"> view</a>
                        <a href="EmployeDetails.php" class="nav-item nav-link">Employee Details</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">E</span>MS</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="EmployeeFamilyDetails.php" class="nav-item nav-link">Employee Family Details</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

     <!-- contact Start -->

     <table class="table">
        <thead class="thead-dark">
            <tr>
                <th> Employee Code </th>  
                <th> Employee name Initials </th> 
                <th> EmployeenameFirstName </th> 
                <th> Employeename Surname </th>  
                <th> EmployeeAddress 1 </th> 
                <th> REmployeeAddress 2 </th> 
                <th> DOF </th>  
                <th> Status	 </th>  

                <th> Operation 1  </th>
                <th> Operation 2 </th>
            </tr>
        </thead>

<?php
include("Connecting.php");

// error_reporting(0);

$query = "select * from  employee details";
$data = mysqli_query($conn,$query); 
$total = mysqli_num_rows($data);



if($total !=0)
{
$result = mysqli_fetch_assoc($data);
while($result = mysqli_fetch_assoc($data)) 
{
    echo "
    <tr>
        <td>".$result['EmployeeCode']."</td> 
        <td>".$result['EmployeenameInitials']."</td> 
        <td>".$result['EmployeenameFirstName']."</td> 
        <td>".$result['EmployeenameSurname']."</td> 
        <td>".$result['EmployeeAddress1']."</td> 
        <td>".$result['EmployeeAddress2']."</td> 
        <td>".$result['DOF']."</td> 
        <td>".$result['Status']."</td> 


        <td><a href = 'delete2.php?rn=$result[EmployeeCode]'>Delete</td> 
        <td><a href = 'delete2.php?rn=$result[EmployeeCode]'>Update</td> 
        ";       
}

}

else
{
echo "No record found";
}
?>

</table>



<!-- contact End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                </div>
                <div class="col-12">
                <p class="m-0">&copy; All Rights Reserved. Designed by <a href="">Pubudu Deepamal</a></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
</body>

</html>