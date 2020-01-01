<!DOCTYPE html>
<html>
<head>
	<title>VIRADA DE ANO <?= date('Y')?></title>
	<style type="text/css">
		/*DIGITAL CLOCK FONT*/
		@font-face{
		 font-family:'digital-7';
		 src: url('digital-7.ttf');
		}
		.geral{
			/*background-color: #03adfc;*/
			background-color: 	#000000;
		}
		.conteudo {
			font-size: 100px;
			color: #fff;
			font-family: 'digital-7', sans-serif;
			text-align: center;
			vertical-align: middle;
			padding: 10%;
		}
		.hora {
			font-size: 100px;
			color: #ebeb34;
			font-family: 'digital-7', sans-serif;
			text-align: center;
			vertical-align: middle;
			font-weight: 800;
		}
		.miles_secons {
			font-size: 40px;
			color: #ebeb34;
			font-family: 'digital-7', sans-serif;
			text-align: center;
			vertical-align: middle;
			font-weight: 800;
		}
		.saudacao {
			font-size: 157px;
			color: #ff7878;
			font-family: 'digital-7', sans-serif;
			text-align: center;
			vertical-align: middle;
			font-weight: 800;
			padding: 0px;
		}

	</style>
</head>
<body class="geral" onload="viradaano()">
<script type="text/javascript">

	function addZero(i) {
	  if (i < 10) {
	    i = "0" + i;
	  }
	  return i;
	}
	let minuto = null;
	function viradaano () {	
		let data = new Date();
		let conteudo = null;
		let hora = addZero(data.getHours());
		minuto =  addZero(data.getMinutes());
		let segundos = addZero(data.getSeconds());
		let miless = data.getMilliseconds();
		let dia = data.getDate();
		let mes = data.getMonth() + 1;
		let ano = data.getFullYear();
		//conteudo.innerHTML.

		let horas_gerais = hora+':'+minuto+':'+segundos+':'+'<span class="miles_secons">'+miless+'<span>';
		let datas_gerais = dia+' - '+mes+' - '+ano;

		document.getElementById('data').innerHTML = datas_gerais+'<br><br>';
		document.getElementById('hora').innerHTML = horas_gerais;
		setTimeout('viradaano()', 1);

		if(minuto == '00') {
			document.getElementById('final').innerHTML = '<span class="saudacao"><br><br>Feliz 2020 !!<br><small style="font-family: Arial; font-size: 30px;">Visão Transbordante</small></span>';
		}
	}
</script>
<div class="conteudo" id="conteudo">
	<span id="data" class="data"></span>
	<span id="hora" class="hora"></span>
	<span id="final" class="final"></span>
</div>
</body>
</html>