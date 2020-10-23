<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.bg-img{
			background-image: url(img/back.png);
			background-size: 100% 100%;
			width: 1440px;
			height: 620px;
            padding-top: 200px;
            padding-left: 110px;
            margin-top: 80px;

		}
		.text{
			font-family: gilroy;
			font-size: 18px;
			color: #787878;
		}
		.text1{
			font-family: gilroy;
			font-size: 14px;
			color: #787878;
		}
		.text2{
			font-family: gilroy;
			font-size: 20px;
			color: #787878;
			margin-top: 10px;
			margin-left: 60%;
		}
		h1{
			font-family: gilroy;
			font-weight: bold;
			font-size: 52px;
			color: #656565;
		}
		h3{
			font-family: gilroy;
			font-weight: medium;
			font-size: 24px;
			color: #656565;
		}
		body{
			padding-left: 100px;
			
		}
		a{
			color: white;
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
		.header{
			height: 80px;
			position: absolute;
			top: 0%;
		}
		.logo{
			width: 150px;
			margin-top: 25px;
			margin-left: 130px;
		}
		.catalog{
			margin-top: 60px;
		}
		.cart{
			background-image: url(img/cart.png);
			background-size: 100% 100%;
			padding-top: 50px;
			padding-left: 50px;
		}
	</style>
</head>
<body class="pb-5">
    <?php
        $connect = mysqli_connect("127.0.0.1","root","","myProject");

        $text_query = "SELECT * FROM admin";
		$query = mysqli_query($connect,$text_query);  
    ?>
    <!--header-->
    <div class="header">
    	<img src="img/logo.png" class="logo">
    </div>
    <!--1 page-->
    <div class="bg-img">
    	<div class="col-7">
    		<h1>ИНТЕРНЕТ МАГАЗИН</h1>
    	    <p class="text col-7 p-0">Уютные вещи, которыми я пользуюсь каждый день, сидя дома на дистанционке</p>
    	    <button class="btn mt-5"><a href="admin.php">Добавить товар</a></button>
    	</div>
    	
    </div>
    <!--catalog-->
    <div class="col-8 mx-auto catalog">
    	<h1 class="text-center">Каталог</h1>
    	<div class="col-12 d-flex mt-5">
    		<div class="col-4 cart" style="height: 400px;">
    			<h3>
		    		<?php
		    		    $result = $query->fetch_assoc();
		    		    echo $result["name"];  
		    		?>
		    	</h3>
		    	<p class="text1">
		    		<?php
		    		    
		    		    echo $result["text"];  
		    		?>
		    	</p>
		    	<?php        
		            echo "<img class='w-50' src='".$result["img"]."'>";
		            if ($result["price"]!='') {
		    		    # code...
		    		    echo '<hr>';
		    		}
		        ?>
		        
		        <p class="text2">
		    		<?php
		    		    
		    		    echo $result["price"];  
		    		    if ($result["price"]!='') {
		    		    	# code...
		    		    	echo '&#8381';
		    		    }
		    		?>

		    		
		    	</p>
    		</div>
    		<div class="col-4 cart" style="height: 400px;">
    			<h3>
		    		<?php
		    		    $result = $query->fetch_assoc();
		    		    echo $result["name"];  
		    		?>
		    	</h3>
		    	<p class="text1">
		    		<?php
		    		    
		    		    echo $result["text"];  
		    		?>
		    	</p>
		    	<?php        
		            echo "<img class='w-75' src='".$result["img"]."'>";
		            if ($result["price"]!='') {
		    		    # code...
		    		    echo '<hr>';
		    		}
		        ?>
		  
		        <p class="text2">
		    		<?php
		    		    
		    		    echo $result["price"];  
		    		    if ($result["price"]!='') {
		    		    	# code...
		    		    	echo '&#8381';
		    		    }
		    		?>
		    		
		    	</p>
    		</div>
    		<div class="col-4 cart" style="height: 400px;">
    			<h3>
		    		<?php
		    		    $result = $query->fetch_assoc();
		    		    echo $result["name"];  
		    		?>
		    	</h3>
		    	<p class="text1">
		    		<?php
		    		    
		    		    echo $result["text"];  
		    		?>
		    	</p>
		    	<?php        
		            echo "<img class='w-75' src='".$result["img"]."'>";
		            if ($result["price"]!='') {
		    		    # code...
		    		    echo '<hr>';
		    		}
		        ?>
		       
		        <p class="text2">
		    		<?php
		    		    
		    		    echo $result["price"];  
		    		    if ($result["price"]!='') {
		    		    	# code...
		    		    	echo '&#8381';
		    		    }
		    		?>
		    		
		    	</p>
    		</div>
    	</div>
    	<!--2-->
    	<div class="col-12 d-flex mt-5">
    		<div class="col-4 cart" style="height: 400px;">
    			<h3>
		    		<?php
		    		    $result = $query->fetch_assoc();
		    		    echo $result["name"];  
		    		?>
		    	</h3>
		    	<p class="text1">
		    		<?php
		    		    
		    		    echo $result["text"];  
		    		?>
		    	</p>
		    	<?php        
		            echo "<img class='w-50' src='".$result["img"]."'>";
		            if ($result["price"]!='') {
		    		    # code...
		    		    echo '<hr>';
		    		}
		        ?>
		        
		        <p class="text2">
		    		<?php
		    		    
		    		    echo $result["price"];  
		    		    if ($result["price"]!='') {
		    		    	# code...
		    		    	echo '&#8381';
		    		    }
		    		?>
		    	
		    	</p>
    		</div>
    		<div class="col-4 cart" style="height: 400px;">
    			<h3>
		    		<?php
		    		    $result = $query->fetch_assoc();
		    		    echo $result["name"];  
		    		?>
		    	</h3>
		    	<p class="text1">
		    		<?php
		    		    
		    		    echo $result["text"];  
		    		    if ($result["price"]!='') {
			    		    # code...
			    		    echo '<hr>';
			    		}
		    		?>
		    		
		    	</p>
		    	<?php        
		            echo "<img class='w-50' src='".$result["img"]."'>";
		        ?>
		        <p class="text2">
		    		<?php
		    		    
		    		    echo $result["price"]; 
		    		    if ($result["price"]!='') {
		    		    	# code...
		    		    	echo '&#8381';
		    		    } 
		    		?>
		    	
		    	</p>
    		</div>
    		<div class="col-4 cart" style="height: 400px;">
    			<h3>
		    		<?php
		    		    $result = $query->fetch_assoc();
		    		    echo $result["name"];  
		    		?>
		    	</h3>
		    	<p class="text1">
		    		<?php
		    		    
		    		    echo $result["text"];  
		    		?>
		    	</p>
		    	<?php        
		            echo "<img class='w-50' src='".$result["img"]."'>";
		            if ($result["price"]!='') {
		    		    # code...
		    		    echo '<hr>';
		    		}
		        ?>
		        
		        <p class="text2">
		    		<?php
		    		    
		    		    echo $result["price"];  
		    		    if ($result["price"]!='') {
		    		    	# code...
		    		    	echo '&#8381';
		    		    }
		    		?>
		    		
		    	</p>
    		</div>
    	</div>
    </div>
</body>
</html>