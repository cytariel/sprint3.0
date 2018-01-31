<?php if((!isset($_SESSION['is_logged_in']))&&(($_SESSION['is_logged_in'])==false)){
    echo '<script type="text/javascript">alert("Zaloguj się");</script>';
    header('Location: '.ROOT_URL.'shares');
}
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edytuj post</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
    		<input type="hidden" name="id" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Tytuł</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Treść</label>
    		<textarea name="body"  class="form-control">
            </textarea>
    	</div>
    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="link" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="edit" type="submit" value="Edytuj" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Anuluj</a>
    </form>
  </div>
</div>