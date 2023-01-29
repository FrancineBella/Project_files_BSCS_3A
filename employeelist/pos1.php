<html>
<head>
<title>MyFood</title>
<link rel="stylesheet" href="D:\website2\myfood.css">
</head>
<body>
<style>
*{
	box-sizing:border-box;
	padding:0;
	margin:0;
	font-family:arial;
	
}

.nav{
	background-color:crimson;
	color:white;
	display:flex;
	justify-content:space-between;
	align-items:center;
	
}

.logo {
    padding:10px 30px;
	letter-spacing:2px;
	font-size:20;
	cursor:pointer;

}
.navlinks{
	float:right;
	padding-right:30px;
	cursor:pointer;
	
	
}
.navlinks ul li{
	display:inline-block;
	padding-right:30px;
	cursor:pointer;
    
}

.navlinks ul li a{
	text-decoration:none;
	color:white;
	font-size:17;
	cursor:pointer;
	text-transform:uppercase;
	
}

.naveborder::after{
	content:'';
	width:0;
	height:2px;
	display:block;
	background-color:white;
	transition: width 0.3s ease;
	
}

.naveborder:hover::after{
	width:100%;
}

.container{
	background-image:linear-gradient(to top, rgba( 145, 146, 122, 0.62),rgba( 145, 146, 122, 0.62)),url("burger.jpg");
	background-size:cover;
    height:100%;
	height:695px;
	text-align:center;
}
.container h1{
	padding-top:120px;
	color:white;
	font-size:60
}
.container p{
	color:white;
	padding-top:50px
}
.order a{
	color:white;
	text-decoration:none;
	font-weight:bold
	
}
.order{
	background-color:crimson;
	padding:15px 10px;
	border:none;
	font-size:15;
	border-radius:5px;
	margin-top:55px;
	transition:0.5s ease
   
}
.order:hover{
	padding:20px 20px;
}

.container2{
	margin:30px 20px;
	border:2px solid crimson;
}

.pizza{
	padding:30px 60px;
	margin:10px 0 0 40px;
}
.container2 h1{
	color:crimson;
	text-align:center;
	padding-top:30px;   
}
.container2 h3{
	color:crimson
}
.aboutmyfood{
	display:flex;
	float:right;
	margin:50px 200px 0 0;
}

.container3{
	border:2px solid crimson;
	margin:30px 20px;
	padding-bottom:150px
	
}

.container3 h1{
	color:crimson;
	text-align:center;
	padding-top:30px;	
}
.combos{
	display:flex;
	align-items:center;
	justify-content:space-around;
	margin-top:80px
}
.combos h2{
	color:crimson;
}
 .combo1 ,.combo2, .combo3 {
	border:2px solid crimson;
	padding:20px 30px;
	text-align:center;
}
 .combos ul li{
	 list-style:none;
	 line-height:40px
 }
.buy{
	margin-top:30px;
	padding:10px 10px;
	border:none;
	border-radius:3px;
	background-color:crimson;
    transition:0.3s ease;	
}
.buy a{
	color:white;
	text-decoration:none;
	
}
.buy:hover{
	background-color:red;
}

.contact{
	
	border:2px solid crimson;
	margin:30px 20px;
	text-align:center;
}

.contact h1{
	padding-top:30px;
	color:crimson
}
.form{
	display:grid;
	align-items:center;
	justify-content:center;
	margin-top:50px;
	margin-bottom:50px;
	padding:50px
}
input[type=text]{
	margin:10px auto 30px auto;
	width:400px;
	padding:7px 5px;
	border:2px solid crimson;
	border-radius:4px
}
input[type=email]{
	margin:10px auto 30px auto;
	width:400px;
	padding:7px 5px;
	border:2px solid crimson;
	border-radius:4px
}
input[type=number]{
	margin:10px auto 30px auto;
	width:400px;
	padding:7px 5px;
	border:2px solid crimson;
	border-radius:4px
}
.form textarea{
	margin:10px auto 30px auto;
	width:400px;
	height:250px;
	padding:7px 5px;
	border:2px solid crimson;
	border-radius:4px
}
.query{
	padding:10px;
	background-color:crimson;
	border:none;
	border-radius:4px;
	transition:0.1s ease
}
.query a{
	color:white;
	text-decoration:none;
}

.query:hover{
	background-color:#E30B5D;
}

.footer{
	display:flex;
	padding:50px;
	align-items:center;
	background-color:crimson;
	justify-content:space-evenly;
	color:white;
	cursor:pointer;
}

.footer3{
	margin-top:30px
}

