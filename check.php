<?php
$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

if(isset($_POST['data'])){
    $query = "SELECT * FROM demo WHERE username = '".$_POST['data']."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->rowCount();
    echo $result;

}
