<!DOCTYPE html>
    <head>
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
  background:#f9f2ec;;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 35px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
}
.container form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
 
}
form .user-details .input-box{
   
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 30px;
  width: 100%;
  outline: none;
  font-size: 13px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #0000;
}
 
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
  justify-content: space-between;
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color:#4d3319;
   font-size: 18px;
   font-weight: 600;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background:#d9b38c;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #ffffff, #d9b38c);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 10px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
    </style>
   </head>
   
<body>
  <div class="container">
    <div class="title">EMPLOYEE BASIC INFO</div>
    <div class="content">
      <form action="#">
        <form action="/action_page.php">
          <img src="no-image.jpeg" width="200" height="200">
       <label for="myfile"><br></label>
      <input type="file" id="myfile" name="myfile" multiple>
      <br><br>
     </form>
     
     <?php
    $employee_number = "";
    $firstname = "";
    $surname = "";
    $position = "";
    $designation = "";
    $paydate = "";
    $department = "";
    $middlename = "";
    $civilstatus = "";
    $Quali_Depens_Status = "";
    $employee_status = "";
   

    $sss_contri = '';
    $pagibig = 100;
    $philhealth_contri= "";
    $tax1= "";
    $other_deduc = "";
    $faculty_deposit ="";

    $rate_per_hour_0 = "";
    $rate_per_hour_1 = "";
    $rate_per_hour_2= "";
    $num_of_hour_cutoff_0 = "";
    $num_of_hour_cutoff_1 = "";
    $num_of_hour_cutoff_2 = "";
    
    $deduction = "";
    $gross_income = "";
    $basic_income = "";
    $hono_income = "";
    $other_income = "";
    $net_income = "";


    $sss_loan = "";
    $salary_loan = "";
    $pagibig_loan = "";
    $faculty_savings = "";
    $other_loans = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $employee_number = $_POST['employee_number'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $designation = $_POST['designation'];
    $paydate = $_POST['paydate'];
    $department = $_POST['department'];
    $middlename = $_POST['middlename'];
    $civilstatus = $_POST['civilstatus'];
    $Quali_Depens_Status = $_POST['Quali_Depens_Status'];
    $employee_status = $_POST['employee_status'];
    
    $sss_loan = $_POST['sss_loan'];
    $salary_loan = $_POST['salary_loan'];
    $pagibig_loan = $_POST['pagibig_loan'];
    $faculty_savings = $_POST['faculty_savings'];
    $other_loans = $_POST['other_loans'];
    $faculty_deposit = $_POST['faculty_deposit'];

  
    $sss_contri = $_POST['sss_contri'];
    $philhealth_contri = $_POST['philhealth_contri'];
    $tax1=$_POST['tax1'];
    $rate_per_hour_0= $_POST['rate_per_hour_0'];
    $rate_per_hour_1= $_POST['rate_per_hour_1'];
    $rate_per_hour_2= $_POST['rate_per_hour_2'];
    $num_of_hour_cutoff_0= $_POST['num_of_hour_cutoff_0'];
    $num_of_hour_cutoff_1= $_POST['num_of_hour_cutoff_1'];
    $num_of_hour_cutoff_2= $_POST['num_of_hour_cutoff_2'];
    $basic_income = bcmul ($rate_per_hour_0,$num_of_hour_cutoff_0);
    $hono_income = bcmul ($rate_per_hour_1,$num_of_hour_cutoff_1);
    $other_income = bcmul($rate_per_hour_2,$num_of_hour_cutoff_2);
    $gross_income = ($basic_income+$hono_income+$other_income);
    $other_deduc = ((int)$sss_loan+(int)$pagibig_loan+(int)$faculty_savings+(int)$salary_loan+(int)$other_loans+(int)$faculty_deposit);
    $deduction = ((int)$pagibig+(int)$sss_contri+(int)$philhealth_contri+(int)$tax1+(int)$other_deduc);
    $net_income = ($gross_income-$deduction);
}

