<?php
  var_dump($_POST);
  //Si le titre est vide on redirige l'utilisateur.
  //vers la page du formulaire.
  if(empty($_POST['title']))
  {
    header('Location: add_book.php');
    //Message flash.
  }

  include('db.php');

  //On converti la date inserrée dans le formulaire
  //en timestamp(nobre de seconde écoulées depuis le 1er janvier 1977).
  $date = strtotime($_POST['publish_date']);

  //On insère les données du livre en base de donnée
  //grace a une requete SQL et via la classe PDO.

  //Préparation de la requete et des données grace a la methode prepare() de PDO.
  $query = $db->prepare("INSERT INTO book (title,author,publish_date, body) VALUES (:title, :author, :publish_date, :body)");
  $query->bindValue(':title',$_POST['title']);
  $query->bindValue(':author',$_POST['author']);
  $query->bindValue(':publish_date',$date);
  $query->bindValue(':body',$_POST['body']);


  $result = $query->execute();
  var_dump($query->errorInfo());
  var_dump($query);
  var_dump($result);

  //on redirige l'utilisateur vers la page
  //du formulaire
  //message de succès d'insertion
  header('Location: add_book.php')

 ?>
