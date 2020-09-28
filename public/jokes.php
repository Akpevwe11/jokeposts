<?php 

try {

    $pdo = new PDO('mysql:host=localhost; dbname=ijdb;
     charset=utf8', 'root', '123@Zuckerberg@12'); 
    
     $pdo->setAttribute(PDO::ATTR_ERRMODE, 
     PDO::ERRMODE_EXCEPTION); 
    
     $sql = 'SELECT `joketext` FROM `joke`';
    $result = $pdo->query($sql);

    while ($row = $result->fetch()) {
        $jokes[] = $row['joketext']; 
    }
    
        
    
    }catch (PDOException $e) {
    
        $output = 'Unable to connect to the database server: ' .$e;
        $e->getMessage() . ' in ' . 
        $e->getFile() . ':' . $e->getLine(); 
    
    }
    include __DIR__ . '/../templates/jokes.html.php';

?>