?>
      <form action="register.php" method = "POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Employee Number: </span>
            <input type="number" name = "employee_number" value = "<?php echo $employee_number;?>"/>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" name = "department" value = "<?php echo $department;?>">
          </div>
          <div class="input-box">
            <span class="details">Firstname: </span>
            <input type="text" name="firstname" value = "<?php echo $firstname;?>">
          </div>
          <div class="input-box">
            <span class="details">Middle Name: </span>
            <input type="text" name="middlename" value = "<?php echo $middlename;?>">
          </div>
          <div class="input-box">
            <span class="details">Surname: </span>
            <input type="text" name="surname" value = "<?php echo $surname;?>">
          </div>
          <div class="input-box">
            <span class="details">Civil Status: </span>
            <input type="text" name="civilstatus" value = "<?php echo $civilstatus;?>">
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" name="designation" value = "<?php echo $designation;?>">
          </div>
          <div class="input-box">
            <span class="details">Qualified Dependents Status: </span>
            <input type="text" name="Quali_Depens_Status" value = "<?php echo $Quali_Depens_Status;?>">
          </div>
          <div class="input-box">
            <span class="details">Paydate: </span>
            <input type="date" name="paydate" value = "<?php echo $paydate;?>" >
          </div>
          <div class="input-box">
            <span class="details">Employee Status: </span>
            <input type="text" name="employee_status" value = "<?php echo $employee_status;?>">
          </div>
         <div class="input-box">
             <h3>BASIC INCOME: </h3>
            <span class="details">Rate / Hour:  </span>
            <input type="number" name ="rate_per_hour_0" value = "<?php echo $rate_per_hour_0;?>">
          </div>
          <div class="input-box">
            <span class="details">No. of Hours/ Cut Off: </span>
            <input type="number" name = "num_of_hour_cutoff_0" value = "<?php echo $num_of_hour_cutoff_0;?>">
          </div>
          <div class="input-box">
            <span class="details">Income / Cut Off: </span>
            <input type="number" name="basic_income" value="<?php echo $basic_income;?>" disabled/>
          </div>
          <div class="input-box">
            <h3>REGULAR DEDUCTIONS : </h3>
            <span class="details">SSS Contribution:  </span>
            <input type="number" name="sss_contri" value="<?php echo $sss_contri;?>">
          </div>
          <div class="input-box">
            <span class="details">Philhealth Contribution:  </span>
            <input type="number" name="philhealth_contri" value="<?php echo $philhealth_contri;?>">
          </div>
          <div class="input-box">
            <span class="details">Pag-ibig Contribution  </span>
            <input type="number" name="pagibig" value=" " disabled/>
          </div>
          <div class="input-box">
            <span class="details">Income Tax Contribution:  </span>
            <input type="number" name="tax1" value="<?php echo $tax1;?>">
          </div>
          <div class="input-box">
             <h3>HONORARIUM INCOME:</h3>
            <span class="details">Rate / Hour: </span>
            <input type="number" name="rate_per_hour_1" value="<?php echo $rate_per_hour_1;?>"/>
          </div>
          <div class="input-box">
            <span class="details">No. of Hours / Cut Off:  </span>
            <input type="number" name="num_of_hour_cutoff_1" value="<?php echo $num_of_hour_cutoff_1;?>" />
          </div>
          <div class="input-box">
            <span class="details">Income / Cut Off: </span>
            <input type="number" name="hono_income" value="<?php echo $hono_income;?>" disabled/>
          </div>
          <div class="input-box">
            <h3>OTHER DEDUCTIONS: </h3>
            <span class="details">SSS Loan:  </span>
            <input type="number" name="sss_loan" value="<?php echo $sss_loan;?>" >
          </div>
          <div class="input-box">
            <span class="details">Pag- Ibig Loan:  </span>
            <input type="number" name="pagibig_loan" value="<?php echo $pagibig_loan;?>" >
          </div>
          <div class="input-box">
            <span class="details">Faculty Saving Deposit:  </span>
            <input type="number" name="faculty_deposit" value="<?php echo $faculty_deposit;?>" >
          </div>
          <div class="input-box">
            <span class="details">Faculty Savings Loan:  </span>
            <input type="number" name="faculty_savings" value="<?php echo $faculty_savings;?>" >
          </div>
          <div class="input-box">
            <span class="details">Salary Loan  </span>
            <input type="number" name="salary_loan" value="<?php echo $salary_loan;?>" >
          </div>
          <div class="input-box">
            <span class="details">Others Loan:  </span>
             <input type="number" name="other_loans" value="<?php echo $other_loans;?>" >
          </div>
          <div class="input-box">
            <h3>OTHER INCOME: </h3>
            <span class="details">Rate / Hour:  </span>
            <input type="number" name="rate_per_hour_2" value="<?php echo $rate_per_hour_2;?>"/>
          </div>
          <div class="input-box">
            <span class="details">No. of Hours / Cut Off:  </span>
            <input type="number" name="num_of_hour_cutoff_2" value="<?php echo $num_of_hour_cutoff_2;?>"/>
          </div>
          <div class="input-box">
            <span class="details">Income / Cut Off:  </span>
            <input type="number" name="other_income" value="<?php echo $other_income;?>" disabled/>
          </div>
          <div class="input-box">
            <h3>SUMMARY INCOME: </h3>
            <span class="details">GROSS INCOME:  </span>
            <input type="text" name="gross_income" value="<?php echo $gross_income;?>" disabled/> 
          </div>
          <div class="input-box">
            <span class="details">NET INCOME:  </span>
            <input type="text" name="net_income" value="<?php echo $net_income;?>" disabled/>
          </div>
          <div class="input-box">
            <h3>DEDUCTION SUMMARY: </h3>
            <span class="details">Total Deductions:  </span>
            <input type="text" name="deduction" value="<?php echo $deduction;?>" disabled/>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="CALCULATE GROSS INCOME">
        </div>
        <div class="button">
          <input type="submit" value="CALCULATE NET INCOME">
        </div>
        <div class="button">
          <input type="submit" value="New">
        </div>
        <div class="button">
          <input type="submit" value="PRINT PREVIEW PAYSLIP">
        </div>
        <div class="button">
          <input type="submit" value="PRINT PAYSLIP">
        </div>
        <div class="button">
          <input type="submit" value="CANCEL">
        </div>
        <div class="button">
          <input type="submit" value="CLOSE">
        </div>
      </form>
    </div>
  </div>

</body>
</html>