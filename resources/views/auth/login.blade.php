<!DOCTYPE html>
<html>
<head>
	<title>Xiongnu | Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src=" {{ asset('img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('img/bg.svg') }}">
		</div>
		<div class="login-content">
			<form action="POST" action="">
			@csrf
				<img src="{{ asset('img/t.png') }}">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="email" name="email" class="input" :value="old('email')">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" name="contraseña" class="input">
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" value="OK">
            </form>
        </div>
    </div>
    <div class="footer">
        
    </div>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>