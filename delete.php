<?php
    $connect = mysqli_connect("127.0.0.1","root","","ayta");
    $delete2 = 'DELETE FROM contacts WHERE id = "'.$_GET["id"].'"';
	mysqli_query($connect,$delete2);   
?>