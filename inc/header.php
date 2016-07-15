<header class="clearfix">
    <div class="user left clearfix">
        <?php 
        session_start();
        if(isset($_SESSION['login_user'])){ 
            echo "<div class='avatar'><img src='images/avatar.png' alt='user'></div>
                    <p>" . $_SESSION['login_user'] . "</p>";
            echo "<a href='check_login.php?logout=1' class='logout'><i class='fa fa-power-off'></i></a>";
        }else{
           echo "<div class='avatar'><img src='images/avatar.png' alt='user'></div>
                    <p>Login</p>";
            echo "<a href='login.php' class='logout'><i class='fa fa-power-off'></i></a>";
        }
        ?>
    </div>
    <?php
        error_reporting(0);
    ?>
</header>