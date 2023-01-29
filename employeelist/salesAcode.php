<?php
$conn = mysqli_connect("localhost","root","","salesa");


			$conn = $conn = mysqli_connect("localhost","root","","salesa");
			if(isset($_POST['submit'])){              
                $itemname = $_POST['item_name'];
                $quan = $_POST['quantity'];
                $price = $_POST['price'];
                $change = $_POST['change'];
                $cash = $_POST['cash'];              
                $dis = $_POST['discount'];
                $count = $_POST['discounted'];
               
                $sql = "INSERT INTO `salesa`(`itemname`, `price`, `quantity`, `discount`, `discounted`, `cash`, `change`) 
                VALUES ('$itemname','$price','$quan','$dis','$count','$cash','$change')";
                $insert = mysqli_query($conn,$sql);
            
                if($insert){
                    echo"Data Save!";
            
                } else{
                    
                   echo "Failed!";
                }
            }
		
			
?>

