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
                <h3>Weather Warning Bulletin</h3>
                <p><iframe src="http://imd.gov.in/section/nhac/dynamic/allindiasevere.pdf" style="width: 100%; height: 700px;"></iframe>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
</body>
</html>
