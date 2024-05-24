<?php

require ('connexion.php');
    
    $query = $db->prepare('SELECT users.*, address.street, address.zipcod, address.city FROM users JOIN address ON users.address = address.id');

    $query->execute();
	
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);

?>