<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara-Com App</title>
    

    <link rel="icon" href="images/favicon.ico" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
tailwind.config = {
          theme: {
            extend: {
              colors: {
                laravel: '#ef3b2d',
              },
            },
          },
        }
    </script>
</head>
<body>

  @include('partials._nav')
  @include('partials._search')
    <div class="container mx-auto">
        {{-- @yield('content') --}}
        {{$slot}}
    </div>  
    
</body>
</html>