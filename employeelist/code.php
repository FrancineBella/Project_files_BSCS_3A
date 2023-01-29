<?php
    $conn = mysqli_connect("localhost","root","","dblogin");


    if(isset($_POST["loginform"])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        $sql ="SELECT * FROM login WHERE username ='$username' AND user_password = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0 ){
                while($row = $result->fetch_assoc()){
                    if($row["user_type"] == 'cashier1'){
                        header("location: order.php");
                        exit;    
                    } elseif($row["user_type"] == 'cashier2'){
                        header("location: employee1.php");
                        exit;  
                    }elseif($row["user_type"] == 'admin') {
                        header("location: nav.php");
                        exit;
                    }else{

                        echo"INVALID USER";
                        exit;
                    }
                }

        }
    }

?>