.footer2 ul{
	list-style:none;
	padding-top:20px
}
.footer2 ul li{
	line-height:30px
}
.footer3 ul{
	list-style:none;
	padding-top:20px
}
.footer3 ul li{
	line-height:30px;
}
.footer2 ul li a{
	text-decoration:none;
	color:white;
	transition:0.1s
}
.footer3 ul li a{
	text-decoration:none;
	color:white;
	transition:0.1s
}
.footer2 ul li a:hover{
	color:silver;
}
.footer3 ul li a:hover{
	color:silver;
}
</style>
<div class="nav">
   <div class="logo"><h2>My Food</h2></div>
   
   <div class="navlinks">
      <ul>
	     <li><a class="naveborder" href="file:///D:/website2/index.html">Home</a></li>
	     <li><a class="naveborder" href="">Blog</a></li>
	     <li><a class="naveborder" href="file:///D:/website2/menu.html">Food Gallery</a></li>
	     <li><a class="naveborder" href="">About</a></li>
	     <li><a class="naveborder" href="">Contact</a></li>
        <li><a class="naveborder" href="file:///D:/website2/login.html">Login</a></li> 
	  </ul>      
   
   </div>

</div>
<div class="container">
  <h1> Order Your Favourite Food At Your Doorstep</h1>
  <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
Mauris consequat mauris vel justo feugiat mattis.<br><br>
In ac neque molestie, tempus felis ut, faucibus libero.<br><br>
Nam hendrerit ipsum vel nisl porttitor sagittis.<br><br>
Integer nec orci quis mi sodales sodales.</p>

<button class="order"><a href="">Order Now</a></button>
</div>

<div class="container2">
<h1> About MyFood</h1>
<img class="pizza" src="pizza.jpg" width="500px" height="500px">
<div class="Aboutmyfood">
<h3> MyFood</h3>&nbsp is a Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
Mauris consequat mauris vel justo feugiat mattis.<br><br>
In ac neque molestie, tempus felis ut, faucibus libero.<br><br>
Nam hendrerit ipsum vel nisl porttitor sagittis.<br><br>
Integer nec orci quis mi sodales sodales.<br><br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
Mauris consequat mauris vel justo feugiat mattis.<br><br>
In ac neque molestie, tempus felis ut, faucibus libero.<br><br>
Nam hendrerit ipsum vel nisl porttitor sagittis.<br><br>
Integer nec orci quis mi sodales sodales.<br><br>
Nam hendrerit ipsum vel nisl porttitor sagittis.<br><br>
Integer nec orci quis mi sodales sodales.</div>
</div>

<div class="container3">
<h1> Our Best Combos</h1>



<div class="combos">

<div class="combo1">
<h2> $99 </h2>
<img src="combo1.jpg" width="300px" style="margin:30px 0 30px 0">
<ul>
   <li>1 Cheese Burger</li>
   <li>1 Small Sized Pizza</li>
   <li>1 Pepsi 500ml</li>
   <button class="buy"><a href="">Order Now</a></button>
   
</ul>

 </div>

<div class="combo2">
<h2> $199 </h2>
<img src="combo2.jpg" width="300px" style="margin:30px 0 30px 0">
<ul>
   <li>2 Cheese Burger</li>
   <li>2 Medium Sized Pizza</li>
   <li>2 Pepsi 500ml</li>
   <button class="buy"><a href="">Order Now</a></button>
   
</ul>
</div>

<div class="combo3">
<h2> $299 </h2>
<img src="combo1.jpg" width="300px" style="margin:30px 0 30px 0">
<ul>
   <li>3 Cheese Burger</li>
   <li>2 Large Sized Pizza</li>
   <li>2 Pepsi 1L</li>
   <button class="buy"><a href="">Order Now</a></button>
   
</ul>
</div>
</div>

</div>


<div class="contact">
<h1> Got Some Queries, Feel Free To Contact Us </h1>
<div class="form">
 <input type="text" placeholder="Name" id="Name">
 <input type="email" placeholder="Email" id="Email">
 <input type="number" placeholder="Mobile No" id="Mobile No">
 <textarea placeholder="Your Message" id="text-area" rows="5" cols="10"></textarea>

<button class="query"><a href="">Submit Query</a></button>
</div>


</div>
<div class="footer">
<div class="footer1"> <h1> MyFood </h1></div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer2">
<h2>Services</h2>
<ul>
<li><a href="">Sign Up</a></li>
<li><a href="">Login</a></li>
<li><a href="">Order Food</a></li>
<li><a href="">Affiliate</a></li>
</div>
<div class="footer3">
<h2>Our Pages</h2>
<ul>
<li><a href="">About Us</a></li>
<li><a href="">Contact Us</a></li>
<li><a href="">Privacy Policy</a></li>
<li><a href="">Disclaimer</a></li>
<li><a href="">Terms & Conditions</a></li>
</div>

<div class="credit"><p> Copyright 2022 MyFood all rights reserved</p></div>
</div>
</body>
</html>