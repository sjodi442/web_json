<?php
$link=mysqli_connect("localhost","root","","db_kelas");
$query = "select * from tb_siswa";
$sql = mysqli_query($link, $query);
$emparray = array();
while($row=mysqli_fetch_assoc($sql)){
    $emparray[] = $row;
}
echo json_encode($emparray);
 ?>
