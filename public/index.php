<?php 

try {

$pdo = new PDO('mysql:host=localhost; dbname=ijdb;
 charset=utf8', 'root', ''); 

 $pdo->setAttribute(PDO::ATTR_ERRMODE, 
 PDO::ERRMODE_EXCEPTION); 

 $sql = 'SELECT `joketext` FROM `joke`';
$result = $pdo->query($sql);



//  $output = 'Database connection established.'; 

}catch (PDOException $e) {

    $output = 'Unable to connect to the database server: ' .$e;
    $e->getMessage() . ' in ' . 
    $e->getFile() . ':' . $e->getLine(); 

}

include __DIR__ . '/../templates/output.html.php'; 

// if (!isset($_POST['firstname'])) {
//     include __DIR__ . '/../templates/form.html.php'; 
// } else {
//     $firstName = $_POST['firstname'];
//     $lastName = $_POST['lastname']; 

//     if ($firstName == 'Kevin' && $lastName == 'Yank') {
//         $output = 'Welcome, oh glorious leader!'; 
//     } else {
//         $output = 'welcome to our website, '.  
//         htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ''. 
//         htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!' ;
//     }

//     include __DIR__ . '/../templates/welcome.html.php'; 
// }


?>