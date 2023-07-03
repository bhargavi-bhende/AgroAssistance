<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "farmer1";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Login</title>
    <link rel="stylesheet" href="css/login-signup.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<style>
input:focus {
  background-color: #f2f2f2;
}
</style>

</head>

<body>

<?php

    if(isset($_POST['submitsignup']))
    {
        $farmername=$_POST['farmer_name'];

        $pass=$_POST['password'];
      
        $email=$_POST['email'];
      
        $phone=$_POST['phoneno'];
      
        $aadhar=$_POST['F_AadharNo'];
        
       
        $insertquery = "INSERT INTO farmerlogin('farmer_name', 'password', 'email', 'phoneno','F_AadharNo') 
        VALUES ('$farmername','$pass','$email','$phone','$aadhar');";
        $result = mysqli_query($conn, $insertquery);
        
      
    } 



if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM farmerlogin WHERE password = '". $_POST["password"]."'and farmer_name= '". $_POST["farmer_name"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script>alert('Name or Password!!');</script>";
		
		echo "<script>window.location.href='login1.php';</script>";
		exit();
		//$message = "Invalid Username or Password!";
	} else
		echo "<script>alert('You are successfully authenticated!');</script>";
		echo "<script>window.location.href='indexFarmer.html';</script>";
									
}


    ?>


<div class="box">
    <div class="container">

        <div class="top">
           <!-- <span>Have an account?</span> -->
            <header>Login</header>
            <form  id="login" class="login-data" method="post" action="login1.php">
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="" name='farmer_name'>
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name='password'>
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="" name='submitsignup'>
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="farmer_regist.php">Don't have an account?</a></label>
            </div>
        </div>
</form></form>
    </div>
</div>  


 <!--   <div class="container">
        <div class="login" data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
            <h1>Login</h1>
            <form  id="login" class="login-data" method="post" action="ngo-login.php">
                <label for="text" >NGO Name</label>
                <input type="text" id="ngo-name" placeholder="Full name" name="NGOName1"
                required minlength="2" maxlength="100" />
                
                <label for="text" >What you need</label>
                <input type="text" id="ngo-name" placeholder="what you what to receive" name="ReceiveGoods"
                required minlength="2" maxlength="100" />
              
                <label for="text" >Password</label>
                <input type="password" id="ngo-password" placeholder="Create Password (Min. 8 Characters)" name="Password1"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <button type="submit" name="submitid">Login</button>
            
            </form>
        </div>-->
        
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="js/index.js"></script>
</body>
</html>