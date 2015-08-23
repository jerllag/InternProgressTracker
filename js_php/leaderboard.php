<?php
//database settings
$connect = mysqli_connect("localhost", "root", "", "internprogtracker");

if($_SERVER['REQUEST_METHOD'] == "GET"){
	$result = mysqli_query($connect, "select a.fname, a.lname, a.compname, (a.hoursdone*100/b.hoursrequired) from student a left join student b on a.studno = b.studno order by 4 desc");
	$data = array();

	while ($row = mysqli_fetch_array($result)) {
	  $data[] = $row;
	}

	if(count($data) > 0) {
		print json_encode($data);
	} else {
		http_response_code(404);
	}
}