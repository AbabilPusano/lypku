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
                <img class="h-10" src="images/lyp.png" alt="">
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
                            placeholder="Cari di Love Your Pets" required />
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
                    <p class="font-semibold text-nowrap">Ahmad Hasan Faqih</p>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section id="detail" class="py-16 lg:px-36 bg-gray-100 mt-16 mx-auto">
            <div class="flex flex-wrap gap justify-center">
                <div class="flex flex-col gap-4 w-full lg:w-2/3 p-2">
                    <div class="flex flex-col gap-4 bg-white p-6 rounded-lg font-poppins">
                        <div class="flex items-center gap-4">
                            <input type="checkbox" id="checkAll" class="w-4 h-4 accent-[#D91656]">
                            <script>
                                // Event listener untuk checkbox "Pilih Semua"
                                document.getElementById('checkAll').addEventListener('change', function () {
                                    const checkboxes = document.querySelectorAll('.item-checkbox');
                                    checkboxes.forEach(checkbox => {
                                        checkbox.checked = this.checked;
                                    });
                                });

                            </script>
                            <div class="flex w-full justify-between">
                                <div>Pilih Semua</div>
                                <div>Hapus</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 bg-white p-6 rounded-lg font-poppins">
                        <div class="flex gap-4">
                            <input type="checkbox" class="item-checkbox w-4 h-4 accent-[#D91656]" checked>
                            <img class="w-20 rounded-md" src="images/obat (1).png" alt="">
                            <div class="flex flex-col w-full">
                                <div>Obat</div>
                                <div class="flex justify-between">
                                    <div>x1</div>
                                    <div>Rp. 4.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 bg-white p-6 rounded-lg font-poppins">
                        <div class="flex gap-4">
                            <input type="checkbox" class="item-checkbox w-4 h-4 accent-[#D91656]" checked>
                            <img class="w-20 rounded-md" src="images/makan  (10).png" alt="">
                            <div class="flex flex-col w-full">
                                <div>Makanan</div>
                                <div class="flex justify-between">
                                    <div>x1</div>
                                    <div>Rp. 4.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 p-2">
                    <div class="flex flex-col p-6 bg-white gap-2 rounded-lg font-poppins">
                        <div class="flex flex-col gap-4">
                            <div class="text-2xl font-bold">
                                Ringkasan Belanja
                            </div>
                            <div class="text-md font-medium">
                                <div class="flex justify-between">
                                    <div>Total Belanja</div>
                                    <div>Rp 8.000</div>
                                </div>
                            </div>
                            <a href="{{route('checkout')}}"
                                class="bg-[#D91656] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#D91656] text-white text-center w-full hover:bg-white hover:text-[#D91656]">
                                Beli

                            </a>
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
