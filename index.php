<?php include('inc/head.php'); ?>

<body>

    <?php include('inc/header.php'); ?>

    <div id="wrapper" class="clearfix expand">

        <?php include('inc/menu.php'); ?>

        <div id="content" class="right">

            <div class="breadcrumbs clearfix">
                <ul class="breadcrumbs left">
                    <li><a href="#">FLOODS</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>DASHBOARD</li>
                </ul>
            </div>

            <div class="circle-stats">
                <div class="fake-table">
                    <div class="fake-table-cell">
                        <a href="index.php?send_sos=1">
                        <div class="circle red">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <span>SOS</span><p>
                                    <span>Auto Msg</span>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="help.php">
                        <div class="circle yellow">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <span>Emergency</span><p>
									<span>Contacts</span>
                                </div>
                            </div>
                        </div>
                        </a>
                        <br>
						<a href="shelters.php">
                        <div class="circle blue">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <span>Assembling</span><p>
                                    <span>Locations</span>
                                </div>
                            </div>
                        </div>
						</a>
						<a href="food.php">
                        <div class="circle green">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <span>Food</span><p>
									<span>Availability</span>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
                </div>
            </div>

            <div class="users">                
                <div class="clearfix">
                    <div>
                        <div class="heading">
                            <h2><i class="fa fa-comments"></i>Updates</h2>
                        </div>
                        <div class="comments-approval">
						<div>
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
            </div>
			<div>
			<br>

			<br>
			</div>
			<div>
			<center><img src="flood_images/floodzone.jpg"></center>
			</div>
        </div>
		
		<p>

    </div>

    <?php include('inc/footer.php'); ?>

</body>
</html>
<?php
    if(isset($_GET['send_sos'])){
        // Textlocal account details
        $username = 'kckotak99@gmail.com';
        $hash = '3e5c390b9f8d8848b1f92dc15fda54d2d9ae2eb3';
        
        // Message details
        $numbers = array(9869618609);
        $sender = urlencode('TXTLCL');
        $ip =  getenv('HTTP_CLIENT_IP')?:
                getenv('HTTP_X_FORWARDED_FOR')?:
                getenv('HTTP_X_FORWARDED')?:
                getenv('HTTP_FORWARDED_FOR')?:
                getenv('HTTP_FORWARDED')?:
                getenv('REMOTE_ADDR');

        $location = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=0311c038ea51b3329defb46502205db820e96b0704a0d5e1b6d14ae86d4a8dba&ip=183.87.82.66");
 
        $message = rawurlencode("Plz help: My Location is: $location");
     
        $numbers = implode(',', $numbers);
        
        // Prepare data for POST request
        $data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
        // Send the POST request with cURL
        $ch = curl_init('http://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Process your response here
        echo "<script>alert('$response')</script>";
    }
?>