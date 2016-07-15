<?php
//settings
$cache_ext  = '.html'; //file extension
$cache_time     = 172800;  //Cache file expires afere these seconds (1 hour = 3600 sec)
$cache_folder   = 'cache/'; //folder to store Cache files
$ignore_pages   = array('', '');

$dynamic_url    = 'http://'.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; // requested dynamic page (full url)
$cache_file     = $cache_folder.md5($dynamic_url).$cache_ext; // construct a cache file
$ignore = (in_array($dynamic_url,$ignore_pages))?true:false; //check if url is in ignore list

if (!$ignore && file_exists($cache_file) && time() - $cache_time < filemtime($cache_file)) { //check Cache exist and it's not expired.
    ob_start('ob_gzhandler'); //Turn on output buffering, "ob_gzhandler" for the compressed page with gzip.
    readfile($cache_file); //read Cache file
    echo '<!-- cached page - '.date('l jS \of F Y h:i:s A', filemtime($cache_file)).', Page : '.$dynamic_url.' -->';
    ob_end_flush(); //Flush and turn off output buffering
    exit(); //no need to proceed further, exit the flow.
}
//Turn on output buffering with gzip compression.
ob_start('ob_gzhandler'); 
######## Webpage Content Starts Below #########
?>

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
                    <li>Help</li>
                </ul>
            </div>

            <div class="heading clearfix">
                <h2 class="left"><i class="fa fa-pie-chart"></i>EMERGENCY CONTACTS</h2>
                <h2 class="right"><i class="fa fa-cloud-download"></i><a style="text-decoration: none; color: white;" href="EM=mergency_Contacts.pdf">DOWNLOAD</a></h2>
            </div>

            <div class="tables clearfix">
                <table class="datatable adm-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>AUTHORITY</th>
                            <th>CITY</th>
                            <th>CONTACT</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <p>Ambulance</p>
                            </td>
                            <td><a href="#" class="group blue">Mumbai</a></td>
                            <td><span class="date">100</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p>Disaster Management</p>
                            </td>
                            <td><a href="#" class="group blue">India</a></td>
                            <td><span class="date">108</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p>Fire Brigade</p>
                            </td>
                            <td><a href="#" class="group blue">India</a></td>
                            <td><span class="date">101</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p>Police</p>
                            </td>
                            <td><a href="#" class="group blue">India</a></td>
                            <td><span class="date">100</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p>NDMA</p>
                            </td>
                            <td><a href="#" class="group blue">India</a></td>
                            <td><span class="date">011 1078</span></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
</body>
</html>

<?php
######## Webpage Content Ends here #########

if (!is_dir($cache_folder)) { //create a new folder if we need to
    mkdir($cache_folder);
}
if(!$ignore){
    $fp = fopen($cache_file, 'w');  //open file for writing
    fwrite($fp, ob_get_contents()); //write contents of the output buffer in Cache file
    fclose($fp); //Close file pointer
}
ob_end_flush(); //Flush and turn off output buffering

?>