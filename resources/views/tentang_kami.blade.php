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
    <main>
      <!-- Know About Us -->
        <section id="tentang" class="px-4 lg:px-40 py-40 bg-[#FBF6F0]">
            <div class="container mx-auto flex flex-col lg:flex-row gap-5 justify-center">
                <div class="w-full lg:w-2/8 lg:px-16">
                    <h2 class="text-xl lg:text-4xl font-poppins font-bold mb-2 lg:mb-6">
                        Tentang <span class="text-[#D91656]">Love Your Pets
                        <img src="images/garispink.png" alt="" class="mt-4 w-32">
                    </h2>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-800 first-line:indent-4">
                        Selamat datang di Love Your Pets, platform digital yang diciptakan khusus untuk para
                        pecinta hewan peliharaan. Kami hadir dengan misi untuk memastikan setiap hewan kesayangan
                        mendapatkan perawatan terbaik, dengan kemudahan akses terhadap berbagai layanan penting.
                        Di website ini, kami menyediakan berbagai fitur lengkap yang dirancang untuk membantu
                        pemilik hewan memelihara dan merawat hewan peliharaan mereka dengan lebih mudah dan teratur.
                    </p>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-800 first-line:indent-4 mt-4">
                        Salah satu fitur utama kami adalah Daftar Akun Klinik, di mana Anda dapat menemukan klinik hewan
                        terdekat yang sesuai dengan kebutuhan Anda. Kami mengumpulkan informasi tentang klinik hewan
                        profesional yang tersebar di berbagai lokasi, sehingga Anda bisa memilih klinik yang paling cocok
                        untuk hewan peliharaan Anda. Dengan satu klik, Anda dapat mengakses informasi tentang layanan yang
                        ditawarkan, jam operasional, dan kontak klinik tersebut.
                    </p>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-800 first-line:indent-4 mt-4">
                        Kami juga menyediakan fitur Chat dengan Dokter Hewan, di mana Anda bisa berkonsultasi langsung dengan
                        dokter hewan melalui pesan. Fitur ini sangat berguna untuk mendapatkan saran cepat dan tepat kapan pun
                        Anda membutuhkannya, tanpa harus meninggalkan rumah. Dengan dokter-dokter hewan yang ahli di bidangnya,
                        Anda bisa memastikan kesehatan hewan peliharaan selalu dalam pantauan yang baik.
                    </p>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-800 first-line:indent-4 mt-4">
                        Selain itu, kami menawarkan layanan Vaksinasi dan Pembuatan Janji untuk perawatan rutin hewan peliharaan.
                        Anda dapat dengan mudah menjadwalkan kunjungan vaksinasi atau pemeriksaan kesehatan lainnya sesuai dengan
                        jadwal yang tersedia. Kami bekerja sama dengan klinik dan rumah sakit hewan terpercaya yang memastikan setiap
                        kunjungan berlangsung dengan aman dan nyaman untuk hewan kesayangan Anda.
                    </p>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-800 first-line:indent-4 mt-4">
                        Tak hanya itu, website kami juga memiliki Marketplace yang menyediakan berbagai kebutuhan hewan peliharaan Anda.
                        Dari makanan, obat-obatan, hingga mainan dan aksesoris, semuanya tersedia di satu tempat. Marketplace kami dirancang
                        agar Anda bisa berbelanja kebutuhan hewan peliharaan dengan mudah dan cepat, tanpa harus berpindah-pindah platform.
                    </p>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-800 first-line:indent-4 mt-4">
                        Love Your Pets adalah solusi lengkap bagi para pemilik hewan yang peduli akan kesehatan dan kesejahteraan peliharaan mereka.
                        Kami berkomitmen untuk memberikan pengalaman yang aman, nyaman, dan bermanfaat bagi setiap pengguna. Mari bergabung bersama
                        kami dan tunjukkan cinta Anda kepada hewan kesayangan dengan memberikan mereka perawatan terbaik yang mereka butuhkan.
                    </p>
                </div>
            </div>
        </section>
    </main>

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
