<?php 

require_once "bootstrap.php";
$id = 1;
$product = $entityManager->find('Guestbook', $id);

// $guestbook = new Guestbook();

var_dump($product);