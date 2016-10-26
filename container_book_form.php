<?php

    $book_id = isset($_GET['id']) ? $_GET['id']:FALSE;
    include('get_book.php');
    include('process_book_form.php');

?>
<div class="container main">

  <form class="form-horizontal" action="save_book.php" method="POST">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Titre</label>
    <div class="col-sm-4">
      <input type="text" name="title" class="form-control" id="title" placeholder="Titre" value="<?php print $title; ?>" requierd>
    </div>
  </div>
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">Auteur</label>
    <div class="col-sm-4">
      <input type="text" name="author" class="form-control" id="author" placeholder="Auteur" value="<?php print $author; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="publish_date" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-4">
      <input type="date" name="publish_date" class="form-control" id="publish_date" placeholder="jj/mm/aaa" value="<?php print $date; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="body" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-4">
      <textarea name="body" class="form-control" id="body" placeholder="Description"><?php print $body; ?></textarea>
    </div>
  </div>
  <input type="hidden" name="book_id" value="<?php print $book_id; ?>">
  <input type="hidden" name="op" value="<?php print $op; ?>">

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="submit" type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>

</div>
