<?php include('inc/head.php'); ?>

        
  <body>
      <?php include('inc/header.php'); ?>
       
          <div id="wrapper" class="clearfix expand">

              <?php include('inc/menu.php'); ?>

              <div id="content" class="right">

                  <div class="breadcrumbs clearfix">
                      <ul class="breadcrumbs left">
                          <li><a href="#">Floods</a></li>
                          <li><i class="fa fa-angle-right"></i></li>
                          <li>Awareness</li>
                          <li><i class="fa fa-angle-right"></i></li>
                          <li>Proactive Preparation</li>
                      </ul>
                  </div>
                  <div class="alerts">
                    <?php
                        include "dbconnect.php";
                        if(isset($_POST["donate"])){
                            $fname = $_POST["first-name"];
                            $lname = $_POST["last-name"];
                            $address = $_POST["streetaddress"];
                            $city = $_POST["city"];
                            $pincode = $_POST["zipcode"];
                            $email = $_POST["email"];
                            $amount = $_POST["amount"];

                            $sql = "INSERT INTO `donation` (`fname`, `lname`, `address`, `city`, `pincode`, `email`,`amount`) VALUES ('$fname', '$lname', '$address', '$city', '$pincode', '$email', '$amount');";
                            if($result = mysql_query( $sql, $conn )){
                                echo "<div class='success'><p><strong>SUCCESS!</strong>Thank You for the donation</p></div>";
                            }else{
                                echo "<div class='error'><p><strong>ERROR!</strong> There was an error in donation process. Please try again.</p></div>";
                            }
                        }
                    ?>
                  </div>
                  <div class="gateway">
                    <form action="" method="post">
                      <div class="form-container">
                        <div class="personal-information">
                          <h3>Payment Information</h3>
                        </div> <!-- end of payment-information -->
                        <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>

                        <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>

                        <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="6" placeholder="Pincode"/>
                        
                        <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
                      
                      <div class="card-wrapper"></div>
                        <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
                        
                        <input id="column-right" type="text" name="last-name" placeholder="Surname"/>
                        
                        <input id="input-field" type="text" name="number" placeholder="Card Number"/>
                       
                        <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
                          
                        <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
                        
                        <input id="input-field" type="number" name="amount" placeholder="Amount"/>

                        <input id="input-button" name="donate" type="submit" value="Submit"/>
                    </form>
                  </div> <!-- end of form-container -->
                </div> 
              </div>     
      <?php include('inc/footer.php'); ?>
      <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>
      <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script>
      <script src="js/index.js"></script> 
  </body>
</html>