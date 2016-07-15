<?php include('inc/head.php'); ?>

<body>

    <?php include('inc/header.php'); ?>

    <div id="wrapper" class="clearfix expand">

        <?php include('inc/menu.php'); ?>

        <div id="content" class="right">

            <div class="breadcrumbs clearfix">
                <ul class="breadcrumbs left">
                    <li>FLOODS</li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>REGISTER</li>
                </ul>
            </div>

            <div class="alerts">
                <?php
                    include "dbconnect.php";
                    if(isset($_POST["submit"])){
                        $name = $_POST["name"];
                        $type = $_POST["type"];
                        $contact = $_POST["contact"];
                        $add1 = $_POST["add1"];
                        $add2 = $_POST["add2"];
                        $city = $_POST["city"];
                        $state = $_POST["state"];
                        $pincode = $_POST["pincode"];
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $sql = "INSERT INTO `user` (`name`, `type`, `contact`, `add1`, `add2`, `city`, `state`, `pincode`, `username`, `password`) VALUES ('$name', '$type', '$contact', '$add1', '$add2', '$city', '$state', '$pincode', '$username', '$password');";
                        if($result = mysql_query( $sql, $conn )){
                            echo "<div class='success'><p><strong>SUCCESS!</strong> Registered Successfully</p></div>";
                        }else{
                            echo "<div class='error'><p><strong>ERROR!</strong> There was an error in registration. Please try again.</p></div>";
                        }
                    }
                ?>
            </div>

            <form id="file-upload" class="upload" method="post" action="" enctype="multipart/form-data">
                <h3>REGISTRATION FORM</h3>
                <div class="inner clearfix">
                    <h3>PERSONAL DETAILS</h3>
                    <fieldset class="error">
                        <label for="field1">NAME OF ORGANIZATION</label>
                        <div class="field">
                            <input type="text" name="name" placeholder="Name of Organization" id="field1">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error-alert">
                        <label for="field2">TYPE</label>
                        <div class="field">
                            <select class="chosen-select" name="type" data-placeholder="Select type" id="field2">
                                <option value="0"></option>
                                <option value="ngo">NGO</option>
                                <option value="govt">Government Department</option>
                                <option value="npo">Non Profit Organization</option>
                            </select>
                            <span class="error-alert">Please select a valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="prefix">
                        <label for="field3">Contact</label>
                        <div class="field">
                            <table>
                                <tr>
                                    <td>+91 </td>
                                    <td><input type="text" name="contact" pattern="[0-9]+" placeholder="Placeholder" id="field12"></td>
                                </tr>
                            </table>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <h3>LOCATION DETAILS</h3>
                    <fieldset class="error">
                        <label for="field4">ADDRESS LINE 1</label>
                        <div class="field">
                            <input type="text" name="add1" placeholder="Address Line 1" id="add1">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error">
                        <label for="field5">ADDRESS LINE 2</label>
                        <div class="field">
                            <input type="text" name="add2" placeholder="Address Line 2" id="add2">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error">
                        <label for="field6">CITY</label>
                        <div class="field">
                            <input type="text" name="city" placeholder="CITY" id="city">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error">
                        <label for="field7">STATE</label>
                        <div class="field">
                            <input type="text" name="state" placeholder="State" id="state">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error">
                        <label for="field8">PINCODE</label>
                        <div class="field">
                            <input type="text" name="pincode" placeholder="Pincode" pattern="[0-9]+" maxlength="6" id="pincode">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <h3>LOGIN DETAILS</h3>
                    <fieldset class="error">
                        <label for="field9">USERNAME</label>
                        <div class="field">
                            <input type="text" name="username" placeholder="Username" id="field1">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error">
                        <label for="field10">PASSWORD</label>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" id="field1">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <input type="submit" name="submit" value="SUBMIT" class="right">
                    <input type="reset" value="RESET" class="right">
                </div>
            </form>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

</body>
</html>