<html>
<head>
	<title>Blog</title>
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="<?php echo ROOT_URL; ?>shares">Blog</a>
      
          <ul class="nav navbar-nav ml-auto">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a class="badge badge-pill badge-primary" href="<?php echo ROOT_URL; ?>">Witaj <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a class="badge badge-pill badge-primary" href="<?php echo ROOT_URL; ?>users/logout">Wyloguj</a></li>
          <?php else : ?>
            <li><a class="badge badge-pill badge-primary" href="<?php echo ROOT_URL; ?>users/login">Zaloguj</a></li>
          <?php endif; ?>
          </ul>
        
    </nav>

    <div class="container">

     <div class="row">
     	<?php require($view); ?>
     </div>

    </div>
</body>
</html>