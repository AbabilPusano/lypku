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


    <!-- Modal Login  -->
    <dialog id="modal_login" class="modal backdrop-blur-lg">
        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
            <div class="flex items-center bg-[#D91656] rounded-t-lg h-24 lg:h-40">
                <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Login</h2>
            </div>
            <div class="px-8 pt-4 pb-12">
                <form id="loginForm" action="" class="flex flex-col gap-2">
                    <div class="flex flex-col">
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Masukkan username"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#D91656] focus-border-[#D91656]">
                    </div>
                    <div class="flex flex-col">
                        <label for="password">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                                <label
                                    class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                    for="toggle"><i class="fa-solid fa-eye"></i></label>
                            </div>
                            <input type="password" id="password" placeholder="Masukkan password"
                                class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#D91656] focus-border-[#D91656]">
                        </div>
                        <a href=""
                            class="mt-1 text-sm text-[#D91656] hover:text-[#035700] hover:underline hover:underline-[#035700] hover:underline-offset-4">Lupa
                            password?</a>
                    </div>
                    <div class="flex flex-col mt-2">
                        <button type="submit"
                            class="p-2 rounded-md bg-[#D91656] text-white hover:bg-[#035700]">Login</button>
                    </div>
                </form>
                <div class="divider">atau masuk dengan</div>
                <button class="mt-2 flex justify-center items-center gap-2 w-full border-2 rounded-md py-1 text-black hover:bg-gray-100 hover:text-[#035700]"
        onclick="modal_register.showModal()">
    <svg class="w-8 aspect-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         id="Capa_1" version="1.1" viewBox="0 0 150 150" xml:space="preserve">
        <g>
            <path class="st14"
                  d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5   C115,101.8,120,90,120,76.1L120,76.1z" />
            <path class="st15"
                  d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9   L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z" />
            <path class="st12"
                  d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z" />
            <path class="st13"
                  d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3   l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z" />
        </g>
    </svg>
    Google
