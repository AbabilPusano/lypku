<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Your Pets</title>
    <link rel="icon" type="image/png" href="image/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DaisyUI  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f87eaab4e6.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Navbar -->
<header class="shadow fixed top-0 w-full z-10 h-20 bg-white">
    <div
      class="bg-white relative flex justify-between lg:justify-start flex-col lg:flex-row lg:h-20 overflow-hidden px-4 py-4 md:px-36 md:mx-auto md:flex-wrap md:items-center">
      <a href="{{route('home')}}" class="flex items-center whitespace-nowrap text-2xl">
        <img class="h-12" src="images/lyp.png" alt="">
      </a>

      <!-- Hamburger Menu for Mobile -->
      <input type="checkbox" class="peer hidden" id="navbar-open" />
      <label class="absolute top-7 right-8 cursor-pointer md:hidden" for="navbar-open">
        <span class="sr-only">Toggle Navigation</span>
        <i class="fa-solid fa-bars h-6 w-6 text-pink-500"></i> <!-- Ubah warna icon menjadi pink -->
      </label>

        <!-- Navigation Menu -->
     <!-- Navigation Menu -->
     <nav aria-label="Header Navigation"
     class="peer-checked:max-h-60 max-h-0 w-full lg:w-auto flex-col flex lg:flex-row lg:max-h-full overflow-hidden transition-all duration-300 lg:items-center lg:ml-auto">
     <ul class="flex flex-col lg:flex-row lg:space-y-0 space-y-4 items-center lg:ml-auto font-poppins font-semibold">
     <li class="text-[#D91656] border-b-2 border-white md:mr-12 hover:border-pink-600 font-poppins font-bold">
         <a href="{{route('home')}}">Beranda</a> <!-- Menu Beranda -->
     </li>
     <li class="text-[#D91656] border-b-2 border-white md:mr-12 hover:border-pink-600 font-poppins font-bold">
         <a href="{{route('tentang_kami')}}">Tentang Kami</a> <!-- Menu Tentang Kami -->
     </li>
     <li class="text-[#D91656] border-b-2 border-white md:mr-12 hover:border-pink-600 font-poppins font-bold">
         <a href="{{route('artikel')}}">Artikel</a> <!-- Menu Artikel -->
     </li>
     <li class="text-[#D91656] border-b-2 border-white md:mr-12 hover:border-pink-600 font-poppins font-bold">
         <a href="{{route('belanja')}}">Belanja</a> <!-- Menu Belanja -->
     </li>
     <button
         class="text-[#D91656] border-2 md:mr-12 px-4 py-2 border-pink-600 cursor-pointer hover:bg-pink-100 hover:border-pink-500 focus:bg-pink-100 focus:border-pink-500"
         onclick="modal_login.showModal()">Masuk</button>
     <li
         class="text-[#D91656] border-2 border-pink-600 md:mr-12 px-4 py-2 hover:bg-pink-100 hover:border-pink-500 focus:bg-pink-100 focus:border-pink-500">
         <a href="dashboard.html">Dashboard</a> <!-- Menu Dashboard -->
     </li>
     </ul>
     </nav>
     </div>
 </header>

         <!-- Our Products -->
         <section id="belanja" class="px-4 lg:px-40 py-40 bg-[#FBF6F0]">
            <div class="container mx-auto text-center">
                <h2 class="text-xl lg:text-4xl text-left font-poppins font-bold mb-8 text-black tracking-wide"><span
                        class="text-[#D91656]">Temukan</span> Kebutuhan Hewan Terbaik</h2>

                        <p class="text-m lg:text-lg text-justify font-poppins text-gray-700">
                            Butuh makanan dan obat terbaik untuk hewan kesayanganmu? Kami siap membantu! Cek koleksi
                            lengkap kami yang aman dan berkualitas, khusus untuk menjaga kesehatan hewan peliharaanmu.
                            Yuk, pastikan mereka selalu sehat dan bahagia dengan produk-produk terpercaya dari kami!
                        </p>

                <div class="divider my-20"><span class="font-poppins font-bold text-3xl text-[#D91656] px-8">Makanan Hewan</span></div>
                <!-- Card -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 lg:justify-center">


                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (2).png" alt="Jagung"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Whiskas Junior Ocean Fish <br>  1.1 Kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Kucing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">59.950</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (3).png" alt="Impresol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Makanan Kucing Felibite <br>800gr
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Kucing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">62.500</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/gambar.png" alt="Sawi"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Cat Choize <br> 800gr
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Kucing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">38.020</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (4).png" alt="Vigorin"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Royal Canin (Kitten up to 12 months) 400gr
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Kucing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">81.700</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (5).png" alt="Kol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Royal Canin (Adult Beagle)    <br>3kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Anjing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">325.000</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (6).png" alt="Bayam" class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Pro Plan (Small and Mini Puppy) 1kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Anjing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">102.000</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (7).png" alt="Labusiam"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Padigre (Adult)<br> 1.5kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Anjing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">75.100</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (8).png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Happy Dog Puppy <br> 1kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Anjing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">89.500</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (9).png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Jolly Crispy Hamster <br> 1kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Hamster</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">85.000</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (10).png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Holly Hammy <br> 400gr
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Hamster</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">27.000</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (11).png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Britter Bunny <br> 1kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Kelinci</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">36.500</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/makan  (12).png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Smartheart Rabbit <br> 1kg
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Makanan Kelinci</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">36.000</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                </div>
                <div class="divider my-20"><span class="font-poppins font-bold text-3xl text-[#D91656] px-8">Obat Hewan</span></div>


                <!-- Card -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 lg:justify-center">


                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (1).png" alt="Jagung"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">scabivar - obat kutu scabies minum  10 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Kucing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">43.000/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (2).png" alt="Impresol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Flucat Flu cat <br>30 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Kucing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">18.000/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (3).png" alt="Sawi"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Dogydol <br> 30 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Anjing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">24.000/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (4).png" alt="Vigorin"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Obat  Anti Demodex ADEX <br>10 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Anjing</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">49.500/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (5).png" alt="Kol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">FluHams<br>10 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Hamster</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">13.000/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (6).png" alt="Bayam" class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Scardex Hamster <br> 10 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Hamster</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">18.000/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (7).png" alt="Labusiam"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Obat  Wormex <br> 30 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Kelinci</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">17.500/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="{{route('detail_produk')}}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="images/obat (8).png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">Radix 55 <br> 30 ml
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Obat Kelinci</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">Rp <span class="text-md">18.000/pack</span>
                            </div>
                            <button
                            class="bg-[#D91656] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-pink-500">
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                </div>
            </div>
        </section>


    <footer class="px-4 lg:px-36 py-8 bg-[#C30054] text-white">
        <div class="container mx-auto flex flex-wrap">
            <!-- Kolom Pertama -->
            <div class="w-full flex flex-col gap-4 lg:w-1/2">
                <!-- <h3 class="text-4xl font-poppins font-bold mb-4">TaniVerse.</h3> -->
                <img src="images/logo lv rev.png" class="w-28 lg:w-32" alt="">
                <p class="font-poppins text-white text-justify mb-4">
                    "Love Your Pets" adalah sebuah aplikasi yang dirancang untuk memudahkan pemilik hewan peliharaan dalam
                        mengelola kebutuhan dan kenangan bersama hewan kesayangan mereka. Aplikasi ini menyediakan berbagai fitur,
                        termasuk jurnal dan galeri untuk menyimpan momen-momen indah, manajemen informasi hewan peliharaan,
                        serta penghubung langsung dengan dokter hewan dan ahli peliharaan. Selain itu, aplikasi ini juga menawarkan
                        konten edukatif yang membantu pengguna dalam merawat dan menjaga kesehatan hewan peliharaan mereka.
                </p>
            </div>
            <!-- Kolom Kedua -->
            <div class="w-full lg:w-1/4 flex flex-col gap-2 lg:gap-8 lg:pl-16">
                <div class="font-semibold font-poppins text-md lg:text-2xl">Ikuti Kami</div>
                <div class="flex flex-row lg:flex-col gap-4">
                    <a href="https://instagram.com/taniverseid">
                        <img class="w-8" src="images/instagram_logo.png" alt="">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61566865310788">
                        <img class="w-8" src="images/facebook_logo.png" alt="">
                    </a>
                    <a href="http://wa.me/6287871790442">
                        <img class="w-8" src="images/whatsapp_logo.png" alt="">
                    </a>
                </div>
            </div>
            <!-- Kolom Ketiga -->
            <div class="w-full lg:w-1/4 flex flex-col gap-4 justify-center items-center">
                <img class="w-60" src="images/logo (11).png" alt="">
                <div class="font-poppins">© 2023 - 2024, LoveYourPets.</div>
            </div>
        </div>
    </footer>

    <!-- Main JS  -->
    <script src="js/app.js"></script>

    <!-- Tailwind Config -->
    <script src="js/tailwind.config.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sections = document.querySelectorAll("section");
            // const navDivs = document.querySelectorAll("nav div div");
            // const navLinks = document.querySelectorAll("nav div div a");
            const navLinks = document.querySelectorAll("header div nav ul li a");

            window.addEventListener("scroll", handleNavbar);

            function handleNavbar() {
                // let current = "";

                // sections.forEach(section => {
                //     const sectionTop = section.offsetTop;
                //     if (pageYOffset >= sectionTop - 50) {
                //         current = section.getAttribute("id");
                //     }
                // });

                // navDivs.forEach(div => {
                //     div.classList.remove("border-red-600");
                // });

                // navLinks.forEach(link => {
                //     if (link.getAttribute("href").includes(current)) {
                //         link.parentElement.classList.add("border-red-600");
                //     }
                // });

                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 50) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    // link.classList.remove("border-white");
                    link.parentElement.classList.remove("border-white");
                    if (link.getAttribute("href").includes(current)) {
                        // link.classList.add("border-white");
                        link.parentElement.classList.add("border-white");
                    }
                });
            }
        });
    </script>

</body>

</html>