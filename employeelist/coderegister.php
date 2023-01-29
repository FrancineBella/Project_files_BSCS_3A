<?php
$conn = mysqli_connect("localhost","root","","employeelist");


if(isset($_POST['submit'])){
    $name = $_POST['fname']."".$_POST['mname']."".$_POST['lname'];
    $birth = $_POST['date'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $civil = $_POST['status'];
    $Designation = $_POST['designation'];
    $Department = $_POST['department'];
    $employeestatus = $_POST['employeestatus'];
    $employeenumber = $_POST['employeenumber'];
    
    $sql = "INSERT INTO `employeelist`(`fullname`, `birth`, `gender`, `nationality`, `civil`, `designation`, `department`, `employeeStatus`, `employee Number`) VALUES 
    ('$name','$birth','$gender','$nationality','$civil','$Designation','$Department','$employeestatus','$employeenumber')";
    $insert = mysqli_query($conn,$sql);

    if($insert){
        echo "Data Saved!";

    } else{
        
       echo "Failed!";
    }
}

?>