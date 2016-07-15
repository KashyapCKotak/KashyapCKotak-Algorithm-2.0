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
                    <li>Forecast</li>
                </ul>
            </div>

            <div class="charts-gallery">
                <h3>Weather Forecast</h3>
                <p><a href="http://www.accuweather.com/en/us/new-york-ny/10007/current-weather/349727" class="aw-widget-legal">
                <!--
                By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
                -->
                </a><div id="awtd1457011714105" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awtd1457011714105" data-editlocation="true"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
</body>
</html>