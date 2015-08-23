<?php
//database settings
$connect = mysqli_connect("localhost", "root", "", "internprogtracker");

if($_SERVER['REQUEST_METHOD'] == "GET"){
	$result = mysqli_query($connect, "select a.*, b.* from student a, company b where a.studno = ".$_GET['studno']." and a.compname = b.compname");
	$data = array();

	while ($row = mysqli_fetch_array($result)) {
	  $data[] = $row;
	}

	if(count($data) > 0) {
		print json_encode($data);
	} else {
		http_response_code(404);
	}
}else if($_SERVER['REQUEST_METHOD'] == "PUT") {
	$info = json_decode(file_get_contents("php://input"), true);
	$result = mysqli_query($connect, "UPDATE user_info set name='".$info['name']."', password='".$info['pass']."' where usernum='".$info['usernum']."'");
}
?>