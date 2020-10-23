<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.box{

			height: 500px;
			background-image: url(img/cart.png);
			background-size: 100% 100%;
			padding-top: 60px;
			padding-left: 80px;
	    }
	    h1{
			font-family: gilroy;
			font-weight: bold;
			font-size: 34px;
			color: #656565;

		}
		.btn{
           width: 260px;
           padding-top: 12px;
           padding-bottom: 12px;
           background-color: #DAC3AB;
           border-radius: 500px;
           border: 5px;
           color: white;
           font-family: gilroy;
		   font-weight: medium;
		   font-size: 20px;
		}
	</style>
</head>
<body>
    <div class="box col-4 mx-auto">
    	<h1 class="ml-1">Добавление товара</h1>
    	<form method="GET" action="insert.php">
    		<input type="" name="name" class="col-10 mt-5" class="form-control" placeholder="Название">
    		<input type="" name="text" class="col-10 mt-3" class="form-control" placeholder="Описание">
    		<input type="" name="img" class="col-10 mt-3" class="form-control" placeholder="Картинка">
    		<input type="" name="price" class="col-10 mt-3" class="form-control" placeholder="Цена">
    		<button class="mt-5 btn ml-5">Добавить</button>
    	</form>
    </div>
</body>
</html>