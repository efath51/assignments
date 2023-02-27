<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
 
  require_once 'Person.php';
 
  $person = new Person();
  $person->setName($name);
  $person->setEmail($email);

  echo '<p>Name: ' . $person->getName() . '</p>';
  echo '<p>Email: ' . $person->getEmail() . '</p>';
}
?>
