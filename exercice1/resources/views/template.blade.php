<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link href="assets/sass/app.scss" rel="stylesheet" type="text/css">

<title>Laravel discovery</title>

</head>
  
<body>
<div class="container">
  <header class="jumbotron">
    <h1>Laravel discovery</h1>
  </header>
  <div class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel discovery</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
          @for ($i = 0; $i < count($data['menu']); $i++)
           <li{{ ($i == $data['page'])? ' class="active"': ''; }}><a href="{{ $i }}">{{ $data['menu'][$i] }}</a></li>
          @endfor
      </ul>
    </div>
  </div>
  <div class="col-md-12"> @yield('content') </div>
  <hr>
  <footer class="col-md-12" id="bas"> © Laravel discovery... </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>