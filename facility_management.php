<?php include('inc/head.php'); ?>

<body>

    <?php include('inc/header.php'); 
            include "check_login.php";
    ?>
    <div id="wrapper" class="clearfix expand">

        <?php include('inc/menu.php'); ?>

        <?php
            include "dbconnect.php";

            $sql = "SELECT `boats`, `food`, `clothes`, `funds` FROM resources WHERE id=".$_SESSION['id'].";";
            $result = mysql_query($sql,$conn);
            $row = mysql_fetch_assoc($result);
        ?>

        <div id="content" class="right">

            <div class="breadcrumbs clearfix">
                <ul class="breadcrumbs left">
                    <li><a href="#">FLOODS</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>RESOURCE MANAGEMENT</li>
                </ul>
            </div>

            <div class="circle-stats">
                <div class="fake-table">
                    <div class="fake-table-cell">
                        <div class="circle red">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter"><?php echo $row["boats"]; ?></p>
                                    <span>LIFE BOATS</span>
                                </div>
                            </div>
                        </div>
                        <div class="circle yellow">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter"><?php echo $row["food"]; ?></p>
                                    <span>FOOD (in kgs)</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="circle blue">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter"><?php echo $row["clothes"]; ?></p>
                                    <span>CLOTHES</span>
                                </div>
                            </div>
                        </div>
                        <div class="circle green">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter"><?php echo $row["funds"]; ?></p>
                                    <span>FUNDS (x10^6)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="users">                
                <div class="clearfix">
                    <div class="left-part left">
                        <div class="heading clearfix">
                            <h2 class="left"><i class="fa fa-user"></i>EMERGENCY CONTACTS</h2>
                        </div>
                        <table class="adm-table">
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="images/avatar1.jpg" alt="img" class="avatar">
                                    <p>PIYUSH MANTRI<br><span>THANE, MAHARASHTRA</span></p>
                                </td>
                                <td><span class="date">+91 84249 59991</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <img src="images/avatar1.jpg" alt="img" class="avatar">
                                    <p>KASHYAP KOTAK<br><span>MUMBAI, MAHARASHTRA</span></p>
                                </td>
                                <td><span class="date">+91 98659 98632</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <img src="images/avatar2.jpg" alt="img" class="avatar">
                                    <p>SNEHA DIGHE<br><span>THANE, MAHARASHTRA</span></p>
                                </td>
                                <td><span class="date">+91 94635 32198</span></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <div class="right-part right">
                        <div class="heading">
                            <h2><i class="fa fa-comments"></i>UPDATES</h2>
                        </div>
                        <div class="comments-approval">
                            <ul class="bxslider">
                                <?php
                                    include "dbconnect.php";

                                    $sql = "SELECT `id`, `time`, `location`, `title`, `message` FROM updates ORDER BY id DESC LIMIT 5";
                                    $result = mysql_query($sql,$conn);

                                    while($row = mysql_fetch_assoc($result)){
                                    echo"<li>
                                        <div class='author clearfix'>
                                        <p class='left'>". $row["title"] ."<br><span>". $row["time"] ."</span></p>
                                        </div>
                                        <p>". $row["message"] ."</p>
                                        </li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="alerts">
                <?php
                    include "dbconnect.php";
                    if(isset($_POST["submit"])){
                        $location = $_POST["location"];
                        $title = $_POST["title"];
                        $message = $_POST["message"];
                        $message = nl2br($message);
                        $message = stripslashes($message);
                        $message = mysql_real_escape_string($message);

                        date_default_timezone_set("Asia/Kolkata");
                        $time = date("Y-m-d H:i:s");

                        $sql = "INSERT INTO `updates` (`time`, `location`, `title`, `message`) VALUES ('$time', '$location', '$title', '$message');";

                        if($result = mysql_query( $sql, $conn )){
                            echo "<div class='success'><p><strong>SUCCESS!</strong> Update posted successfully</p></div>";
                        }else{
                            echo "<div class='error'><p><strong>ERROR!</strong> There was an error in registration. Please try again.</p></div>";
                        }
                    }
                ?>
                </div>

                <form id="file-upload" class="upload" method="post" action="" enctype="multipart/form-data">
                    <h3>ANNOUNCE UPDATE</h3>
                    <div class="inner clearfix">
                        <h3>HEADER</h3>
                        <fieldset class="error">
                            <label for="field1">TITLE</label>
                            <div class="field">
                                <input type="text" name="title" placeholder="Title of Update" id="field1">
                                <span class="error-alert">Please enter valid value</span>
                            </div>
                        </fieldset>
                        <h3>LOCATION</h3>
                        <fieldset class="error">
                            <label for="field2">LOCATION</label>
                            <div class="field">
                                <input type="text" name="location" placeholder="Location" id="field2">
                                <span class="error-alert">Please enter valid value</span>
                            </div>
                        </fieldset>
                        <h3>MESSAGE</h3>
                        <fieldset>
                            <label for="field3">MESSAGE</label>
                            <div class="field">
                                <textarea placeholder="Message" name="message" id="field3"></textarea>
                                <span class="error-alert">Please enter valid value</span>
                            </div>
                        </fieldset>
                        <input type="submit" name="submit" value="SUBMIT" class="right">
                        <input type="reset" value="RESET" class="right">
                    </div>
                </form>
            </div>

            <div>
                <div class="alerts">
                <?php
                    include "dbconnect.php";
                    if(isset($_POST["count_update"])){
                        $type = $_POST["type"];
                        $count = $_POST["count"];

                        $sql = "UPDATE `resources` SET `$type` = '$count' WHERE `id` = ".$_SESSION['id'].";";

                        if($result = mysql_query( $sql, $conn )){
                            echo "<div class='success'><p><strong>SUCCESS!</strong> Updated successfully</p></div>";
                        }else{
                            echo "<div class='error'><p><strong>ERROR!</strong> There was an error in updation. Please try again.</p></div>";
                        }
                    }
                ?>
                </div>

                <form id="file-upload" class="upload" method="post" action="" enctype="multipart/form-data">
                    <h3>UPDATE RESOURCES COUNT</h3>
                    <div class="inner clearfix">
                        <fieldset class="error-alert">
                        <label for="field2">RESOURCE TYPE</label>
                        <div class="field">
                            <select class="chosen-select" name="type" data-placeholder="TYPE" id="field2">
                                <option value="0"></option>
                                <option value="boats">LIFE BOATS</option>
                                <option value="food">FOOD</option>
                                <option value="clothes">CLOTHES</option>
                                <option value="funds">FUNDS</option>
                            </select>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                        </fieldset>
                        <h3>COUNT</h3>
                        <fieldset class="error">
                            <label for="field2">COUNT</label>
                            <div class="field">
                                <input type="text" pattern="[0-9]+" name="count" placeholder="COUNT" id="field3">
                                <span class="error-alert">Please enter valid value</span>
                            </div>
                        </fieldset>
                        <input type="submit" name="count_update" value="SUBMIT" class="right">
                        <input type="reset" value="RESET" class="right">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>

</body>
</html>