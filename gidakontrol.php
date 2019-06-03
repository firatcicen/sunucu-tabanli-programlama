 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","market");
$sorgu=mysqli_query($baglanti,"SELECT adi,satis_adet FROM gida");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>