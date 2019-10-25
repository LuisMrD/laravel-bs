<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Liga BS Valley</title>
</head>
<body>
  <div id="app">
    <div class="w-full">
      <a href="/home">
      <img src="{{ asset('img/bannerbs.png') }}" alt="banner liga bs valley" class="w-full h-48">
      </a>
    </div>

    <div class="">
      <div class="border-solid border-8 border-black w-full h-32 flex justify-center items-center bg-red-700">
        <ul class="flex ">
          <li class="mr-12">
            <a class="text-4xl font-sans font-bold text-white hover:text-4xl font-sans font-bold text-white" href="/calendario">Calendário</a>
          </li>
          <li class="mr-12">
            <a class="text-4xl font-sans font-bold text-white hover:text-4xl font-sans font-bold text-white" href="#">Formatos</a>
          </li>
          <li class="mr-12">
            <a class="text-4xl font-sans font-bold text-white hover:text-4xl font-sans font-bold text-white" href="#">Listas</a>
          </li>
          <li class="mr-12">
            <a class="text-4xl font-sans font-bold text-white hover:text-4xl font-sans font-bold text-white" href="#">Posts</a>
          </li>
          <li class="mr-12">
            <a class="text-4xl font-sans font-bold text-white hover:text-4xl font-sans font-bold text-white" href="#">Reports</a>
          </li>
          <li class="mr-12">
            <a class="text-4xl font-sans font-bold text-white hover:text-4xl font-sans font-bold text-white" href="#">Ranking</a>
          </li>
        </ul>
      </div>
    </div>


  @yield('conteudo')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>