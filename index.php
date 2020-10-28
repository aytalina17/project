<meta charset="utf-8">
<?php 
    $connect = mysqli_connect("127.0.0.1","root","","ayta");
                                       
	$delete = 'DELETE FROM contacts WHERE id = "5"';
	mysqli_query($connect,$delete);

	$delete1 = 'DELETE FROM contacts WHERE id = "10"';
	mysqli_query($connect,$delete1);
 ?>

 <?php  
    $text_query = "SELECT * FROM contacts";
    $query = mysqli_query($connect,$text_query);
 ?>

<h1>Контакты</h1>

<form method="GET" action="delete.php">
	<input type="" name="id">
    <button>Удалить</button>
</form>

<?php
    for ($i=0; $i < $query->num_rows; $i++) { 
      	$result = $query->fetch_assoc();
		echo "<h1>". $result["name"] ."</h1>";
		echo "<h3>".$result["number"] ."</h3>";
      }  
?>
