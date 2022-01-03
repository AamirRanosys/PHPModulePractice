
<?php
$title = "Login";
 include 'header.php';
 include 'connector.php';

 $useremail_error = $password_error = $loginError = "";

 $email = trim($_POST["email"]); 
 $password = $_POST["password"];
 $isLoginSucessful = false;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if(empty($email))
 {
     $useremail_error = "Please enter user email address";
 }
 if(empty($password))
 {
    $password_error = "Please enter password";
 }
 else{
    $sql_auth_user = "SELECT * FROM Users WHERE Email='$email' AND Password='$password';";
    $result = $connection->query($sql_auth_user);
    $count = mysqli_num_rows($result);
       
    if($connection)
    {
        // echo "Connected";

        if($count>0)
        { 
            // echo "Login Successfully";
            $isLoginSucessful = true;
            header("location: dashboard.php");
        }
        else{
            // echo "Login Not Successfull";
            $isLoginSucessful = false;
        }
    }
    else
    {
        die("Connection not established =>".mysqli_connect_error());
    }

 }

 

}

?>
     <div class = "loginForm">
        <h1 class = "cardTitle">Login</h1>
        <!-- action = "dashboard.php" -->
        <form class = "loginFields" method = "POST" action = "login.php" >
            <span><?php if(isset($useremail_error)) echo $useremail_error;?></span>
            <input  type="email" id="email" name="email" placeholder="Email">
            <span><?php if(isset($password_error)) echo $password_error;?></span>
            <input  type="password" id="email" name="password" placeholder="Password" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input  class="loginBtn" type="submit" value="Login">
        </form>
        <!-- <a href="dashboard.php">
				<button class="loginBtn" name="viewList" id="viewList">Login</button>
			</a>  -->

     </div>
    <?php 
        include 'footer.php';
    ?>

