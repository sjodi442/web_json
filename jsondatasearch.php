<?php
$link=mysqli_connect("localhost","root","","db_kelas");
$get = $_GET['teg'];
$query = "select * from tb_siswa where nama_siswa = '$get'";
$sql = mysqli_query($link, $query);
while($row=mysqli_fetch_assoc($sql)){
$emparray = array();
    $emparray[] = $row;
}
echo json_encode($emparray);
 ?>
