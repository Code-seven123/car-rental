<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

<style type="text/css">
	@font-face{
		font-family: "login";
		src: url("assets/login.ttf");
	}
	@font-face{
		font-family: "login-text";
		src: url("assets/login-text.ttf");
	}
	*{
		padding: 0;
		margin: 0;
	}
	.body{
		background-image: url('assets/bg.jpg');
		background-repeat: no-repeat;
		background-size: 100% 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100vw;
		height: 100vh;
	}
	.container{
		width: 40%;
		height: 50%;
		background: rgba(255, 105, 180, 0.42);
		border-radius: 16px;
		box-shadow: 0 4px 30px rgba(255, 105, 180, 0.1);
		background-filter: blur(3.6px);
		-webkit-background-filter: blur(3.6px);
		border: 1px solid rgba(255, 105, 180, 0.42);
		padding: 10px;
		overflow: hidden;
	}
	.container > div{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		margin: 1em;
	}
	.container h1{
		font-family: "login";
		margin-bottom: .5em;
	}
	.login {
		width: 80%;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	form > div{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		height: 1.6em;
		width: 100%;
		margin-bottom: 1em;
	}
	form div  input{
		border-radius: 19px;
		padding-left: 1em;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, .4);
		color: black;
		font-family: "logi";
		letter-spacing: 1px;
		border: 2px solid black;
	}
	form div  input::-webkit-input-placeholder{
		color: white;
	}
	form button{
		width: 100%;
		height: 100%;
		border-radius: 19px;
		font-family: "login";
	}
	form p{
		display: inline-block;
	}

</style>
</head>
<body>
	<div class="body">
		<div class="container">
			<div>
				<?php	
					if(!empty($_GET['error'])){
						echo "<p style='color: red'>
						Username atau Password salah
					</p>";
					}
				?>
				<div>
					<h1>Sign In</h1>
				</div>
				<div class="login">
					<form method="post" action="ceklogin.php">
						<div>
							<input id="user" name="user" type="text" placeholder="Username">
						</div>
						<div>
							<input id="pass" name="pass" type="password" placeholder="Password">
						</div>
						<div>
							<button type="submit">Login</button>
						</div>
						<p>
							Apakah kamu tidak memiliki akun? <a href="regis.php" class="login">Register</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function rolls(e) {
			location.href = e
		}

	</script>
</body>
</html>