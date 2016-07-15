<?php include('inc/head.php'); ?>

<body class="full">

    <div class="fake-table">
        <div class="fake-table-cell">
            <div id="login">
                <div class="top left clearfix">
                    <div class="logo left"><img src="images/id-logo.png" alt="logo"></div>
                    <p>FLOODS HELPLINE<br><span>LOGIN PAGE</span></p>
                </div>
                <form class="clearfix" action="" method="post">
                    <div class="fields">
                        <fieldset>
                            <input type="text" name="username" placeholder="LOGIN">
                            <span><i class="fa fa-user"></i></span>
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password" placeholder="PASSWORD">
                            <span><i class="fa fa-key"></i></span>
                        </fieldset>
                        <input type="submit" name="submit" value="OK">
                    </div>
                    <div class="bottom clearfix">
                        <a href="register.php" class="forgot left">REGISTER</a>
                        <a href="forgot-password.php" class="forgot right">FORGOT PASSWORD?</a>
                    </div>
                </form>
                <a href="index.php">
                <div class="top left clearfix">
                    <div class="logo right"><img src="images/id-logo.png" alt="HOME"></div>
                    <p>GO TO HOME PAGE<br><span>Flood Helpline Portal</span></p>
                </div>
                </a>
            </div>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

</body>
</html>

<?php
    session_start();

    if(isset($_SESSION['login_user'])){
        include "dbconnect.php";
        header("Location: index.php");
    }
    include "dbconnect.php";
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        
        if($username!="" && $password!=""){
            $sql = "SELECT id, username, password  FROM `user` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";
            $result = mysql_query( $sql, $conn );
            $num_rows = mysql_num_rows($result);
            $row = mysql_fetch_assoc($result);
            if($num_rows==1){
                $_SESSION['login_user'] = $username;
                $_SESSION['id'] = $row["id"];
                header("Location: index.php");
            }else{
                echo "<script> alert('Username or password is incorrect')</script>";
            }
        }
    }
?>