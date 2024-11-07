<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
</head>
<body>
    <header>
        <div class="container-fluid d-flex flex-col justify-content-between p-4">
            <h3>EduFun</h3>
            <nav>
              <a href="{{ route('home') }}" class="pe-5">Home</a>
              <a href="{{ route('category') }}" class="pe-5">Category</a>
              <a href="{{ route('writer') }}" class="pe-5">Writer</a>
              <a href="" class="pe-5">About Us</a>
              <a href="" class="pe-5">Popular</a>
            </nav>
        </div>
      </header>    
      
      @yield('content')
</body>
</html>