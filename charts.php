<?php include('inc/head.php'); ?>

<body>

    <?php include('inc/header.php'); ?>

    <div id="wrapper" class="clearfix expand">

        <?php include('inc/menu.php'); ?>

        <div id="content" class="right">

            <div class="breadcrumbs clearfix">
                <ul class="breadcrumbs left">
                    <li><a href="#">ID STUDIO CMS</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>CHARTS</li>
                </ul>
            </div>

            <div class="charts charts-gallery">
                <h3>LINE CHARTS</h3>
                <div class="group clearfix">
                    <div class="ct-chart" id="chart-line"></div>
                    <div class="ct-chart" id="chart-line2"></div>
                </div>
                <h3>BAR CHARTS</h3>
                <div class="group clearfix">
                    <div class="ct-chart" id="chart-bar"></div>
                    <div class="ct-chart" id="chart-stacked"></div>
                </div>
                <h3>PIE CHARTS</h3>
                <div class="group clearfix">
                    <div class="ct-chart" id="chart-pie"></div>
                    <div class="ct-chart" id="chart-pie-explode"></div>
                </div>
            </div>

        </div>

        <footer>     
            <div class="container">
                <p>MADE WITH <i class="fa fa-heart"></i> IN LONDON</p>
                <a href="http://www.netdreams.co.uk/">WEB AGENCY LONDON</a>
            </div>
        </footer>

    </div>

    <?php include('inc/footer.php'); ?>

</body>
</html>