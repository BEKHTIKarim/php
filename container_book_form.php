<div class="container main">

  <form class="form-horizontal" action="save_book.php" method="POST">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Titre</label>
    <div class="col-sm-4">
      <input type="text" name="title" class="form-control" id="title" placeholder="Titre" requierd>
    </div>
  </div>
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">Auteur</label>
    <div class="col-sm-4">
      <input type="text" name="author" class="form-control" id="author" placeholder="Auteur">
    </div>
  </div>

  <div class="form-group">
    <label for="publish_date" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-4">
      <input type="date" name="publish_date" class="form-control" id="publish_date" placeholder="jj/mm/aaa">
    </div>
  </div>

  <div class="form-group">
    <label for="body" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-4">
      <textarea name="body" class="form-control" id="body" placeholder="Description"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="submit" type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>

</div>
