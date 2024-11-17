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
            <img class="h-12" src="{{url('images/lyp.png')}}" alt="">
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
        @if (!session('access_token'))
        <button
            class="text-[#D91656] border-2 md:mr-12 px-4 py-2 border-pink-600 cursor-pointer hover:bg-pink-100 hover:border-pink-500 focus:bg-pink-100 focus:border-pink-500"
            onclick="window.location.href='{{ route('home') }}?login=true'">
            Masuk
        </button>
        @endif
        @if(session('access_token'))
            <li class="text-[#D91656] border-b-2 border-white md:mr-12 hover:border-pink-600 font-poppins font-bold">
                <a href="{{route('hem')}}">Hewan & Memori</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline" id="logoutForm">
                    @csrf
                    <button type="submit" class="text-[#D91656] border-2 md:mr-12 px-4 py-2 border-pink-600 cursor-pointer hover:bg-pink-100 hover:border-pink-500 focus:bg-pink-100 focus:border-pink-500" id="logoutButton">
                        Log Out
                    </button>
                </form>
            </li>
        @endif
        </ul>
        </nav>
        </div>
    </header>


    <!-- Modal Login  -->
    <dialog id="modal_login" class="modal backdrop-blur-lg">
        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
            <div class="flex items-center bg-[#047D00] rounded-t-lg h-24 lg:h-40">
                <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Login</h2>
            </div>
            <div class="px-8 pt-4 pb-12">
                <form id="loginForm" class="flex flex-col gap-2">
                    <div class="flex flex-col">
                        <label for="emailLogin">Email</label>
                        <input type="text" id="emailLogin" placeholder="Masukkan email"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="passwordLogin">Password</label>
                        <input type="password" id="passwordLogin" placeholder="Masukkan password"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col mt-4">
                        <button type="submit"
                            class="p-2 rounded-md bg-[#047D00] text-white hover:bg-[#035700]">Login</button>
                    </div>
                </form>
                <div class="mt-2 text-center">
                    Belum punya akun? <form method="dialog" class="inline">
                        <button
                            class="buttonSwitchToLoginOrRegister text-[#D91656] hover:text-[#035700] hover:underline hover:underline-[#D91656] hover:underline-offset-4"
                            onclick="modal_register.showModal()">Daftar!</button>
                    </form>
                </div>
            </div>
        </div>
    </dialog>


    <!-- Modal Register  -->
    <dialog id="modal_register" class="modal backdrop-blur-lg">
        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
            <div class="flex items-center bg-[#047D00] rounded-t-lg h-24 lg:h-40">
                <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Daftar</h2>
            </div>
            <div class="px-8 pt-4 pb-12">
                <form id="registerForm" class="flex flex-col gap-2">
                    <div class="flex flex-col">
                        <label for="namaRegister">Nama</label>
                        <input type="text" id="namaRegister" placeholder="Masukkan nama"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="username-register">Email</label>
                        <input type="text" id="username-register" placeholder="Masukkan email"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="password-register">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <input class="hidden js-password-toggle" id="toggle-pw" type="checkbox" />
                                <label
                                    class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                    for="toggle-pw"><i class="fa-solid fa-eye"></i></label>
                            </div>
                            <input type="password" id="password-register" placeholder="Masukkan password"
                                class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <button type="submit"
                            class="p-2 rounded-md bg-[#047D00] text-white hover:bg-[#035700]">Daftar</button>
                            <div class="spinner-border text-primary" role="status" id="loadreg" style="display: none; align-items: center;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </dialog>


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
                <button
                    class="mt-2 flex justify-center items-center gap-2 w-full border-2 rounded-md py-1 text-black hover:bg-gray-100 hover:text-[#035700]"
                    onclick="modal_register.showModal()">
                    <svg class="w-8 aspect-square" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1"
                        style="enable-background:new 0 0 150 150;" version="1.1" viewBox="0 0 150 150"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #1A73E8;
                            }

                            .st1 {
                                fill: #EA4335;
                            }

                            .st2 {
                                fill: #4285F4;
                            }

                            .st3 {
                                fill: #FBBC04;
                            }

                            .st4 {
                                fill: #34A853;
                            }

                            .st5 {
                                fill: #4CAF50;
                            }

                            .st6 {
                                fill: #1E88E5;
                            }

                            .st7 {
                                fill: #E53935;
                            }

                            .st8 {
                                fill: #C62828;
                            }

                            .st9 {
                                fill: #FBC02D;
                            }

                            .st10 {
                                fill: #1565C0;
                            }

                            .st11 {
                                fill: #2E7D32;
                            }

                            .st12 {
                                fill: #F6B704;
                            }

                            .st13 {
                                fill: #E54335;
                            }

                            .st14 {
                                fill: #4280EF;
                            }

                            .st15 {
                                fill: #34A353;
                            }

                            .st16 {
                                clip-path: url(#SVGID_2_);
                            }

                            .st17 {
                                fill: #188038;
                            }

                            .st18 {
                                opacity: 0.2;
                                fill: #FFFFFF;
                                enable-background: new;
                            }

                            .st19 {
                                opacity: 0.3;
                                fill: #0D652D;
                                enable-background: new;
                            }

                            .st20 {
                                clip-path: url(#SVGID_4_);
                            }

                            .st21 {
                                opacity: 0.3;
                                fill: url(#_45_shadow_1_);
                                enable-background: new;
                            }

                            .st22 {
                                clip-path: url(#SVGID_6_);
                            }

                            .st23 {
                                fill: #FA7B17;
                            }

                            .st24 {
                                opacity: 0.3;
                                fill: #174EA6;
                                enable-background: new;
                            }

                            .st25 {
                                opacity: 0.3;
                                fill: #A50E0E;
                                enable-background: new;
                            }

                            .st26 {
                                opacity: 0.3;
                                fill: #E37400;
                                enable-background: new;
                            }

                            .st27 {
                                fill: url(#Finish_mask_1_);
                            }

                            .st28 {
                                fill: #FFFFFF;
                            }

                            .st29 {
                                fill: #0C9D58;
                            }

                            .st30 {
                                opacity: 0.2;
                                fill: #004D40;
                                enable-background: new;
                            }

                            .st31 {
                                opacity: 0.2;
                                fill: #3E2723;
                                enable-background: new;
                            }

                            .st32 {
                                fill: #FFC107;
                            }

                            .st33 {
                                opacity: 0.2;
                                fill: #1A237E;
                                enable-background: new;
                            }

                            .st34 {
                                opacity: 0.2;
                            }

                            .st35 {
                                fill: #1A237E;
                            }

                            .st36 {
                                fill: url(#SVGID_7_);
                            }

                            .st37 {
                                fill: #FBBC05;
                            }

                            .st38 {
                                clip-path: url(#SVGID_9_);
                                fill: #E53935;
                            }

                            .st39 {
                                clip-path: url(#SVGID_11_);
                                fill: #FBC02D;
                            }

                            .st40 {
                                clip-path: url(#SVGID_13_);
                                fill: #E53935;
                            }

                            .st41 {
                                clip-path: url(#SVGID_15_);
                                fill: #FBC02D;
                            }
                        </style>
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
                    </svg> Google
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

    <section id="faq" class="px-4 lg:px-40 py-20 bg-[#FBF6F0]">
    <div class="w-full mt-5 mx-auto rounded p-5">


        <h2 class="text-xl lg:text-4xl font-poppins font-bold mb-2 lg:mb-6">
            Beberapa Informasi <span class="text-[#D91656]">Hewan dan Aplikasi
            <img src="images/garispink.png" alt="" class="mt-4 w-32">
        </h2>

        <p class="text-m lg:text-lg text-justify font-poppins text-gray-700">
            Jelajahi jawaban cepat dan praktis untuk berbagai pertanyaan umum seputar layanan kami,
            mulai dari informasi dasar hingga panduan detail tentang cara terbaik merawat hewan peliharaan Anda.
            Di sini, kami menyediakan solusi dan tips yang dapat membantu Anda lebih memahami kebutuhan unik setiap hewan,
            sehingga Anda dapat memberikan perawatan yang penuh perhatian dan sesuai dengan karakter masing-masing peliharaan.
        </p>


        <div class="flex justify-center mb-12">
            <ul class="w-full lg:w-4/4 mx-auto mt-10 divide-y shadow rounded-xl">
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500" >
                            <span>Apa yang membedakan kucing dan anjing dalam kebutuhan nutrisi?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Kucing membutuhkan asam amino seperti taurin, yang hanya bisa didapatkan dari sumber hewani.
                                Kucing juga memerlukan lebih banyak protein dan lemak dalam makanannya. Berbeda dengan anjing
                                yang tidak memerlukan taurin tambahan dan memiliki kebutuhan serat yang lebih tinggi dibandingkan kucing.
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500">
                            <span>Bagaimana cara merawat bulu kelinci agar tetap sehat dan tidak kusut?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                1. Sikat bulu kelinci secara teratur menggunakan sikat yang lembut.<br>
                                2. Berikan makanan yang kaya serat.<br>
                                3. Pastikan kelinci tetap bersih dengan menjaga kandangnya tetap higienis.<br>
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500" >
                            <span>Bagaimana tanda-tanda bahwa hamster sedang stres atau tidak nyaman di lingkungannya?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                1. Perilaku mengunyah jeruji kandang.<br>
                                2. Agresif atau sering menggigit.<br>
                                3. Gerakan gelisah atau berlari tanpa henti di roda.<br>
                                4. Kehilangan nafsu makan atau penurunan berat badan.<br>
                                5. Sering bersembunyi atau menghindari kontak dengan pemilik.<br>
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500" >
                            <span>Bagaimana cara aplikasi Love Your Pets dapat membantu pemilik mengatur jadwal pertemuan dengan dokter hewan?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Aplikasi hewan peliharaan dapat mengingatkan pemilik tentang jadwal vaksinasi, pemeriksaan kesehatan rutin, dan konsultasi medis lainnya.
                                Beberapa aplikasi juga menyediakan fitur untuk booking langsung dengan klinik hewan, sehingga memudahkan pemilik dalam mengatur waktu yang sesuai.
                                Aplikasi ini dapat memberikan notifikasi sebelum jadwal yang ditentukan, sehingga tidak ada perawatan penting yang terlewatkan.
                            </p>
                        </article>
                    </details>
                </li>

                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500">
                            <span>Apa yang perlu diperhatikan dalam memilih makanan terbaik untuk anjing yang memiliki alergi?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Saat memilih makanan untuk anjing yang memiliki alergi, penting untuk mengidentifikasi alergen yang spesifik melalui pemeriksaan dokter hewan.
                                Pilih makanan yang bebas dari bahan-bahan yang dapat memicu alergi, seperti gandum, jagung, atau protein tertentu (misalnya, ayam atau daging sapi).
                                Pilih makanan yang diformulasikan untuk anjing dengan masalah sensitivitas, biasanya mengandung protein yang dihidrolisis atau protein novel (dari sumber yang jarang digunakan seperti kelinci atau ikan).
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500" >
                            <span>Mengapa penting untuk memberikan mainan yang sesuai untuk kelinci?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Mainan membantu kelinci menyalurkan perilaku alami mereka seperti menggali dan mengunyah, yang penting untuk kesehatannya.
                                Mainan yang sesuai dapat mencegah kebosanan dan stres, yang bisa mengarah pada masalah perilaku dan kesehatan.
                                Mainan kunyah juga membantu menjaga kesehatan gigi kelinci, karena gigi mereka terus tumbuh dan perlu digerinda secara alami.
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500">
                            <span>Bagaimana cara menjaga kandang hamster agar tetap bersih dan nyaman untuk hewan peliharaan?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Bersihkan kandang hamster secara rutin dengan mengganti alas kandang setidaknya sekali
                                seminggu. Pastikan juga membersihkan area makan dan minum setiap hari untuk mencegah
                                pertumbuhan bakteri. Gunakan bahan alas yang aman, seperti serutan kayu yang
                                tidak beraroma, dan pastikan kandang memiliki sirkulasi udara yang baik.
                                Hindari penggunaan pembersih yang keras atau beraroma kuat yang bisa mengganggu
                                sistem pernapasan hamster.
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500" >
                            <span>Manfaat menggunakan aplikasi untuk mengatur jadwal vaksinasi dan kunjungan dokter hewan untuk anjing?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Aplikasi ini membantu pemilik anjing untuk tidak melewatkan vaksinasi atau pemeriksaan rutin,
                                yang penting untuk mencegah penyakit dan menjaga kesehatan anjing dalam jangka panjang.
                                Notifikasi dan pengingat dari aplikasi memastikan anjing mendapatkan perawatan tepat waktu.
                                Beberapa aplikasi juga menyimpan riwayat medis, sehingga informasi kesehatan anjing mudah diakses saat dibutuhkan.
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500" >
                            <span>Bagaimana aplikasi pelacak kesehatan hewan peliharaan dapat membantu mendeteksi masalah kesehatan pada kucing lebih awal?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Aplikasi pelacak kesehatan dapat merekam aktivitas harian, pola makan, dan perilaku kucing.
                                Jika terjadi perubahan seperti penurunan aktivitas, pola makan yang tidak normal,
                                atau perubahan kebiasaan buang air, aplikasi ini dapat memberi peringatan kepada pemilik.
                                Deteksi dini ini membantu mengidentifikasi masalah kesehatan yang mungkin tidak langsung terlihat,
                                seperti penyakit ginjal atau diabetes.
                            </p>
                        </article>
                    </details>
                </li>

                <li>
                    <details class="group">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between font-medium bg-first p-5 text-white bg-[#C30054] hover:bg-pink-500">
                            <span>Peran sosialisasi dalam perkembangan perilaku anjing dan bagaimana pemilik bisa memantau proses ini melalui aplikasi khusus?</span>
                            <span class="transition group-open:rotate-90">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Sosialisasi membantu anjing belajar berinteraksi dengan lingkungan, manusia, dan hewan lain.
                                Proses ini penting untuk membentuk perilaku yang stabil dan mencegah masalah perilaku seperti ketakutan atau agresi.
                                Aplikasi khusus dapat membantu pemilik memantau dan menjadwalkan sesi sosialisasi, merekam kemajuan,
                                serta memberikan panduan tentang cara terbaik mengajarkan keterampilan sosial kepada anjing sesuai tahap perkembangannya.
                            </p>
                        </article>
                    </details>
                </li>
            </ul>
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