<?php 
$db = mysqli_connect("localhost","root","","hw");
function  query($qu) {
    global $db;
    $que = mysqli_query($db,$qu);
    $datas = [];
    while($data = mysqli_fetch_assoc($que)) {
        $datas[] = $data;
    }
    return $datas;
}