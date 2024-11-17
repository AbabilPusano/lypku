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
    <header class="font-poppins shadow fixed top-0 w-full z-10 h-20 bg-white">
        <div
            class="bg-white flex items-center h-full flex-wrap gap-5 overflow-hidden px-4 py-4 md:px-36 md:mx-auto md:flex-wrap md:items-center">
            <a href="{{route('home')}}">
                <img class="h-12" src="images/lyp-01-01.png" alt="">
            </a>
            <div class="flex ml-auto h-full lg:ml-0 flex-row w-max lg:w-96">
                <form class="w-full mx-auto">
                    <!-- <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only :text-white">Search
                    </label> -->
                    <div class="relative h-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full h-full px-2 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-[#047D00]"
                            placeholder="Cari Kebutuhan Hewan anda" required />
                        <!-- <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Search</button> -->
                    </div>
                </form>
            </div>

            <div class="hidden lg:flex items-center ml-auto gap-3 h-full">
                <div class="flex">
                    <!-- <button type="button" onclick="my_modal_1.showModal()"
                        class="focus:outline-none text-white hover:bg-gray-200 font-medium rounded-md text-sm w-12 aspect-square">
                        <i class="text-gray-600 fa-solid fa-bell fa-lg"></i>
                    </button> -->
                    <a href="{{route('keranjang')}}"
                        class="flex justify-center items-center focus:outline-none text-white hover:bg-gray-200 font-medium rounded-md text-sm w-12 aspect-square">
                        <i class="text-gray-600 fa-solid fa-cart-shopping fa-lg"></i>
                    </a>
                </div>
                <a href="{{route('profil')}}" class="flex items-center gap-2 hover:bg-gray-200 py-1 px-2 rounded-md">
                    <img class="w-10 rounded-full" src="images/avatar-biru.jpg" alt="">
                    <p class="font-semibold text-nowrap">Ahmad Hasan Faqih Aulia</p>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section id="detail" class="py-16 lg:px-36 bg-gray-100 mt-16 mx-auto">
            <div class="flex flex-wrap justify-center">
                <div class="flex w-full lg:w-2/3 p-2">
                    <div class="flex flex-col lg:flex-row bg-white rounded-lg p-4">
                        <div class="flex w-full lg:w-1/3 rounded-lg justify-center">
                            <div class="h-45">
                                <img src="images/makan  (11).png" class="h-45 rounded-lg" />
                            </div>
                        </div>
                        <div class="flex flex-col w-full lg:w-2/3 px-0 lg:px-4 mt-4 lg:mt-0 gap-2 rounded-lg transition duration-300 font-poppins">
                            <div class="flex flex-col">
                                <p class="text-2xl font-bold text-[#D91656]">Britter Bunny 1kg</p>
                                <div class="flex flex-row lg:flex-col justify-between">
                                    <p class="lg:text-3xl font-semibold text-[#D91656]">Rp. 36.500</p>
                                    <div class="flex flex-row items-center gap-3">
                                        <p>Terjual 100+</p>
                                        <p>•</p>
                                        <div>
                                            <i class="fa-solid fa-star text-yellow-400"></i> (5 rating)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Makanan pelet formulasi nutrisi lengkap bernilai tinggi & ny penuh kualitas nutrisi untuk memenuhi kebutuhan kelinci Anda. Segar sebagaimana makanan alami karena penuh vitamin & mineral yang ditemukan pada tan & sayuran yang membuat tetap sehat, segar, cerah & hidupnya kelinci yang Anda cintai.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/3 rounded-lg p-2">
                    <div class="flex flex-col w-full gap-2 rounded-lg p-4 font-poppins bg-white hidden lg:block">
                        <!-- Large Screen -->
                        <div>
                            <div class="text-2xl font-bold text-[#D91656]">Atur jumlah</div>
                            <div class="mt-2 flex items-center justify-between">
                                <div class="flex items-center justify-center">
                                    <button class="text-[#D91656] px-3 py-2 border-2 border-[#D91656] rounded-l-lg hover:text-white hover:bg-[#D91656] w-full">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <div class="px-4 py-2 border-y-2 border-[#D91656]">
                                        <p class="text-center">1</p>
                                    </div>
                                    <button class="text-[#D91656] px-3 py-2 border-2 border-[#D91656] rounded-r-lg hover:text-white hover:bg-[#D91656] w-full">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                                <p>Stok total : 19</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-[#D91656]">Subtotal</p>
                                <p class="text-xl font-bold text-[#D91656]">Rp. 36.500</p>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="hidden lg:flex flex-row lg:flex-col gap-3 items-center justify-center">
                                <a href="{{route('keranjang')}}" class="bg-[#D91656] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#D91656] text-white text-center w-full hover:bg-white hover:text-[#D91656]">
                                    + Keranjang
                                </a>
                                <a href="{{route('checkout')}}" class="font-poppins font-semibold rounded-lg px-4 py-2 border-2 text-center w-full bg-white text-[#D91656] border-[#D91656] hover:bg-[#D91656] hover:text-white hover:border-white">
                                    Beli
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="lg:hidden drop-shadow-2xl fixed bottom-0 lg:static w-full bg-white lg:bg-transparent p-2 flex flex-row lg:flex-col gap-2 items-center justify-center">
                <button href="" onclick="my_modal.showModal()" class="bg-[#047D00] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-white text-center w-full hover:bg-white hover:text-[#047D00]">
                    + Keranjang
                </button>
                <button href="" onclick="my_modal.showModal()" class="font-poppins font-semibold rounded-lg px-4 py-2 border-2 text-center w-full bg-white text-[#047D00] border-[#047D00] hover:bg-[#047D00] hover:text-white hover:border-white">
                    Beli
                </button>
            </div>
            <!-- Modal  -->
            <dialog id="my_modal" class="modal modal-bottom mx-auto min-h-full max-w-screen-sm lg:hidden">
                <div class="font-poppins modal-box bg-white text-black px-4 pt-2 pb-8">
                    <div class="flex flex-wrap">
                        <img src="image/product/Paria.png" class="flex flex-col w-1/2 rounded-lg" />
                        <div class="flex flex-col w-1/2 pl-4">
                            <div class="flex justify-end">
                                <form method="dialog">
                                    <button class="btn btn-sm btn-circle btn-ghost">✕</button>
                                </form>
                            </div>
                            <div class="mt-auto">
                                <p class="font-bold text-md"></p>
                                <p class="font-semibold text-md">Rp. 5.000</p>
                                <p>Stok total : 20</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center justify-between">
                        <div class="text-md font-semibold">Atur jumlah</div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center justify-center">
                                <button class="text-[#047D00] text-sm px-3 py-1 border-2 border-[#047D00] rounded-l-lg hover:text-white hover:bg-[#047D00] w-full">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="px-4 py-1 border-y-2 border-[#047D00]">
                                    <p class="text-sm text-center">1</p>
                                </div>
                                <button class="text-[#047D00] text-sm px-3 py-1 border-2 border-[#047D00] rounded-r-lg hover:text-white hover:bg-[#047D00] w-full">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="flex items-center justify-between ">
                            <p class="font-semibold">Subtotal</p>
                            <p class="text-md font-bold">Rp. 5.000</p>
                        </div>
                    </div>
                    <div class="relative h-8"></div>
                    <div class="absolute bottom-0 left-0 p-2 w-full flex flex-row lg:flex-col gap-2 items-center justify-center">
                        <a href="{{route('keranjang')}}" class="bg-[#047D00] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-white text-center w-full hover:bg-white hover:text-[#047D00]">
                            + Keranjang
                        </a>
                        <a href="{{route('checkout')}}" class="font-poppins font-semibold rounded-lg px-4 py-2 border-2 text-center w-full bg-white text-[#047D00] border-[#047D00] hover:bg-[#047D00] hover:text-white hover:border-white">
                            Beli
                        </a>
                    </div>
                </div>
            </dialog>
            <div class="mt-0 p-2 flex flex-col lg:flex-row w-full">
                <div
                    class="flex flex-col lg:flex-row justify-start gap-5 px-4 bg-white rounded-lg p-4 w-full font-poppins">
                    <div class="flex flex-col">
                        <p class="text-2xl font-semibold">Rating</p>
                        <div class="flex items-center justify-center gap-3">
                            <i class="text-4xl fa-solid fa-star text-yellow-400"></i>
                            <p class="text-5xl">4.0<span class="text-sm">/5.0</span></p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <p class="font-semibold">100% pembeli merasa puas</p>
                            <p>5 rating • 4 ulasan</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <p class="w-4 text-center">5</p>
                                <progress class="progress w-full" value="0" max="100"></progress>
                                <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                                <p class="w-4 text-center">0</p>
                            </div>
                            <div class="flex items-center gap-2 w-full">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <p class="w-4 text-center">4</p>
                                <progress class="progress w-full" value="100" max="100"></progress>
                                <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                                <p class="w-4 text-center">4</p>
                            </div>
                            <div class="flex items-center gap-2 w-full">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <p class="w-4 text-center">3</p>
                                <progress class="progress w-full" value="0" max="100"></progress>
                                <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                                <p class="w-4 text-center">0</p>
                            </div>
                            <div class="flex items-center gap-2 w-full">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <p class="w-4 text-center">2</p>
                                <progress class="progress w-full" value="0" max="100"></progress>
                                <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                                <p class="w-4 text-center">0</p>
                            </div>
                            <div class="flex items-center gap-2 w-full">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <p class="w-4 text-center">1</p>
                                <progress class="progress w-full" value="10" max="100"></progress>
                                <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                                <p class="w-4 text-center">1</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col gap-3">
                        <p class="text-2xl font-semibold">Ulasan</p>
                        <div class="flex flex-col">
                            <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                                <div class="flex items-start gap-3">
                                    <img class="w-10 rounded-full" src="images/avatar-biru.jpg" alt="">
                                    <div>
                                        <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                            <p class="font-semibold">Ahmad Hasan Faqih Aulia</p>
                                            <p>2 jam yang lalu</p>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                            alat nya keren bgt, udah terintegrasi sama aplikasi juga
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                                <div class="flex items-start gap-3">
                                    <img class="w-10 rounded-full" src="images/avatar-biru.jpg"">
                                    <div>
                                        <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                            <p class="font-semibold">Ahmad Hasan Faqih Aulia</p>
                                            <p>2 jam yang lalu</p>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                            mantap
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                                <div class="flex items-start gap-3">
                                    <img class="w-10 rounded-full" src="images/avatar-biru.jpg" alt="">
                                    <div>
                                        <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                            <p class="font-semibold">Ahmad Hasan Faqih Aulia</p>
                                            <p>2 jam yang lalu</p>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                            okane bgt
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                                <div class="flex items-start gap-3">
                                    <img class="w-10 rounded-full" src="images/avatar-biru.jpg" alt="">
                                    <div>
                                        <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                            <p class="font-semibold">Ahmad Hasan Faqih Aulia</p>
                                            <p>2 jam yang lalu</p>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                            cincayy
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                                <div class="flex items-start gap-3">
                                    <img class="w-10 rounded-full" src="images/avatar-biru.jpg" alt="">
                                    <div>
                                        <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                            <p class="font-semibold">Ahmad Hasan Faqih Aulia</p>
                                            <p>2 jam yang lalu</p>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-star text-yellow-400"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <!-- <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                            enak bgt, bumbunya gurih.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="px-4 lg:px-36 py-8 bg-[#C30054] text-white">
        <div class="container mx-auto flex flex-wrap">
            <!-- Kolom Pertama -->
            <div class="w-full flex flex-col gap-4 lg:w-1/2">
                <!-- <h3 class="text-4xl font-poppins font-bold mb-4">Cari Kebutuhan Hewan Anda.</h3> -->
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