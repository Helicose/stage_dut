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
    $columns = array('uid', 'login', 'nbJobs', 'pendingJobs', 'runningJobs', 'errorJobs');
    $sColor = '"#2222aa"';
    /* DB table to use */
    $sTable = "view_users";

	include "sqlrequest-sigma.php";

?>
