<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFood | Food Gallery</title>
    <link rel="stylesheet" href="menu.css">
</head>
<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
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

.header{
    text-align: center;
    padding-top:20px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
}

input[type="search"]{
    border-radius: 20px;
    padding:10px;
    border:1px solid black;
    margin-left:20px
}
.main{
    border:2px solid crimson;
    margin:30px 20px;
    padding:20px 20px;
}
.main h2{
    padding-left:30px
}


.food{
    border:1px solid crimson;
    display:inline-block;
    margin:25px 25px;
    padding:20px 20px;
    border-radius: 5px;
    text-align: center;    
}

.loadmorepizza{
    display:none;
}
.loadmoreburger{
    display:none
}
.loadmoredrink{
    display:none;
}

.loadmorebtn{
    color:white;
    background-color: crimson;
    padding:10px 20px;
    margin-left: 20px;
    border:none;
    border-radius: 5px;
    font-weight: 600;
    transition: 0.4s ease;
}

.loadmorebtn:hover{
    background-color: brown;
}
.ordernow{
    color:crimson;
    background-color: whitesmoke;
    border-radius: 3px;
    width:200px;
    padding:10px;
    border:1px solid crimson;
    font-weight: bold;
    transition: 0.5s ;
}

.ordernow:hover{
    background-color: brown;
    color:white;
    border:none;
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
<body>
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
    
        <div class="header"><h1>Food Gallery</h1></div>
        <input type="search" placeholder="Search Food Here">
        <br>
        <br>
        <hr>

        <div class="main">
            <h2>Pizzas</h2>

        <div class="food">
            <img src="burger.jpg" width="150px" height="100px">
            <br>
            <h3>Cheese Pizza</h3>
            <br>
            <h3>$10</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="food">
            <img src="pizza1.jpg" width="150px" height="100px">
            <br>
            <h3>Neapolitan Pizza</h3>
            <br>
            <h3>$49</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="food">
            <img src="pizza2.jpg" width="150px" height="100px">
            <br>
            <h3>Chicago Pizza</h3>
            <br>
            <h3>$50</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="food">
            <img src="pizza3.jpg" width="150px" height="100px" >
            <br>
            <h3>New York-Style Pizza</h3>
            <br>
            <h3>$40</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="loadmorepizza">
            <img src="pizza4.jpg" width="150px" height="100px">
            <br>
            <h3>Laziz Pizza</h3>
            <br>
            <h3>$20</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="loadmorepizza">
            <img src="pizza5.jpg" width="150px" height="100px">
            <br>
            <h3>Papa John's Pizza</h3>
            <br>
            <h3>$50</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="loadmorepizza">
            <img src="combo2.jpg" width="150px" height="100px">
            <br>
            <h3>Quick Tomato Pizzas</h3>
            <br>
            <h3>$59</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="loadmorepizza">
            <img src="pizza6.jpg" width="150px" height="100px">
            <br>
            <h3>Pizza Margherita</h3>
            <br>
            <h3>$45</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <div class="loadmorepizza">
            <img src="pizza7.jpg" width="150px" height="100px">
            <br>
            <h3>Four Cheese Pizza</h3>
            <br>
            <h3>$29</h3>
            <br>
            <button class="ordernow">Order Now</button>
        </div>
        <button id="loadmorepizzabtn" class="loadmorebtn" onClick="loadMorePizzas()">Load More</button>
    </div>
    <br>
    <br>
    <div class="main">
        <h2>Burgers</h2>

    <div class="food">
        <img src="burger1.jpg" width="150px" height="100px">
        <br>
        <h3>Potato Corn Burger</h3>
        <br>
        <h3>$30</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="food">
        <img src="burger2.jpg" width="150px" height="100px">
        <br>
        <h3>Supreme Veggie Burger</h3>
        <br>
        <h3>$40</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="food">
        <img src="burger3.jpg" width="150px" height="100px">
        <br>
        <h3>Pizza Burger</h3>
        <br>
        <h3>$10</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="food">
        <img src="burger4.jpg" width="150px" height="100px">
        <br>
        <h3>Rajma Patty Burger</h3>
        <br>
        <h3>$25</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="loadmoreburger">
        <img src="burger5.jpg" width="150px" height="100px">
        <br>
        <h3>Butter Chicken Burger</h3>
        <br>
        <h3>$35</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="loadmoreburger">
        <img src="burger6.jpg" width="150px" height="100px">
        <br>
        <h3>Stuffed Bean Burger</h3>
        <br>
        <h3>$15</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="loadmoreburger">
        <img src="burger7.jpg" width="150px" height="100px">
        <br>
        <h3>Lamb Burger</h3>
        <br>
        <h3>$20</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="loadmoreburger">
        <img src="burger8.jpg" width="150px" height="100px">
        <br>
        <h3>cheese Burger</h3>
        <br>
        <h3>$45</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <div class="loadmoreburger">
        <img src="burger9.jpg" width="150px" height="100px">
        <br>
        <h3>Paneer Burger</h3>
        <br>
        <h3>$40</h3>
        <br>
            <button class="ordernow">Order Now</button>
    </div>
    <button id="loadmoreburgerbtn" class="loadmorebtn" onClick="loadMoreBurgers()">Load More</button>
</div>
<br>
<br>
<div class="main">
    <h2>Cold Drinks</h2>

<div class="food">
    <img src="cock1.jpg" width="150px" height="100px">
    <br>
    <h3>Coca Cola Can</h3>
    <br>
    <h3>$5</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="food">
    <img src="pepsi1.jpg" width="150px" height="100px">
    <br>
    <h3>Pepsi 2L</h3>
    <br>
    <h3>$10</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="food">
    <img src="limca1.jpg" width="150px" height="100px">
    <br>
    <h3>Limca 2L</h3>
    <br>
    <h3>$7</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="food">
    <img src="pepsi2.jpg" width="150px" height="100px">
    <br>
    <h3>Pepsi Can</h3>
    <br>
    <h3>$5</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="loadmoredrink">
    <img src="limca2.jpg" width="150px" height="100px">
    <br>
    <h3>Limca Can</h3>
    <br>
    <h3>$5</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="loadmoredrink">
    <img src="dew1.jpg" width="150px" height="100px">
    <br>
    <h3>Mountain Dew Can</h3>
    <br>
    <h3>$5</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="loadmoredrink">
    <img src="dew2.jpg" width="150px" height="100px">
    <br>
    <h3>Mountain Dew 1.5L</h3>
    <br>
    <h3>$9</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="loadmoredrink">
    <img src="maza1.jpg" width="150px" height="100px">
    <br>
    <h3>Maza 2L</h3>
    <br>
    <h3>$10</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<div class="loadmoredrink">
    <img src="maza2.jpg" width="150px" height="100px">
    <br>
    <h3>Maza 160ml</h3>
    <br>
    <h3>$5</h3>
    <br>
        <button class="ordernow">Order Now</button>
</div>
<button id="loadmoredrinkbtn" class="loadmorebtn" onClick="loadMoreDrinks()">Load More</button>
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

<script>
    function loadMorePizzas(){
        var array1 = document.getElementsByClassName("loadmorepizza");
        for(let i=0 ; i<array1.length ; i++){
            array1[i].style.cssText='border:1px solid crimson;display:inline-block;margin:25px 25px;padding:20px 20px;border-radius: 5px;text-align: center';
        }
        document.getElementById("loadmorepizzabtn").style.display='none';
    }

    function loadMoreBurgers(){
        var array2 = document.getElementsByClassName("loadmoreburger");
        for(let j=0 ; j<array2.length ; j++){
            array2[j].style.cssText='border:1px solid crimson;display:inline-block;margin:25px 25px;padding:20px 20px;border-radius: 5px;text-align: center';
        }
        document.getElementById("loadmoreburgerbtn").style.display='none';
    }

    function loadMoreDrinks(){
        var array3 = document.getElementsByClassName("loadmoredrink");
        for(let k=0 ; k<array3.length ; k++){
            array3[k].style.cssText='border:1px solid crimson;display:inline-block;margin:25px 25px;padding:20px 20px;border-radius: 5px;text-align: center';
        }
        document.getElementById("loadmoredrinkbtn").style.display='none';
    }
</script>
</body>
</html>