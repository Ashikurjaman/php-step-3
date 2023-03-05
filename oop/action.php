<?php

global $person;
      include("oopClass.php");
        if(isset($_POST["submit"]) && !empty($_POST["submit"]) ){
          $name = $_POST["name"];
          $email = $_POST["email"];
        //   echo $name; 
        }
        
    $person = new Person();
    $person->setName($name);
    $person->setEmail($email);

    echo 'Name: '.$person->getName()."<br>";
    echo 'Email: '.$person->getEmail();
    ?>