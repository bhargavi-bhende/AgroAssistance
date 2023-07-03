<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "agroAgency1";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Register</title>
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
    if(isset($_POST['signupbt']))
    {
        $agencyname=$_POST['agency_name'];

        $pass=$_POST['password'];
      
        $email=$_POST['email'];
      
        $phone=$_POST['phoneno'];
      
        $address=$_POST['address'];
        
       
        $insertquery = "INSERT INTO agencylogin (`agency_name`, `password`, `email`, `phoneno`, `address`) 
               VALUES ('$agencyname','$pass','$email','$phone','$address');";
        $result = mysqli_query($conn, $insertquery);
        

        
        echo "<script>alert('You are successfully authenticated!');</script>";
        echo "<script>window.location.href='login3.php';</script>";
	
	
    } 



    ?>
 <div class="box">
        <div class="container">
    
            <div class="top">
               <!-- <span>Have an account?</span> -->
                <header>Agro Agency registration</header>
                <form id="sign-up-data" class="sign-up-data" method="post" action="agro_regist.php" >
            </div>
    
            <div class="input-field">
                <input type="text" class="input" placeholder="Username" id="" name='agency_name'>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"/></svg></i>
            </div>
    
            <!-- Password -->
            
                    <div class="input-field">
               
                <input type="password" class="input" placeholder="password" id="" name='password'>
                <i class='fas fa-envelope'> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223l-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044L20.002 18H4z"/></svg></i>
            
                
            </div>

            <div class="input-field">
               
                <input type="email" class="input" placeholder=" Email" id="" name='email'>
                <i class='fas fa-envelope'> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223l-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044L20.002 18H4z"/></svg></i>
            
                
            </div>
            <div class="input-field">
               
                <input type="text" class="input" placeholder="Phone number" id="" name='phoneno'>
                <i class='fas fa-envelope'> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223l-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044L20.002 18H4z"/></svg></i>
            
                
            </div>
            <div class="input-field">
               
                <input type="text" class="input" placeholder="Address" id="" name='adress'>
                <i class='fas fa-envelope'> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223l-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044L20.002 18H4z"/></svg></i>
            
                
            </div>
                    <!-- Sign up button -->
                    <button class="btn btn-success my-4 btn-block btn " style="background-color:#AA9A6E!important;" type="submit" name="signupbt" value="signupbt">Sign up</button>
</form>
        </div>

    </div>  


        
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="js/index.js"></script>
</body>
</html>