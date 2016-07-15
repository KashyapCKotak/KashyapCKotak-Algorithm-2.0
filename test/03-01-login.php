<?php include('inc/head.php'); ?>

<body class="full">

    <div class="fake-table">
        <div class="fake-table-cell">
            <div id="login">
                <div class="top left clearfix">
                    <div class="logo left"><img src="images/id-logo.png" alt="logo"></div>
                    <p>IDS ADMIN<br><span>LOGIN PAGE</span></p>
                </div>
                <form class="clearfix">
                    <div class="fields">
                        <fieldset>
                            <input type="text" placeholder="LOGIN">
                            <span><i class="fa fa-user"></i></span>
                        </fieldset>
                        <fieldset>
                            <input type="password" placeholder="PASSWORD">
                            <span><i class="fa fa-key"></i></span>
                        </fieldset>
                        <input type="submit" value="OK">
                    </div>
                    <div class="bottom clearfix">
                        <input type="checkbox" data-label="REMEMBER ME" checked>
                        <a href="03-02-forgot-password.php" class="forgot right">FORGOT PASSWORD?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

</body>
</html>