</button>

                <div class="mt-2 text-center">
                    Belum punya akun? <form method="dialog" class="inline">
                        <button
                            class="buttonSwitchToLoginOrRegister text-[#D91656] hover:text-[#035700] hover:underline hover:underline-[#D91656] hover:underline-offset-4"
                            onclick="modal_register.showModal()">Daftar!</button>
                    </form>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- Modal Register  -->
    <dialog id="modal_register" class="modal backdrop-blur-lg">
        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
            <div class="flex items-center bg-[#047D00] rounded-t-lg h-24 lg:h-40">
                <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Daftar</h2>
            </div>
            <div class="px-8 pt-4 pb-12">
                <form id="registerForm" action="" class="flex flex-col gap-2">
                    <div class="flex flex-col">
                        <label for="namaRegister">Nama</label>
                        <input type="text" id="namaRegister" placeholder="Masukkan nama"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="username-register">Username</label>
                        <input type="text" id="username-register" placeholder="Masukkan username"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="password-register">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <input class="hidden js-password-toggle" id="toggle-register" type="checkbox" />
                                <label
                                    class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                    for="toggle-register"><i class="fa-solid fa-eye"></i></label>
                            </div>
                            <input type="password" id="password-register" placeholder="Masukkan password"
                                class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <button type="submit"
                            class="p-2 rounded-md bg-[#047D00] text-white hover:bg-[#035700]">Daftar</button>
                    </div>
                </form>
                <div class="divider">atau daftar dengan</div>

                <div class="mt-2 text-center">
                    Sudah punya akun? <form method="dialog" class="inline">
                        <button
                            class="buttonSwitchToLoginOrRegister text-[#047D00] hover:text-[#035700] hover:underline hover:underline-[#035700] hover:underline-offset-4"
                            onclick="modal_login.showModal()">Login!</button>
                    </form>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>


    <main>
        <!-- Know About Us -->
          <section id="artikel" class="px-4 lg:px-40 py-20 pt-40 bg-[#FBF6F0]">
              <div class="container mx-auto text-center">
                  <h2 class="text-xl lg:text-4xl text-left font-poppins font-bold mb-8 text-black tracking-wide"><span
                          class="text-[#D91656]">Temukan</span> Artikel di Website Kami</h2>

                          <p class="text-m lg:text-lg text-justify font-poppins text-gray-700">
                              Setiap hewan peliharaan memiliki cerita yang unik, penuh dengan cinta, kebersamaan,
                              dan pelajaran berharga. Di sini, kami merayakan hubungan istimewa antara pemilik dan hewan kesayangan mereka.
                              Dari momen lucu hingga pengalaman mengharukan, setiap kisah mengungkapkan betapa berharganya kehadiran mereka dalam hidup kita.
                          </p>

                  <div class="my-10 grid grid-cols-1 lg:grid-cols-3 gap-6">
                      <!-- Kartu Teratas -->
                      <div class="flex flex-col w-full gap-2 m-3 rounded-lg shadow-lg transition duration-300 hover:shadow-2xl bg-white">
                          <div class="h-45">
                              <img src="images/terimakasih_hewan.jpg" class="h-full rounded-t-lg" />
                          </div>
                          <div class="px-5 pt-5 text-m text-center font-bold">
                              Terima Kasih untuk Cinta dan Kesetiaanmu. Kamu Lebih dari Sekadar Hewan Peliharaan.
                          </div>
                          <div class="p-5 text-center">
                              Setiap detik bersamamu adalah anugerah. Aku berjanji untuk selalu menjagamu.
                          </div>
                          <div class="px-6 pt-2 pb-4">
                              <div class="flex items-center justify-center">
                                  <a href="{{route('isi_artikel')}}">
                                      <button class="px-5 py-2 font-poppins bg-[#D91656] hover:bg-[#D10363] text-white rounded-lg">
                                          Selengkapnya
                                      </button>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="flex flex-col w-full gap-2 m-3 rounded-lg shadow-lg transition duration-300 hover:shadow-2xl bg-white">
                          <div class="h-45">
                              <img src="images/terimakasih_hewan.jpg" class="h-full rounded-t-lg" />
                          </div>
                          <div class="px-5 pt-5 text-m text-center font-bold">
                              Terima Kasih untuk Cinta dan Kesetiaanmu. Kamu Lebih dari Sekadar Hewan Peliharaan.
                          </div>
                          <div class="p-5 text-center">
                              Setiap detik bersamamu adalah anugerah. Aku berjanji untuk selalu menjagamu.
                          </div>
                          <div class="px-6 pt-2 pb-4">
                              <div class="flex items-center justify-center">
                                  <a href="{{route('isi_artikel')}}">
                                      <button class="px-5 py-2 font-poppins bg-[#D91656] hover:bg-[#D10363] text-white rounded-lg">
                                          Selengkapnya
                                      </button>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="flex flex-col w-full gap-2 m-3 rounded-lg shadow-lg transition duration-300 hover:shadow-2xl bg-white">
                          <div class="h-45">
                              <img src="images/terimakasih_hewan.jpg" class="h-full rounded-t-lg" />
                          </div>
                          <div class="px-5 pt-5 text-m text-center font-bold">
                              Terima Kasih untuk Cinta dan Kesetiaanmu. Kamu Lebih dari Sekadar Hewan Peliharaan.
                          </div>
                          <div class="p-5 text-center">
                              Setiap detik bersamamu adalah anugerah. Aku berjanji untuk selalu menjagamu.
                          </div>
                          <div class="px-6 pt-2 pb-4">
                              <div class="flex items-center justify-center">
                                  <a href="{{route('isi_artikel')}}">
                                      <button class="px-5 py-2 font-poppins bg-[#D91656] hover:bg-[#D10363] text-white rounded-lg">
                                          Selengkapnya
                                      </button>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <!-- Kartu Terbawah -->
                      <div class="flex flex-col w-full gap-2 m-3 rounded-lg shadow-lg transition duration-300 hover:shadow-2xl bg-white">
                          <div class="h-45">
                              <img src="images/terimakasih_hewan.jpg" class="h-full rounded-t-lg" />
                          </div>
                          <div class="px-5 pt-5 text-m text-center font-bold">
                              Terima Kasih untuk Cinta dan Kesetiaanmu. Kamu Lebih dari Sekadar Hewan Peliharaan.
                          </div>
                          <div class="p-5 text-center">
                              Setiap detik bersamamu adalah anugerah. Aku berjanji untuk selalu menjagamu.
                          </div>
                          <div class="px-6 pt-2 pb-4">
                              <div class="flex items-center justify-center">
                                  <a href="{{route('isi_artikel')}}">
                                      <button class="px-5 py-2 font-poppins bg-[#D91656] hover:bg-[#D10363] text-white rounded-lg">
                                          Selengkapnya
                                      </button>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="flex flex-col w-full gap-2 m-3 rounded-lg shadow-lg transition duration-300 hover:shadow-2xl bg-white">
                          <div class="h-45">
                              <img src="images/terimakasih_hewan.jpg" class="h-full rounded-t-lg" />
                          </div>
                          <div class="px-5 pt-5 text-m text-center font-bold">
                              Terima Kasih untuk Cinta dan Kesetiaanmu. Kamu Lebih dari Sekadar Hewan Peliharaan.
                          </div>
                          <div class="p-5 text-center">
                              Setiap detik bersamamu adalah anugerah. Aku berjanji untuk selalu menjagamu.
                          </div>
                          <div class="px-6 pt-2 pb-4">
                              <div class="flex items-center justify-center">
                                  <a href="{{route('isi_artikel')}}">
                                      <button class="px-5 py-2 font-poppins bg-[#D91656] hover:bg-[#D10363] text-white rounded-lg">
                                          Selengkapnya
                                      </button>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="flex flex-col w-full gap-2 m-3 rounded-lg shadow-lg transition duration-300 hover:shadow-2xl bg-white">
                          <div class="h-45">
                              <img src="images/terimakasih_hewan.jpg" class="h-full rounded-t-lg" />
                          </div>
                          <div class="px-5 pt-5 text-m text-center font-bold">
                              Terima Kasih untuk Cinta dan Kesetiaanmu. Kamu Lebih dari Sekadar Hewan Peliharaan.
                          </div>
                          <div class="p-5 text-center">
                              Setiap detik bersamamu adalah anugerah. Aku berjanji untuk selalu menjagamu.
                          </div>
                          <div class="px-6 pt-2 pb-4">
                              <div class="flex items-center justify-center">
                                  <a href="{{route('isi_artikel')}}">
                                      <button class="px-5 py-2 font-poppins bg-[#D91656] hover:bg-[#D10363] text-white rounded-lg">
                                          Selengkapnya
                                      </button>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>



    <!-- Navigasi Halaman -->
  <nav class="flex justify-center py-50" aria-label="Page navigation mx-auto">
      <ul class="flex items-center -space-x-px h-8 text-sm">
          <li>
              <a href="#"
                  class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <span class="sr-only">Previous</span>
                  <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 1 1 5l4 4" />
                  </svg>
              </a>
          </li>
          <!-- Nomor Halaman -->
          <li>
              <a href="#"
                  class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
          </li>
          <li>
              <a href="#"
                  class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
          </li>
          <li>
              <a href="#" aria-current="page"
                  class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
          </li>
          <li>
              <a href="#"
                  class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
          </li>
          <li>
              <a href="#"
                  class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
          </li>
          <li>
              <a href="#"
                  class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <span class="sr-only">Next</span>
                  <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 9 4-4-4-4" />
                  </svg>
              </a>
          </li>
      </ul>
  </nav>
              </div>
          </section>
      </main>

      <div class="some-element mb-15"> <!-- Ganti ini dengan elemen yang ada di atas footer -->
          <!-- Konten Anda di sini -->
      </div>

<footer class="px-4 lg:px-36 py-8 bg-[#C30054] text-white">
    <div class="container mx-auto flex flex-wrap">
        <!-- Kolom Pertama -->
        <div class="w-full flex flex-col gap-4 lg:w-1/2">
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
            <div class="font-poppins">© 2023 - 2024, LoveYourPets.</div>
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
