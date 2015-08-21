<?php
//database settings
$connect = mysqli_connect("localhost", "root", "", "internprogtracker");

if($_SERVER['REQUEST_METHOD'] == "GET"){
	$result = mysqli_query($connect, "select * from student where studno = ".$_GET['studno']." and password = '".$_GET['password']."'");
	$data = array();

	while ($row = mysqli_fetch_array($result)) {
	  $data[] = $row;
	}

	if(count($data) > 0) {
		print json_encode($data);
	} else {
		http_response_code(404);
	}
}else if($_SERVER['REQUEST_METHOD'] == "POST") {
	$info = json_decode(file_get_contents("php://input"), true);
	$query = mysqli_query($connect,"INSERT into student values ('".$info['studno']."', '".$info['fname']."', '".$info['lname']."', '".$info['course']."', '".$info['college']."', '".$info['contactno']."', '".$info['email']
											."', '".$info['password']."', '".$info['compname']."', '".$info['startdate']."', '".$info['enddate']."', '".$info['hoursrequired']."')");
	$query = mysqli_query($connect,"INSERT into company values ('".$info['compname']."', '".$info['compadd']."', '".$info['deptass']."', '".$info['conperson']."', '".$info['cpcontactno']."', '".$info['cpemail']."')");
}else if($_SERVER['REQUEST_METHOD'] == "PUT") {
	$info = json_decode(file_get_contents("php://input"), true);
	$result = mysqli_query($connect, "UPDATE user_info set name='".$info['name']."', password='".$info['pass']."' where usernum='".$info['usernum']."'");
}
//$result = mysqli_query($connect, "select * from user_info where email = \"jeromellaguno@yahoo.com\" and password = \"asd\"");
//echo "select * from user_info where email = \"".$_GET['email']."\" and password = \"".$_GET['pass']."\"";
?>