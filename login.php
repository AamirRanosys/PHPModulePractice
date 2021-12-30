
<?php
$title = "Login";
 include 'header.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if(empty($_POST["email"]))
 {
     $useremail_error = "Please enter user email address";
 }
 if(empty($_POST["password"]))
 {
    $password_error = "Please enter password";
 }

}

?>
     <div class = "loginForm">
        <h1 class = "cardTitle">Login</h1>

        <form class = "loginFields" method = "POST"  action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <span><?php if(isset($useremail_error)) echo $useremail_error;?></span>
            <input  type="text" id="email" name="email" placeholder="Email">
            <span><?php if(isset($password_error)) echo $password_error;?></span>
            <input  type="password" id="email" name="password" placeholder="Password">
            <input  class="loginBtn" type="submit" value="Login">
        </form>
        <!-- <a href="dashboard.php">
				<button class="loginBtn" name="viewList" id="viewList">Login</button>
			</a>  -->

     </div>
    <?php 
        include 'footer.php';
    ?>

