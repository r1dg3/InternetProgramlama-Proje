<?php
session_start();
if (isset($_SESSION['username']) ) {
    if ($_SESSION['auth'] == 0) {
        header('location:root.php');
    }elseif ($_SESSION['auth'] == 1) {
        header('location:user.php');
    }

}
?>
<!DOCTYPE html>
<html lang="">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="Gazi.png" type="image/x-icon">
	<title>Gazi Üniversitesi Proje Seçme Sistemi</title>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		/* Ekranı ikiye böler */
		.split {
		
		width: 50%;
		position: fixed;
		z-index: 1;
		top: 0;
		overflow-x: hidden;
		}

		/* Ekranın solunun kontrolü */
		.left {
		left: 0;
		
		}

		/* Ekranın sağının kontrolü the right side */
		.right {
		right: 0;
		
		}
	</style>
</head>
<body class="container">
	<div class="split left">    
	<img src="Gazi.png" id="Gazipng1" width="150" height="150" style="margin-left:300px; margin-top:80px; bottom:520px; width:150px; height:150px; border:none;">
		<div class="row">
			<div class="col-sm-12 my-auto" >
				<div class="w-50 mx-auto" style="margin-left:500px; margin-top:30px; height:150px; border:none; "><h2 style="margin-left:65px;">Gazi Üniversitesi</h2><h2 style="margin-left:45px;">Proje Seçme Sistemi</h2></div>
				<form class="form-horizontal card card-block w-50 mx-auto bg-light" action="login.php" method="post" style="margin-top:-40px;">

					<div class="form-group">
						<label for="username" class="col-sm-4 control-label">Kullanıcı Adı</label>
						<div class="col-sm-10">
							<input type="text" name="username" class="form-control" id="username" placeholder="Kullanıcı Adı" required>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-sm-4 control-label">Şifre</label>
						<div class="col-sm-10">
							<input type="password" name="password" class="form-control" id="password" placeholder="Şifre" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Giriş Yap</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	<div class="split right">
		<img src="gazi.jpg" style="max-width: 100%; height: auto;">
	</div>
</body>
</html>


