<?php include('db.php');
  // Si on a une valeur d'ID de livre,on fait
  //la requête.
  if ($book_id != FALSE) {
    $query = $db->prepare('SELECT * FROM book WHERE id =:id');
    $result = $query->bindValue(':id',$_GET['id']);
    $result = $query->execute();
    $book = $query->fetch(PDO::FETCH_ASSOC);

    //"Débuggage".
    /*var_dump($query->errorInfo());
    var_dump($query);
    var_dump($result);
    var_dump($book);*/
  }
  // Sinon on crée une variable $book
  else {
    $book = FALSE;
  }

  ?>
