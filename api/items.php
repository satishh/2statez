<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "2statez");
if($_REQUEST['option'] == 'get'){
$result = $conn->query("SELECT * FROM vegetables");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
}
if($_REQUEST['option'] == 'post'){
  echo "testing...";
  echo $_REQUEST['id'];
  echo $_REQUEST['name'];
}
?>
