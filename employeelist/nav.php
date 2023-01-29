<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background-image: url('bg.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:100% 100%;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #808080;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
.three h1 {
    color: #fff;
    font-size: 100px;
    text-align: center;
    font-family: 'Kaushan Script', cursive;
    
}
.three h1 span{
    color: #b3d9ff;
    font-family: 'Kaushan Script', cursive;;
}
.p{
    text-align: center;

}
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.background-image {
    background-image: url('bg.jpeg');
    background-size: contain;
    width: 200px;
    height: 200px;
}
p.hi{
    text-align: center;

}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="register.php">Register</a>
  <a href="payroll.php">Payroll</a>
  <a href="payrolllist.php">Payroll Report</a>
  <a href="order.php">POINT OF SALE A </a>
  <a href="salesA.php">POINT OF SALE A REPORT</a>
  <a href="#about">POINT OF SALE B</a>
  <a href="salesB.php">POINT OF SALE B REPORT</a>
  <a href="displaylog.php">USER ACCOUNT</a>
  <a href="loginform.php">LOG OUT</a>

</div>
<div class= "three">

        <h1>TEAM <span>FIVE </span></h1>
</div>
<div class="content">

  <p class = "hi">Hello! There this is Sample Website that make by group 5.</p>
</div>
<div class = "background-image">

</div>
</body>
</html>

