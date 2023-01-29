<?php
$conn = mysqli_connect("localhost","root","","payroll");


if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $surname= $_POST['surname'];
    $Department = $_POST['department'];
    $civil = $_POST['civilstatus'];
    $quali = $_POST['Quali_Depens_Status'];
    $paydate = $_POST['paydate'];
    $status = $_POST['employee_status'];
    $Designation = $_POST['designation'];
    $employeenumber = $_POST['employee_number'];
    
    $sql = "INSERT INTO `payroll`(`employee_number`, `fname`, `mname`, `surname`, `department`, `civil_status`, `quali`, `paydate`, `employee_status`, `designation`)
     VALUES ('$employeenumber','$fname','$mname','$surname','$Department','$civil','$quali','$paydate','$status','$Designation')";
    $insert = mysqli_query($conn,$sql);

    
}
?>