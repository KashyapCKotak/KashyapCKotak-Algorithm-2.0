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
                    <li>Food Donation</li>
                </ul>
            </div>

            <form id="file-upload" class="upload" method="post" action="" enctype="multipart/form-data">
                <h3>FOOD DONATION FORM</h3>
                <div class="inner clearfix">
                    <fieldset class="error">
                        <label for="field1">FULL NAME</label>
                        <div class="field">
                            <input type="text" placeholder="FULL NAME" name="name" id="name">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="prefix">
                        <label for="field2">CONTACT</label>
                        <div class="field">
                            <table>
                                <tr>
                                    <td>+ 91</td>
                                    <td><input type="text" pattern="[0-9]*" id="contact" name="contact"></td>
                                </tr>
                            </table>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field3">DETAILS</label>
                        <div class="field">
                            <textarea placeholder="Placeholder" id="field13" name="details"></textarea>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field4">Quantity (in kgs)</label>
                        <div class="field">
                            <div id="inp-range" data-property="{startAt:50, grid:10, maxVal:1000}" name="quantity"></div>
                            <input type="hidden">
                        </div>
                    </fieldset>
                    <input type="submit" value="SUBMIT" class="right" />
                    <input type="reset" value="RESET" class="right" />
                </div>
            </form>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
</body>
</html>