<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
   <style>
    /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #ffffff,#0088cc)
}
.container{
    position: relative;
    max-width: 1000px;
    width: 100%;
    border-radius: 40px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 25px;
    font-weight: 800;
    color:#003366;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 50px;
    border-radius: 8px;
    background-color: #003366;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #003366;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #003366;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form button, .homebtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #003366;
    transition: all 0.3s linear;
    cursor: pointer;
    margin-right: 14px;

}
.container form .btnText{
    font-size: 15px;
    font-weight: 400;
}
form button:hover{
    background-color: #003366;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}
form .buttons{

    
}
@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}
@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}
   </style>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

    <div class="container">
        <header>NEW EMPLOYEE</header>
        <form action="coderegister.php" method ="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your Firstname" name = "fname"required>
                        </div>
                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter your Middle Name" name ="mname" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your Lastname" name = "lname" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name = "date" >
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name = "gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" placeholder="Enter your Nationality" name = "nationality">
                        </div>
                        <div class="input-field">
                            <label>Civil Status</label>
                            <select name = "status">
                                <option disabled selected>Select Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Designation</label>
                            <input type="text" placeholder="Enter your Designation" name = "designation" required>
                        </div>
                        <div class="input-field">
                            <label>Qualified Department Status</label>
                            <input type="text" placeholder="Enter your Department Status" name = "department" required>
                        </div>
                        <div class="input-field">
                            <label>Employee Status</label>
                            <input type="text" placeholder="Enter your Status" name = "employeestatus"required>
                        </div>
                        <div class="input-field">
                            <label>Paydate</label>
                            <input type="number"  placeholder="Enter Paydate" name = "paydate">
                        </div>
                        <div class="input-field">
                            <label>Employee Number</label>
                            <input type="number" placeholder="Enter your Employee Number" name = "employeenumber" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    <button class = "homebtn"
                    onclick="history.back()">Go Back</button>
                </div> 
            </div>
            <div class="form second">
                <div class="details address">
                    <span class="title">Contact Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="number" placeholder="Enter your number" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" required>
                        </div>
                        <div class="input-field">
                            <label>Social Media Account ID/No:</label>
                            <input type="text" placeholder="Enter your Account" required>
                        </div>
                        <div class="input-field">
                            <label>Other(Social Account)</label>
                            <input type="text" required>
                        </div>
                    </div>
                </div>
                <div class="details family">
                    <span class="title">Address</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="text" >
                        </div>
                        <div class="input-field">
                            <label>Street Name</label>
                            <input type="text">
                        </div>
                        <div class="input-field">
                            <label>District</label>
                            <input type="text">
                        </div>
                        <div class="input-field">
                            <label>Province</label>
                            <input type="text">
                        </div>
                        <div class="input-field">
                            <label>ZIP:</label>
                            <input type="number">
                        </div>
                        <div class="input-field">
                            <label>Country</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button type = "submit" class="sumbit" name = "submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <script>
        const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");
nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})
backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    </script>
</html>