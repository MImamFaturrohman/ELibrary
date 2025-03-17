<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body>
    <!-- header-->
    <header class="bg-gray-900 sticky top-0 z-50">
        <nav class="text-white w-11/12 md:container md:px-10 mx-auto py-4 flex justify-between items-center">
          <a href="" class="text-3xl font-bold">PerpusDilan</a>
          <ul class="menu hidden md:flex md:bg-gray-900 md:relative md:top-0 md:divide-y-0 md:w-auto font-semibold">
            <li class="px-7 py-1 hover:text-gray-500"><a href="#News">News</a></li>
            <li class="px-7 py-1 hover:text-gray-500"><a href="#collection">collection</a></li>
            <li class="px-7 py-1 hover:text-gray-500"><a href="#about">About</a></li>
            <li class="px-7 py-1 hover:text-gray-500 md:hover:text-white"><a href="{{ route('login') }}" class="md:border-2 md:border-red-500 md:py-2 md:px-5 md:rounded-xl md:hover:bg-transparent bg-red-500 text-white">Getting Started</a></li>
          </ul>
          <button class="hamburger-menu text-2xl md:hidden">
            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-xmark hidden"></i>
          </button>
        </nav>
      </header>
  
      <!-- hero -->
      <section class="" style="background-image: url('{{ asset('assets/img/web-img/hero.png') }}');">
        <div class="container mx-auto text-center text-white h-96 md:h-screen flex items-center relative w-full">
          <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
          <div class="mx-auto w-3/4 md:w-2/4 relative z-10">
            <h3 class="text-5xl font-bold text-center mb-5 drop-shadow-lg">Bring Your Knowledge To The Next Level</h3>
            <p class="text-white mb-5 drop-shadow-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vitae aliquid libero corrupti deleniti at!</p>
            <a href="#collection" class="bg-red-500 text-white py-2 px-5 rounded-xl hover:bg-red-800 font-semibold">See Our Collection</a>
          </div>
        </div>
      </section>
  
      <!-- Collection -->
      <section id="collection" class="py-10 md:py-20 md:px-10 px-5 bg-white">
            <h3 class="text-5xl font-bold text-center mb-5">Our Collection</h3>
            <p class="text-gray-500 mb-5 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, iure.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 w-11/12 md:container mx-auto gap-6">
              <!-- collection 1-->
              <div class="shadow-xl">
                <a href="">
                  <img src="{{ asset('assets/img/web-img/book.jpg') }}" class="w-full h-[200px] md:h-[400px] object-cover rounded-lg"/>
                  <div class="py-3 px-5">
                    <h4 class="text-center text-xl md:text-3xl font-bold mb-2">Coraline</h4>
                      <hr class="border-t-2 border-gray-300 my-2">
                    <p class="font-semibold text-sm text-gray-600">Neil Gaiman</p>
                  </div>
                </a>
              </div>
      
              <!-- collection 2-->
              <div class="shadow-xl">
                <a href="">
                  <img src="{{ asset('assets/img/web-img/book.jpg') }}" class="w-full h-[200px] md:h-[400px] object-cover rounded-lg"/>
                  <div class="py-3 px-5">
                    <h4 class="text-center text-xl md:text-3xl font-bold mb-2">Coraline</h4>
                      <hr class="border-t-2 border-gray-300 my-2">
                    <p class="font-semibold text-sm text-gray-600">Neil Gaiman</p>
                  </div>
                </a>
              </div>
      
              <!-- collection 3-->
              <div class="shadow-xl">
                <a href="">
                  <img src="{{ asset('assets/img/web-img/book.jpg') }}" class="w-full h-[200px] md:h-[400px] object-cover rounded-lg"/>
                  <div class="py-3 px-5">
                    <h4 class="text-center text-xl md:text-3xl font-bold mb-2">Coraline</h4>
                      <hr class="border-t-2 border-gray-300 my-2">
                    <p class="font-semibold text-sm text-gray-600">Neil Gaiman</p>
                  </div>
                </a>
              </div>
      
              <!-- collection 4-->
              <div class="shadow-xl">
                <a href="">
                  <img src="{{ asset('assets/img/web-img/book.jpg') }}" class="w-full h-[200px] md:h-[400px] object-cover rounded-lg"/>
                  <div class="py-3 px-5">
                    <h4 class="text-center text-xl md:text-3xl font-bold mb-2">Coraline</h4>
                      <hr class="border-t-2 border-gray-300 my-2">
                    <p class="font-semibold text-sm text-gray-600">Neil Gaiman</p>
                  </div>
                </a>
              </div>
            </div>
      </section>  
  
      <!-- News -->
      <section id="News" class="bg-gray-200 py-10 md:py-20 md:px-10">
        <div class="w-11/12 md:container mx-auto">
          <h3 class="text-5xl font-bold text-center mb-5">Check Our News</h3>
          <p class="text-gray-500 text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, odit.</p>
          <div class="grid grid-cols-2 md:grid-cols-2 gap-8">
            <!-- News Card 1-->
            <!-- Card Horizontal (Desktop & Tablet) -->
            <div class="hidden sm:flex space-x-5 py-8 px-8 bg-white rounded-xl items-start shadow-md">
              <img src="{{ asset('assets/img/web-img/claire.jpg') }}" class="w-[200px] h-[200px] object-cover rounded-lg"/>
              <div>
                <h4 class="text-2xl font-bold mb-5">Data Analytics</h4>
                <p class="text-gray-500 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?</p>
                <a href="" class="hover:text-gray-500">Read more</a>
              </div>
            </div>
            <!-- Card Vertikal (Mobile) -->
            <div class="block sm:hidden bg-white rounded-xl shadow-md overflow-hidden max-w-sm mx-auto">
              <img src="{{ asset('assets/img/web-img/claire.jpg') }}" class="w-full h-64 object-cover rounded-t-xl"/>
              <div class="p-4">
                <h4 class="text-xl font-bold mb-2">Data Analytics</h4>
                <p class="text-gray-500 text-sm mb-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?
                </p>
                <a href="" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">Read more</a>
              </div>
            </div>
  
            <!-- News Card 2-->
            <!-- Card Horizontal (Desktop & Tablet) -->
            <div class="hidden sm:flex space-x-5 py-8 px-8 bg-white rounded-xl items-start shadow-md">
              <img src="{{ asset('assets/img/web-img/ashley.jpg') }}" class="w-[200px] h-[200px] object-cover rounded-lg"/>
              <div>
                <h4 class="text-2xl font-bold mb-5">Data Analytics</h4>
                <p class="text-gray-500 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?</p>
                <a href="" class="hover:text-gray-500">Read more</a>
              </div>
            </div>
            <!-- Card Vertikal (Mobile) -->
            <div class="block sm:hidden bg-white rounded-xl shadow-md overflow-hidden max-w-sm mx-auto">
              <img src="{{ asset('assets/img/web-img/ashley.jpg') }}" class="w-full h-64 object-cover rounded-t-xl"/>
              <div class="p-4">
                <h4 class="text-xl font-bold mb-2">Data Analytics</h4>
                <p class="text-gray-500 text-sm mb-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?
                </p>
                <a href="" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">Read more</a>
              </div>
            </div>
  
            <!-- News Card 3-->
            <!-- Card Horizontal (Desktop & Tablet) -->
            <div class="hidden sm:flex space-x-5 py-8 px-8 bg-white rounded-xl items-start shadow-md">
              <img src="{{ asset('assets/img/web-img/jill.jpg') }}" class="w-[200px] h-[200px] object-cover rounded-lg"/>
              <div>
                <h4 class="text-2xl font-bold mb-5">Data Analytics</h4>
                <p class="text-gray-500 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?</p>
                <a href="" class="hover:text-gray-500">Read more</a>
              </div>
            </div>
            <!-- Card Vertikal (Mobile) -->
            <div class="block sm:hidden bg-white rounded-xl shadow-md overflow-hidden max-w-sm mx-auto">
              <img src="{{ asset('assets/img/web-img/jill.jpg') }}" class="w-full h-64 object-cover rounded-t-xl"/>
              <div class="p-4">
                <h4 class="text-xl font-bold mb-2">Data Analytics</h4>
                <p class="text-gray-500 text-sm mb-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?
                </p>
                <a href="" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">Read more</a>
              </div>
            </div>
  
            <!-- News Card 4-->
            <!-- Card Horizontal (Desktop & Tablet) -->
            <div class="hidden sm:flex space-x-5 py-8 px-8 bg-white rounded-xl items-start shadow-md">
              <img src="{{ asset('assets/img/web-img/mikasa.jpg') }}" class="w-[200px] h-[200px] object-cover rounded-lg"/>
              <div>
                <h4 class="text-2xl font-bold mb-5">Data Analytics</h4>
                <p class="text-gray-500 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?</p>
                <a href="" class="hover:text-gray-500">Read more</a>
              </div>
            </div>
            <!-- Card Vertikal (Mobile) -->
            <div class="block sm:hidden bg-white rounded-xl shadow-md overflow-hidden max-w-sm mx-auto">
              <img src="{{ asset('assets/img/web-img/mikasa.jpg') }}" class="w-full h-64 object-cover rounded-t-xl"/>
              <div class="p-4">
                <h4 class="text-xl font-bold mb-2">Data Analytics</h4>
                <p class="text-gray-500 text-sm mb-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam perspiciatis quis! Atque, explicabo voluptates?
                </p>
                <a href="" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">Read more</a>
              </div>
            </div>
  
          </div>
        </div>
      </section>
  
      <!-- about -->
      <section id="about" class="w-11/12 md:container mx-auto px-20 py-20">
        <div class="flex space-x-10 items-start">
          <div>
            <h3 class="text-5xl font-bold mb-5">About Us</h3>
            <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, in. Voluptatum labore voluptatibus officia nemo quo repellat cupiditate facere? Recusandae, harum fugit veniam dolores fugiat in optio odio beatae minima.</p>
            <p class="mb-5 pb-5 border-b border-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptate a dignissimos recusandae id illo dicta neque sit, magni tempore modi asperiores sapiente dolorum perferendis?</p>
            <ul class="md:flex md:space-x-5">
              <li>
                <a href=""><i class="fa-brands fa-tiktok"></i> Tiktok</a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-instagram"></i> Instagram</a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-twitter"></i> Twitter</a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-youtube"></i> YouTube</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
  
      <footer class="py-5 text-white text-center font-bold bg-gray-900">&copy; 2024 PerpusDilan</footer>
  
      <script src="./js/script.js"></script>
    </body>
</html>
