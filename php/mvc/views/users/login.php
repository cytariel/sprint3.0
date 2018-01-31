<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript"> 
   function recaptcha_callback(){
      $('.btn').prop("disabled", false);
    }
</script>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Logowanie</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>E-mail</label>
    		<input type="text" name="email" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Hasło</label>
    		<input type="password" name="password" class="form-control" />
    	</div>
      <div class="g-recaptcha" data-callback="recaptcha_callback" data-sitekey="6Ldd9kIUAAAAAITOlwPIzga7bMnKzbdAC2spinXA">Sprawdź jesteś botem?</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Zaloguj" disabled />
    </form>
  </div>
</div>