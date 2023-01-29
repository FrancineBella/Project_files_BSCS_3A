<?php
 include "code.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">

    <style>
         * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;

}
body {
    font-family: 'Poppins', sans-serif;
}
one {
    width: 1170px;
    margin: auto;
}
header {
    background: linear-gradient(rgba(0, 0, 0, 0.4), #cce6ff), url('bg.jpeg');
    height: 100vh;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size:cover;
    background-position: center center;
    position: relative;
    background-size: cover;
}

.two{ 
    float: right;
    list-style: none;
    margin-top: 30px;
}
.two li {
    display: inline-block;
}
.two li a { 
    color: #fff;
    text-decoration: none;
    padding: 5px 20px;
    font-family: poppins;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 2px;

}
.two li a:hover {
    background:#99ccff;
    color: #333;
}

.three {
    text-align: center;
    color: #ffff;
    padding-top: 180px;
    }
.three h1 {
    color: #fff;
    font-size: 100px;
    font-family: 'Kaushan Script', cursive;;
}
.three h1 span{
    color: #b3d9ff;
    font-family: 'Kaushan Script', cursive;;
}

.three p {
    letter-spacing: 8px;
    font-size: 20px;
    font-weight:bold;

}

.form{
    position: absolute;
    width: 500px;
    height: 100px;
    color: #fff;
    background: transparent;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 50px 35px;
    border-radius: 15px;
}

.form p{
    padding-bottom: -20px;
    display: inline-block;
    color:#fff;
    font-weight:bold;
    letter-spacing: 3px;

}

.form input{
    width: 100%;
    height: 35px;
    padding-top: 5px;
    margin-bottom: 30px;
    background: transparent;
    border-bottom: 1px solid #fff;
    border-top: none;
    border-left: none;
    border-right: none;
    color: #fff;
    outline: none;
    font-size: 15px;
    font-weight:bold;
    letter-spacing: 3px;
}

.form input[type="submit"]
{
    width: 70%;
    margin-left: 70px;
    border: none;
    height: 40px;
    color: #000;
    background: #fff;
    font-size: 16px;
    font-weight: bold;
    border-radius: 20px;
}

.form input[type="submit"]:hover{
    cursor: pointer;
    background:#99ccff;
    color: #000;
    font-weight: bold;
}

@media (max-width:459px) {
    .one {
        width: 100%;
    }
    .logo {
        float: none;
        width: 50%;
        text-align: center;
        margin: auto;
    }
    .two {
        float: none;
        margin-top: 0;
    }
    .two li a {
        padding: 5px;
        font-size: 11px;
    }
    
.two {
        text-align: center;
    }
    .three {
        width: 100%;
        height: auto;
        margin: 30% 0;
    }
    .three h1 {
        text-align: center;
        font-size: 50px;
    }
 }

 label{
			width: 100px;
			display:inline-block;
			font-size: 25px;
			margin: 5px;
		}
		form{
			border-radius: 10px ;
			padding: 4px;
		}



    </style>

</head>
<body>



    <header>
        <div class="one">
            <ul class="two">
                <li><a href="https://classroom.google.com/u/1/c/NTAyNTEyNzg1OTcw">APPLICATION DEVELOPMENT AND EMERGING TECHNOLOGIES</a></li>
            </ul>
        </div>


        <div class="three">

            <h1>TEAM <span>FIVE </span></h1>
            <p>LOGIN HERE<p>
        </div>

        <div class="form">
         <form action="code.php" method="POST">   
            <label > Username: </label> 
            <input  type="text" name="username" placeholder="Enter your Username." required> 
            <label for="password" > Password: </label> 
            <input placeholder="Enter your Password." name="password" class="input" type=" " required >
            
            <p class="text-center" style="color:red;">
                
            </p>

            <input type="submit" name="loginform" value="LOGIN" onclick="validate()">
        </form>
        </div>

        <div>
            <p id="length"></p>
        </div>

    </header>

</body>
</html>

