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
                    <li>DASHBOARD</li>
                </ul>
            </div>

            <div class="circle-stats">
                <div class="fake-table">
                    <div class="fake-table-cell">
                        <div class="circle red">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter">231</p>
                                    <span>USERS</span>
                                </div>
                            </div>
                        </div>
                        <div class="circle yellow">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <div class="bottom"><p>Emergency Contacts</p></div>
                                    <span>COMMENTS</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="circle blue">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter">79</p>
                                    <span>USERS</span>
                                </div>
                            </div>
                        </div>
                        <div class="circle green">
                            <div class="fake-table">
                                <div class="fake-table-cell">
                                    <p class="counter">23</p>
                                    <span>ORDERS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="charts">
                <div class="heading clearfix">
                    <h2 class="left"><i class="fa fa-pie-chart"></i>CHARTS</h2>
                    <select class="chart-select" data-placeholder="SELECT CHART" style="width: 175px">
                        <option value=""></option>
                        <option value="chart-line">LINE CHART</option>
                        <option value="chart-pie">PIE CHART</option>
                        <option value="chart-bar">BAR CHART</option>
                        <option value="chart-stacked">STACKED CHART</option>
                    </select>
                </div>

                <div class="chart">
                    <div class="ct-chart" id="chart-line"></div>
                </div>
            </div>

            <div class="users">                
                <div class="clearfix">
                    <div class="left-part left">
                        <div class="heading clearfix">
                            <h2 class="left"><i class="fa fa-user"></i>USERS</h2>
                            <select class="chosen-select" style="width: 175px">
                                <option value="1">LOREM</option>
                                <option value="2">IPSUM</option>
                            </select>
                        </div>
                        <table class="adm-table">
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="images/avatar2.jpg" alt="img" class="avatar">
                                    <p>KATE DOE<br><span>LONDON, ENGLAND</span></p>
                                </td>
                                <td><span class="date">01/01/2014</span></td>
                                <td>
                                    <a href="#" class="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <img src="images/avatar2.jpg" alt="img" class="avatar">
                                    <p>KATE DOE<br><span>LONDON, ENGLAND</span></p>
                                </td>
                                <td><span class="date">01/01/2014</span></td>
                                <td>
                                    <a href="#" class="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <img src="images/avatar2.jpg" alt="img" class="avatar">
                                    <p>KATE DOE<br><span>LONDON, ENGLAND</span></p>
                                </td>
                                <td><span class="date">01/01/2014</span></td>
                                <td>
                                    <a href="#" class="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <img src="images/avatar2.jpg" alt="img" class="avatar">
                                    <p>KATE DOE<br><span>LONDON, ENGLAND</span></p>
                                </td>
                                <td><span class="date">01/01/2014</span></td>
                                <td>
                                    <a href="#" class="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <img src="images/avatar2.jpg" alt="img" class="avatar">
                                    <p>KATE DOE<br><span>LONDON, ENGLAND</span></p>
                                </td>
                                <td><span class="date">01/01/2014</span></td>
                                <td>
                                    <a href="#" class="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="right-part right">
                        <div class="heading">
                            <h2><i class="fa fa-comments"></i>COMMENTS APPROVAL</h2>
                        </div>
                        <div class="comments-approval">
                            <ul class="bxslider">
                                <li>
                                    <div class="author clearfix">
                                        <p class="left">JOHN DOE<br><span>01/01/2014 12:00:00</span></p>
                                        <div class="right"><a href="#" class="approve"><i class="fa fa-check"></i></a><a href="#" class="delete"><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                </li>
                                <li>
                                    <div class="author clearfix">
                                        <p class="left">JOHN DOE<br><span>01/01/2014 12:00:00</span></p>
                                        <div class="right"><a href="#" class="approve"><i class="fa fa-check"></i></a><a href="#" class="delete"><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                </li>
                                <li>
                                    <div class="author clearfix">
                                        <p class="left">JOHN DOE<br><span>01/01/2014 12:00:00</span></p>
                                        <div class="right"><a href="#" class="approve"><i class="fa fa-check"></i></a><a href="#" class="delete"><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                </li>
                                <li>
                                    <div class="author clearfix">
                                        <p class="left">JOHN DOE<br><span>01/01/2014 12:00:00</span></p>
                                        <div class="right"><a href="#" class="approve"><i class="fa fa-check"></i></a><a href="#" class="delete"><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                </li>
                                <li>
                                    <div class="author clearfix">
                                        <p class="left">JOHN DOE<br><span>01/01/2014 12:00:00</span></p>
                                        <div class="right"><a href="#" class="approve"><i class="fa fa-check"></i></a><a href="#" class="delete"><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                </li>
                            </ul>
                        </div>
                    </div>
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