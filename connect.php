<?php
    $typeproduct = $_POST['type-product'];
    $quantity = $_POST['quantity'];
    $firstname = $_POST['first_name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $adresshome = $_POST['adress-home'];
    //database connection
    $conn = new mysqli('localhost','root','','ultimate');
    $stmt = $conn->prepare("insert into resetrition(typeproduct, quantity , first_name, phone , city , adresshome)
    values(?, ?, ?, ?, ?,? )");
    $stmt->bind_param("sisiss" , $typeproduct, $quantity , $firstname, $phone , $city , $adresshome);
    if($stmt->execute()){
        echo'<div class="alert">abababa</div>';
    }
    $stmt->close();
    $conn->close();


?>  