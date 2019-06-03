 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","market");
$sorgu=mysqli_query($baglanti,"SELECT adi,kar FROM urunkg");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>