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
                    <li>TABLES</li>
                </ul>
                <a href="#" class="btn right"><i class="fa fa-caret-square-o-left"></i>EXPORT</a>
            </div>

            <div class="alerts">
                <div class="success"><p><strong>SUCCESS!</strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p></div>
                <div class="error"><p><strong>ERROR!</strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p></div>
                <div class="info"><p><strong>INFO!</strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p></div>
            </div>

            <form id="file-upload" class="upload" method="post" action="upload.php" enctype="multipart/form-data">
                <h3>FIELDSET TITLE</h3>
                <div class="inner clearfix">
                    <fieldset class="error">
                        <label for="field1">TEXT INPUT</label>
                        <div class="field">
                            <input type="text" placeholder="Placeholder" id="field1">
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="error-alert">
                        <label for="field2">DROPDOWN</label>
                        <div class="field">
                            <select class="chosen-select" data-placeholder="Placeholder" id="field2">
                                <option value="0"></option>
                                <option value="1">Lorem</option>
                                <option value="2">Ipsum</option>
                                <option value="3">Dolor</option>
                            </select>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="info-alert">
                        <label for="field3">DATEPICKER</label>
                        <div class="field">
                            <div class="datepicker">
                                <input type="text" placeholder="Placeholder" id="field3">
                                <span class="cal-icon"><i class="fa fa-calendar-o"></i></span>
                            </div>
                            <span class="error-alert">Please enter valid value</span>
                            <span class="info-alert">Leave blank to retain current password</span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field4">CHECKBOX</label>
                        <div class="field">
                            <input type="checkbox" data-label="OPTION 1">
                            <input type="checkbox" data-label="OPTION 2" checked>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field5">RADIO BTN</label>
                        <div class="field">
                            <input type="radio" data-label="OPTION 1" name="radio-btn">
                            <input type="radio" data-label="OPTION 2" name="radio-btn" checked>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field6">FILE FIELD</label>
                        <div class="field clearfix">
                            <div id="drop">
                                <p><i class="fa fa-chevron-down"></i>Drag and drop the file here to upload it</p>
                            </div>
                            <input type="file" name="upl" id="file-inp" class="inp-drag">
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field7">PROFILE IMAGE</label>
                        <div class="field clearfix">
                            <div id="profile-preview">
                                <img src="images/avatar1.jpg" alt="img">
                            </div>
                            <input type="checkbox" data-label="Delete uploaded file?">
                            <input type="file" id="profile-inp">
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field8">SLIDER</label>
                        <div class="field">
                            <div id="inp-range" data-property="{startAt:500, grid:10, maxVal:1000}"></div>
                            <input type="hidden">
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field9">SWITCH</label>
                        <div class="field switch">
                            <input type="checkbox" data-label="" checked>
                            <input type="checkbox" data-label="">
                        </div>
                    </fieldset>
                    <fieldset class="info-alert">
                        <label for="field10">INPUT TAGS</label>
                        <div class="field">
                            <input type="text" placeholder="Placeholder" id="field10" class="tags" data-role="tagsinput">
                            <span class="error-alert">Please enter valid value</span>
                            <span class="info-alert">Press comma or enter to create a tag</span>
                        </div>
                    </fieldset>
                    <fieldset class="disabled">
                        <label for="field11">DISABLED</label>
                        <div class="field">
                            <input type="text" placeholder="Placeholder" id="field11" disabled>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset class="prefix">
                        <label for="field12">PRE-TEXT</label>
                        <div class="field">
                            <table>
                                <tr>
                                    <td>blog /</td>
                                    <td><input type="text" placeholder="Placeholder" id="field12"></td>
                                </tr>
                            </table>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="field13">TEXTAREA</label>
                        <div class="field">
                            <textarea placeholder="Placeholder" id="field13"></textarea>
                            <span class="error-alert">Please enter valid value</span>
                        </div>
                    </fieldset>
                    <input type="submit" value="SUBMIT" class="right">
                    <a href="#" class="cancel right">CANCEL</a>
                </div>
            </form>

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