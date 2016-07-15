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
                    <li>DONATIONS</li>
                </ul>
            </div>

            <div class="tables clearfix">
                <table class="datatable adm-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>NAME</th>
                            <th>ADDRESS</th>
                            <th>AMOUNT</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "dbconnect.php";

                            $sql= "SELECT CONCAT(`fname`, ' ', `lname`) as `name`, CONCAT(`address`, ', ', `city`, ', ', `pincode`) as `add`, `amount` FROM `donation` ORDER BY `id` DESC";
                            $result = mysql_query( $sql, $conn );
                            $row = mysql_fetch_assoc($result);
                            
                            echo "<tr>
                                <td></td>
                                <td>
                                    <p>".$row["name"]."</p>
                                </td>
                                <td>".$row["add"]."</td>
                                <td><span class='date'>".$row["amount"]."</span></td>
                                <td></td>
                                </tr>";

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
</body>
</html>
