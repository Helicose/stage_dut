<?php
    /*
     * Script:    DataTables server-side script for PHP and MySQL
     * Copyright: 2010 - Allan Jardine, 2012 - Chris Wright
     * License:   GPL v2 or BSD (3-point)
     */
     
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Easy set variables
     */
     
    /* Array of database columns which should be read and sent back to DataTables. Use a space where
     * you want to insert a non-database field (for example a counter or static image)
     */
    $columns = array('login', 'rights', 'fname', 'lname', 'email', 'nbJobs', 'pendingJobs', 'runningJobs', 'errorJobs', 'usedCpuTime');

    /* DB table to use */

    $sTable = "view_users";
//	$tag = $_GET['tag'];
	include "sqlrequest.php";

?>
