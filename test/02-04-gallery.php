<?php include('inc/head.php'); ?>

<body>

    <?php include('inc/header.php'); ?>

    <div id="wrapper" class="clearfix expand">

        <?php include('inc/menu.php'); ?>

        <div id="content" class="right gallery eqh">

            <div class="breadcrumbs clearfix">
                <ul class="breadcrumbs left">
                    <li><a href="#">ID STUDIO CMS</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>TABLES</li>
                </ul>
                <a href="#" class="btn right"><i class="fa fa-caret-square-o-left"></i>EXPORT</a>
            </div>

            <div class="inner">
                <form id="gallery-upload" class="upload" method="post" action="upload.php" enctype="multipart/form-data">
                    <div class="drop-nest">
                        <div id="drop">
                            <p><i class="fa fa-chevron-down"></i>DROP IMAGES HERE TO UPLOAD THEM</p>
                        </div>
                    </div>
                    <div id="images" class="clearfix">
                    </div>
                    <input type="file" name="upl" id="gallery-inp" multiple>
                </form>
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