<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Liga BS Valley</title>
</head>
<body>

<div class="w-full">
  <img src="{{ asset('img/bannerbs.png') }}" alt="banner liga bs valley" class="w-full h-48">
</div>



@yield('conteudo')
    
</body>
</html>