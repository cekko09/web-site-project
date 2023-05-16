<?php 



try {
    $baglan = new PDO('mysql:host=localhost; dbname=surcafe', 'root' , '');
}catch(PDOException $e) {
    echo $e->getMessage();
}











// try {
//     $baglan = new PDO('mysql:host=localhost; dbname=firma', 'root', '');
   

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }



?>