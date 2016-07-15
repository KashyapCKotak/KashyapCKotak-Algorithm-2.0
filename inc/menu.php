<nav class="left eqh">
    <a class="menu-btn open">
        <div class="ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>
    <a class="mobile-menu">MENU</a>
    <ul class="menu">
        <li><a href="index.php"><span><i class="fa fa-file-text"></i></span><p>DASHBOARD</p></a></li>
        <li><a href="help.php"><span><i class="fa fa-file-text"></i></span><p>HELP</p></a></li>
        <li class="dropdown"><span><i class="fa fa-file-text"></i></span><p>AWARENESS</p>
            <ul>
                <li><a href="survival_guidelines.php">SURVIVAL GUIDELINES</a></li>
                <li><a href="self_protection.php">SELF PROTECTION</a></li>
                <li><a href="preparation.php">PROACTIVE PREPARATION</a></li>
                <li><a href="reaction.php">REACTION</a></li>
                <li><a href="dosanddonts.php">DOs AND DONTs</a></li>
            </ul>
        </li>
        <li><a href="food.php"><span><i class="fa fa-picture-o"></i></span><p>FOOD AVAILABILITY</p></a></li>
        <li class="dropdown"><span><i class="fa fa-money"></i></span><p>DONATION</p>
            <ul>
                <li><a href="food_donate.php">DONATE FOOD</a></li>
                <li><a href="payment.php">DONATE MONEY</a></li>
            </ul>
        </li>
        <?php 
            session_start();
            if(isset($_SESSION['login_user'])){
                echo "<li><a href='facility_management.php'><span><i class='fa fa-cog'></i></span><p>FACILITY STORAGE</p></a></li>";
                echo "<li><a href='donations.php'><span><i class='fa fa-cog'></i></span><p>VIEW DONATIONS</p></a></li>";
            }
        ?>
        
        <li><a href="shelters.php"><span><i class="fa fa-cog"></i></span><p>RELIEF SHELTERS</p></a></li>
        <li><a href="updates.php"><span><i class="fa fa-cog"></i></span><p>UPDATES</p></a></li>
        <li class="dropdown"><span><i class="fa fa-cog"></i></span><p>FORECAST</p>
            <ul>
                <li><a href="forecast.php">WEATHER FORECAST</a></li>
                <li><a href="forecast_bulletin.php">FORECAST BULLETIN</a></li>
                <li><a href="warning_bulletin.php">WARNING BULLETIN</a></li>
            </ul>
        </li> 
    </ul>

    <div class="bottom">
        <a class="info-btn"><i class="fa fa-info"></i></a>
        <div class="info right">
            <h4>DID YOU KNOW?</h4>
            <p>There is a greater risk of spreading of epidemics after or during floods. Teses are equally dangerous as floods are. Special precautions should be taken for keeping yourself safe from diseases. <a href="survival_guidelines.php"> View Guidelines for more.</a></p>
            <a class="menu-back"><i class="fa fa-chevron-left"></i></a>
        </div>
    </div>
</nav>