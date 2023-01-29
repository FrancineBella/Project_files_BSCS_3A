<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Summary of POS A List</title>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: auto;
  width: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background: linear-gradient(100deg, #ffffff,#0088cc)
}
.container {
  overflow: hidden;
  background-color: #e9e9e9;
  
}

.container input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .container input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .container input[type=text] {
    border: 1px solid #ccc;
  }
}
.container{
  max-width: auto;
  width: auto;
  background-color:#ffff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

table tr:hover{
			cursor:pointer;
		
}
table thead{
			background:#ffff;
			letter-spacing: 1px;
}
table thead tr th{
			color:#004080 ;
		}
</style>


</head>

<body>

<div class="container">
	<h2 style="margin-top: 30px; margin-bottom: 20px;color:#004080;">Summary of POS A List <input type="text" placeholder="Search.."></h2>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<t>
				<th> Sales Number</th>
				<th> Product Name</th>
				<th> Price</th>
				<th> Quantity</th>
				<th> Discount Amount </th>
				<th> Discounted Amount</th>
				<th> Cash from Customer</th>
				<th> Change to the Customer</th>
				</t>
			</tr>
		</thead>
		<tbody>
		
			</tbody>
</table>
</body>
</html>