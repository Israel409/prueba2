<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=centroescolarbd', 'root', 'redes2024');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>