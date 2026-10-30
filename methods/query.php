<?php
include_once "db.php";

function getFloor($floor){
	$result = executeQuery("SELECT * FROM data WHERE floor = '$floor' ORDER BY timestamp DESC");
	$list = array();
	while($row = mysql_fetch_assoc($result)){
		$list[] = $row;
	}
	closedb();
	return $list;
}
function search($searchkey){
	$result = executeQuery("SELECT * FROM data WHERE
			       username_owner LIKE '%$searchkey%'
			       OR department_location LIKE '%$searchkey%'
			       OR computername LIKE '%$searchkey%'");
	$list = array();
	while($row = mysql_fetch_assoc($result)){
		$list[] = $row;
	}
	closedb();
	return $list;
}
if(isset($_POST['dataID'])){
	$id = $_POST['dataID'];
	$result = executeQuery("SELECT * FROM data WHERE ID = '$id'");
	$list = array();
	while($row = mysql_fetch_assoc($result)){
		$list[] = $row;
	}
	closedb();
	echo json_encode($list);
	exit();
}
if(isset($_POST['print_data'])){
	$floor = " ";
	if(isset($_POST['print_1st'])&&isset($_POST['print_2nd'])&&isset($_POST['print_3rd']))
	    $floor = " ";
	else if(isset($_POST['print_1st'])&&isset($_POST['print_2nd']))
	    $floor = " WHERE floor = '1' AND floor = '2' ";
	else if(isset($_POST['print_1st'])&&isset($_POST['print_3rd']))
	    $floor = " WHERE floor = '1' AND floor = '3' ";
	else if(isset($_POST['print_2nd'])&&isset($_POST['print_3rd']))
	    $floor = " WHERE floor = '2' AND floor = '3' ";
	else if(isset($_POST['print_1st']))
	    $floor = " WHERE floor = '1' ";
	else if(isset($_POST['print_2nd']))
	    $floor = " WHERE floor = '2' ";
	else if(isset($_POST['print_3rd']))
	    $floor = " WHERE floor = '3' ";
	
	$sql_print = "SELECT * FROM data" . $floor . "ORDER BY floor ASC";
	$result = executeQuery($sql_print);
	$data = array();
	while($row = mysql_fetch_assoc($result)){
		$data[] = $row;
	}
	$num = mysql_num_rows($result);
	closedb();
    }
?>