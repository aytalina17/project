<?php
   
    $connect = mysqli_connect("127.0.0.1","root","","myProject");
    $text_zaprosa_vstavit = "INSERT INTO admin (name, text, img, price)
                          VALUES ('{$_GET["name"]}', '{$_GET["text"]}', '{$_GET["img"]}', '{$_GET["price"]}')";
    $zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);

?>
<?php
header('Location: index.php');
?>