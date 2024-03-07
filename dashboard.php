<?php 
include "conn.php";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			#border: 1px solid black;
		}
		@import url('https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap');

		*, *:after, *:before {
			box-sizing: border-box;
		}
		.button-wrapper{
		  margin-top: 18px;
		  display: flex;
		  flex-direction: column;

		}

		.btn {
		  border: none;
		  padding: 12px 24px;
		  border-radius: 24px;
		  font-size: 12px;
		  font-size: 0.8rem;  
		  letter-spacing: 2px;  
		  cursor: pointer;
		}

		.btn + .btn {
		  margin-left: 10px;
		}

		.outline {
		  background: transparent;
		  color: rgba(0, 0, 0, 0.9);
		  border: 1px solid rgba(0, 0, 0, 0.6);
		  transition: all .3s ease;
		  
		}

		.outline:hover{
		  transform: scale(1.125);
		  color: rgba(0, 0, 0, 0.9);
		  border-color: rgba(0, 0, 0, 0.9);
		  transition: all .3s ease;  
		}

		.fill {
		  background: rgba(0, 212, 255, 0.9);
		  color: rgba(255,255,255,0.95);
		  filter: drop-shadow(0);
		  font-weight: bold;
		  transition: all .3s ease; 
		}

		.fill:hover{
		  transform: scale(1.125);  
		  border-color: rgba(255, 255, 255, 0.9);
		  filter: drop-shadow(0 10px 5px rgba(0,0,0,0.125));
		  transition: all .3s ease;    
		}
		.list {
			font-family: "Lexend", sans-serif;
			line-height: 1.5;
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #393232;
		}

		.card img {
			max-width: 100%;
			display: block;
		}

		.card-list {
			width: 20em;
			gap: 1em;
			flex-basis: 20%;
		}

		.card {
			background-color: #FFF;
			box-shadow: 0 0 0 1px rgba(#000, .05), 0 20px 50px 0 rgba(#000, .1);
			border-radius: 15px;
			overflow: hidden;
			padding: 1.25rem;
			
			transition: .15s ease-in;
			width: 25
			&:hover, &:focus-within {
				box-shadow: 0 0 0 2px #16C79A, 0 10px 60px 0 rgba(#000, .1);
					transform: translatey(-5px);
			}
		}

		.card-image {
			border-radius: 10px;
			overflow: hidden;
		}

		.card-header {
			margin-top: 1.5rem;
			display: flex;
			align-items: center;
			flex-direction: column;
			justify-content: space-between;
			a {
				font-weight: 600;
				font-size: 1.375rem;
				line-height: 1.25;
				padding-right: 1rem;
				text-decoration: none;
				color: inherit;
				will-change: transform;
				&:after {
					content: "";
					position: absolute;
					left: 0;
					top: 0;
					right: 0;
					bottom: 0;
				}
			}
			
			
		}

		.icon-button {
			border: 0;
			background-color: #fff;
			border-radius: 50%;
			width: 2.5rem;
			height: 2.5rem;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-shrink: 0;
			font-size: 1.25rem;
			transition: .25s ease;
			box-shadow: 0 0 0 1px rgba(#000, .05), 0 3px 8px 0 rgba(#000, .15);
			z-index: 1;
			cursor: pointer;
			color: #565656;
			
			svg {
				width: 1em;
				height: 1em;
			}
			&:hover, &:focus {
				background-color: #EC4646;
				color: #FFF;
			}
		}

		.card-footer {
			margin-top: 1.25rem;
			border-top: 1px solid #ddd;
			padding-top: 1.25rem;
			display: flex;
			align-items: center;
			flex-wrap: wrap;
		}

		.card-meta {	
			display: flex;
			align-items: center;
			color: #787878;
			&:first-child:after {
				display: block;
				content: "";
				width: 4px;
				height: 4px;
				border-radius: 50%;
				background-color: currentcolor;
				margin-left: .75rem;
				margin-right: .75rem;
			}
			svg {
				flex-shrink: 0;
				width: 1em;
				height: 1em;
				margin-right: .25em;
			}
		}




		.container{
			width: 100vw;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
		}
		.head{
			height: 70vh;
			overflow: hidden;
			display: flex;
			justify-content: center;
			background-image: url('assets/bg-head.jpg');
			background-repeat: no-repeat;
			background-size: 100%;
		}
		.head > div{
			background-repeat: no-repeat;
			background-size: 100% 100%;
			width: 80vh;
		}
		.head > div > div{
			margin-right: 20%;
			margin-left: 20%;
			text-align: right;
			font-size: 1em;
			padding-top: 3em;
			height: 100%;
		}
		.head > div > div button{
			margin-top: 0.3em;
			width: 9em;
			height: 2em;
			background-color: skyblue;
			border: 2px solid black;
			border-radius: 12px;
		}
		.head > div > div > div{
			margin-top: 30%;
			display: flex;
			justify-content: end;
		}
		.head > div > div > div > ul{
			display: flex;
			justify-content: space-around;
			width: 5em;
		}
		li{
			list-style: none;
			width: 15px;
			height: 15px;
			border-radius: 100%;
			background-color: white;
			border: 2px solid black;
		}
		.head > div{
			height: 100%;
		}
		.sea{
			background-color: #836FFF;
			height: 25vh;
		}
		.list{
			background: rgb(0,212,255);
			display: flex;
		 	background: linear-gradient(45deg, rgba(0,212,255,1) 0%, rgba(11,3,45,1) 100%); 
		 	justify-content: flex-start; 
		 	flex-wrap: wrap;
			min-height: 80vh;
			padding: 1em;
			gap: 12px;
			justify-content: center;
		}
		nav{
			width: 100vw;
			height: 4em;
			display: flex;
			justify-content: space-between;
			background-color: black;
			position: sticky;
			top: 0;
			left: 0;
			color: white;
			z-index: 1;
		}
		nav > div{
			height: 100%;
			display: flex;
			align-items: center;
			flex: 2;
		}
		nav > div:nth-child(1){
			margin-left: 1em;
			letter-spacing: 4px;
		}
		nav > div:nth-child(2){
			justify-content: flex-end;
			margin-right: 4em;
		}
		nav > div:nth-child(2) button{
			height: 80%;
			width: 8em;
			background-color: rgba(249, 240, 122, .6);
			padding: 0.2em;
			border-radius: 10px;
			border: 2px solid #9F70FD;
			transition: all .4s;
		}
		nav > div:nth-child(2) button:hover{
			transform: scale(0.8);
			box-shadow: 0 0 1em #9F70FD;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="head">
			<div style="background-image: url('assets/gam1.jpg');" id="box">
				<div>
					<h1 id="title">Amarok V6</h1>
					<p id="p">Tough Comes From within</p>
					<button id="btn">Find out more</button>
					<div>
						<ul>
							<li onclick="headAction('f')"></li>
							<li onclick="headAction('s')"></li>
							<li onclick="headAction('t')"></li>
						</ul>
					</div>
				</div>	
			</div>	
		</div>
		<nav>
			<div>
				<h1>RENTAL</h1>
			</div>
			<div>
				<div>
					
				</div>
				<div>
					<button onclick="location.href = 'logout.php'">logout</button>
				</div>
			</div>
		</nav>
		<div class="list">
			<?php 
			$sql = "select * from rental_mobil_mobil";
			$que = mysqli_query($db_link, $sql);
			$i = 0;
			while($data = mysqli_fetch_array($que))  { ?>
			<div class="card-list">
				<article class="card">
					<div class="card-header">
						<table>
							<tr>
								<td>MERK</td>
								<td> : </td>
								<td><?= $data['mobil_merk']?></td>
							</tr>
							<tr>
								<td>PLAT</td>
								<td> : </td>
								<td><?= $data['mobil_plat']?></td>
							</tr>
							<tr>
								<td>warna</td>
								<td> : </td>
								<td><?= $data['mobil_warna']?></td>
							</tr>
							<tr>
								<td>tahun</td>
								<td> : </td>
								<td><?= $data['mobil_tahun']?></td>
							</tr>
						</table>
					</div>
					<div class="card-footer">
						<div class="button-wrapper">
							<a class="btn fill" href="cekkostumer.php?id=<?= $data['mobil_id']?>">RENT NOW</a>
						</div>
					</div>
				</article>
			</div>
			<?php $i++; } ?>
		</div>
	</div>


	<div class="window">
		
	</div>
	<script type="text/javascript">
		function headAction(e) {
			const box = document.getElementById('box')
			const title = document.getElementById('title')
			const p = document.getElementById('p')
			const btn = document.getElementById('btn')

			if (e == "f") {
				box.style.backgroundImage = "url('assets/gam1.jpg')"
				title.innerHTML = "Amarok V6"
			} else if (e == "s") {
				box.style.backgroundImage = "url('assets/gam2.jpg')"
				title.innerHTML = "Amarok V5"
			} else if (e == "t") {
				box.style.backgroundImage = "url('assets/gam3.jpg')"
				title.innerHTML = "Amarok V4"
			} else {

			}
		}
	</script>
</body>
</html>