<! DOCTYPE html>
<head>

<link rel="stylesheet" href="stil.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>


	<script>
		$(document).ready(function(){
			showGraph();
		});
		function showGraph(){
			$.post("gidakontrol.php",
			function(data){
				console.log(data);
				var adi=[];
				var satis_adet=[];
				for (var i in data){
					adi.push(data[i].adi);
					satis_adet.push(data[i].satis_adet);
				
				};
				var chartdata={
					labels:adi,
					
					datasets:[
					{
					label:'Gıda Ürünleri Satış Adetleri(kg)',
					data:satis_adet,
					backgroundColor:[
					
					'#e8491d',
					'#e8491d',
					'#e8491d',
					'#e8491d',
					'#e8491d',
					'#e8491d',	
					'#e8491d',
					'#e8491d',
					'#e8491d',
					'#e8491d'
					
					
					
					
					]
					}]
				};
			var cnv=$("#myChart");
			var barGraph=new Chart(cnv,{
				type:'bar',
				data:chartdata
			});
			});
		};
	</script>	

<style>
	#kanvas{
	
	width:800px;
	height:300px;
	}
</style>


</head>
<body>

<header>
	<div class="container">
	<h1><span class="turuncu">MİGROS</span></h1>
	<nav>
	<ul>
	<li><a href="anasayfa.php">Ana Sayfa</a></li>
	<li><a href="subetoplam.php">Toplam Gelirler</a></li>
	<li><a href="turlertoplam.php">Ürün Türü Geliri</a></li>
	<li><a href="ilceurungelir.php">Şube Gelir</a></li>
	<li><a href="subesatis.php">Şube Satış</a></li>
	</ul>
	</nav>
	</div>
</header>
<div>
	 <ul class="solListe">
	 <li><a href="meyve.php">Meyve,Sebze</a></li>
	 <li><a href="et.php">Et,Balık</a></li>
	 <li><a href="sut.php">Süt Ürünleri</a></li>
	 <li><a href="sekerleme.php">Şekerleme</a></li>
	 <li><a href="gida.php">Gıda</a></li>
	 <li><a href="#">Deterjan,Temizlik</a></li>
	 <li><a href="#">Kozmetik</a></li>
	 <li><a href="#">Bebek,Oyuncak</a></li>
	 <li><a href="#">Kahvaltılık</a></li>
	 <li><a href="#">Ev Ürünleri</a></li>
 </ul>
</div>
<h1 style="margin-left:650px;color:#FF8C00">Türlere Göre Satış Dağılımı</h1>
<div id="kanvas" style="margin-left:400px">
<canvas id="myChart"></canvas>
</div>


<footer>
	<p>MİGROS, Copyright © 2019</p>
</footer>


</body>
</html>