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
                    <li><a href="#">Awareness</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Survival Guidelines</li>
                </ul>
            </div>

            <div class="charts-gallery">
                <?php
                    include "dbconnect.php";

                    $sql = "SELECT `id`, `time`, `location`, `title`, `message` FROM updates ORDER BY id DESC";
                    $result = mysql_query($sql,$conn);

                    while($row = mysql_fetch_assoc($result)){
                    echo"<h3>". $row["title"] ."</h3>". $row["time"] ." - ". $row["location"] ."
                        <p>". $row["message"] ."</p><hr>";
                    }
                ?>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
</body>
</html>