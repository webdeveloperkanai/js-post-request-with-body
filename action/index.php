<?php 
$jsonData = json_decode(file_get_contents("php://input"),1);
extract($jsonData); 
// then handle it like - 
if(isset($jsonData['get_blocks'])) {
    
    $q = $con->query("SELECT * FROM `municipalities` WHERE `district`='$district' order by municipality asc "); 
    while($data = $q->fetch_array()) {
        $val = $data['municipality'];
        echo "<option value='$val'>$val</option>";
    }
}
