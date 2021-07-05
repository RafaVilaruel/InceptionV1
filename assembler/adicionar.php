<?php 
	

	if(isset($_POST['nome']) && empty($_POST['nome']) == false)
	{

		
		$nome = addslashes($_POST['nome']);
		$arquivo = $_FILES['arquivo'];
		$nomedoarquivo = $nome;

		move_uploaded_file($arquivo['tmp_name'], '../mycomputer/'.$nomedoarquivo);
		
	
	header("Location: uploaded.html");

	}
?>

<html>

<head>

<style type="text/css">
	body
{
	margin: 0;
	padding: 0;
	background: url(bg.jpg);
	background-size: cover;
	font-family: sans-serif;
}
.boxlogin
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 350px;
	height: 510px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left: calc(50% - 50px);
}
h2
{
	margin: 0;
	padding: 0 0 20px;
	color: #efed40;
	text-align: center;
}
.boxlogin p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.boxlogin input
{
	width: 100%;
	margin-bottom: 20px;
}
.boxlogin input[type="text"],
.boxlogin input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
::placeholder
{
	color: rgba(255,255,255,.5);
}
.boxlogin input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #ff267e;
	cursor: pointer;
	border-radius: 20px;
}
.boxlogin input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}
.boxlogin a
{
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}

</style>
	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
minimum-scale=1">



<title>Add a File to Inception!</title>



</head>


<body>
	
<div class="boxlogin">
	
	<h2>Add a File to Inception!</h2>

	<form method="POST" enctype="multipart/form-data">

		<p>Your File</p><br>
			<input type="file" name="arquivo" accept="media_type">
		<p>Name with a extension</p>
			<input type="text" name="nome" placeholder="File Name">			
				
			<input type="submit" name="" value="Upload File">
		
	</form>

</div>


</body>
	






</html>