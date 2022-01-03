<?php
 $title = "SignUp";
 $insert = false;
 $isSignupSucessfully = false;

 include 'header.php';
 include 'connector.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    //check empty fields
    if(empty($fname))
    { $fname_error = "Please enter First Name"; }

    if(empty($lname))
    { $lname_error = "Please enter Last Name"; }
    
    if(empty($email))
    { $useremail_error = "Please enter user email address"; }
    
    if(empty($password))
    { $password_error = "Please enter password"; }
    elseif(strlen($password) < 8)
    {$password_error = "Your Password Must Contain At Least 8 Characters!";}
    elseif(!preg_match("#[0-9]+#",$password)) {
        $password_error = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $password_error = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $password_error = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif(empty($cpassword))
    {   $cpassword_error = "Please enter password"; }
    elseif($password != $cpassword) {
        $password_error = "Please Check You've Entered Or Confirmed Your Password!";
    }    
    else{
    //INSERT FORM DATA TO Users DB
    $sql = "INSERT INTO `Users` (`Firstname`, `Lastname`,`Email`,`Password`)
    VALUES ('$fname', '$lname', '$email','$password');";
    }

    if($connection->query($sql) == true)
    {
       // echo "Sucessfully Inserted";
       $insert = true;
       $isSignupSucessfully = true;
       header("location: login.php");
    }
    else
    {
        echo "Error : $sql <br> $connection->error";
    }

    $connection->close();
}

?>

<div class = "SignupForm">
        <h1 class = "signupCardTitle">SignUp</h1>

        <form class = "loginFields" method = "POST"  action = "signup.php">
            <span><?php if(isset($fname_error)) echo $fname_error;?></span>    
            <input type="text" id="signupFields" name="firstname" placeholder = "First Name">    
        
            <span><?php if(isset($lname_error)) echo $lname_error;?></span>    
            <input type="text" id="signupFields" name="lastname" placeholder = "Last Name">    

            <span><?php if(isset($useremail_error)) echo $useremail_error;?></span>
            <input  type="email" id="signupFields" name="email" placeholder="Email">
     
            <span><?php if(isset($password_error)) echo $password_error;?></span>
            <input  type="password" id="signupFields" name="password" placeholder="Password">

            <span><?php if(isset($cpassword_error)) echo $cpassword_error;?></span>
            <input  type="password" id="signupFields" name="cpassword" placeholder="Confirm Password">

            <input  class="signupBtn" type="submit" value="SignUp">
        </form>
        <!-- <a href="dashboard.php">
				<button class="loginBtn" name="viewList" id="viewList">Login</button>
			</a>  -->

     </div>


<?php
 include 'footer.php';
?>