<?php
    $dbhost='localhost'; //or "localhost" Host name 
    $dbusername='root'; // Mysql username 
    $dbpassword=''; // Mysql password 
    $dbname='sig_inventory'; // Database name
    //dbsettings
    
    $conn=false;
    global $message;
    
    function executeQuery($query)
    {
        global $conn,$dbserver,$dbname,$dbpassword,$dbusername;
        if (!($conn = @mysql_connect ($dbhost,$dbusername,$dbpassword)))
             $message="Cannot connect to server";
        if (!@mysql_select_db ($dbname, $conn))
             $message="Cannot select database";
    
        $result=mysql_query($query,$conn);
        if(!$result)
            $message="Error while executing query.<br/>Mysql Error: ".mysql_error();
        else
            return $result;
    
    }
    function closedb()
    {
        global $conn;
        if(!$conn)
        mysql_close($conn);
    }
?>