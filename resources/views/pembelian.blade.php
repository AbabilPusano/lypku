<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaniVerse</title>
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
    <div class="flex">
        <div class="flex">
            <div class="flex min-h-screen w-80 flex-col bg-[#D91656] py-4 text-gray-700">
                <nav class="flex flex-col gap-1 pr-12 font-sans text-base font-normal text-blue-gray-700">
                    <a href="{{route('home')}}l" class="flex items-center whitespace-nowrap text-2xl">
                        <img class="ml-8 w-32 lg:w-24" src="image/logo-taniverse-putih.png" alt="">
                    </a>
                    <a href="{{route('profil')}}"
                        class="mt-8 text-white font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#D91656] focus:bg-[#FBF6F0] focus:text-[#D91656] active:bg-[#FBF6F0] active:text-[#D91656]">
                        <div class="grid mr-4 place-items-center">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        Profil
                    </a>
                    <a href="{{route('alamat')}}"
                        class="text-white font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#D91656] focus:bg-[#FBF6F0] focus:text-[#D91656] active:bg-[#FBF6F0] active:text-[#D91656]">
                        <div class="grid mr-4 place-items-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        Alamat
                    </a>
                    <a href="{{route('pembelian')}}"
                        class="text-[#D91656] bg-[#FBF6F0] font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#D91656] focus:bg-[#FBF6F0] focus:text-[#D91656] active:bg-[#FBF6F0] active:text-[#D91656]">
                        <div class="grid mr-4 place-items-center">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                        Pembelian
                    </a>
                    <div role="button"
                        class="text-white font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#D91656] focus:bg-[#FBF6F0] focus:text-[#D91656] active:bg-[#FBF6F0] active:text-[#D91656]">
                        <div class="grid mr-4 place-items-center">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>
                        Log Out
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex flex-col w-full">
            <header class="font-poppins shadow top-0 w-full z-10 h-16 bg-white">
                <div
                    class="bg-white relative flex align-items-center flex-row gap-5 overflow-hidden px-4 py-4 md:px-36 md:mx-auto md:flex-row md:items-center">
                    <div class="flex flex-row w-full lg:w-96">
                        <form class="w-full mx-auto">
                            <!-- <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only :text-white">Search
                            </label> -->
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <input type="search" id="default-search"
                                    class="block w-full px-2 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-[#D91656]"
                                    placeholder="Cari di Love Your Pets" required />
                                <!-- <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Search</button> -->
                            </div>
                        </form>
                    </div>

                    <div class="hidden lg:flex w-full justify-end items-center gap-3 h-full">
                        <div class="flex">
                            <!-- <button type="button" onclick="my_modal_1.showModal()"
                                class="focus:outline-none text-white hover:bg-[#FBF6F0] font-medium rounded-md text-sm w-12 aspect-square">
                                <i class="text-gray-600 fa-solid fa-bell fa-lg"></i>
                            </button> -->
                            <a href="{{route('keranjang')}}"
                                class="flex justify-center items-center focus:outline-none text-white hover:bg-gray-200 font-medium rounded-md text-sm w-12 aspect-square">
                                <i class="text-gray-600 fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                        </div>
                        <a href="{{route('profil')}}l" class="flex items-center gap-2 hover:bg-gray-200 py-1 px-2 rounded-md">
                            <img class="w-10 rounded-full" src="images/avatar-biru.jpg" alt="">
                            <p class="font-semibold text-nowrap">Ahmad Hasan Faqih Aulia</p>
                        </a>
                    </div>
                </div>
            </header>
            <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-2 flex-col mt-4 pt-10 px-4 pb-20 bg-gray-100">
                <div class="flex gap-2 rounded-lg bg-white w-full py-4">
                    <div class="px-4 py-2">Status</div>
                    <div class="px-4 py-2 text-[#D91656] rounded-lg border-2 border-[#D91656] bg-green-50 hover:bg-green-50 hover:text-[#D91656] hover:border-[#D91656]">Semua</div>
                    <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#D91656] hover:border-[#D91656]">Belum Bayar</div>
                    <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#D91656] hover:border-[#D91656]">Sedang Dikemas</div>
                    <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#D91656] hover:border-[#D91656]">Dikirim</div>
                    <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#D91656] hover:border-[#D91656]">Selesai</div>
                    <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#D91656] hover:border-[#D91656]">Dibatalkan</div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex gap-4 flex-col bg-white w-full p-4 rounded-lg">
                        <div class="flex w-full gap-5">
                            <img class="w-20" src="images/makan  (8).png" alt="">
                            <div class="flex flex-col gap- w-full">
                                <div>Makanan</div>
                                <div class="flex justify-between">
                                    <div>x1</div>
                                    <div>Rp. 4.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full gap-5">
                            <img class="w-20" src="images/obat (6).png" alt="">
                            <div class="flex flex-col gap- w-full">
                                <div>Obat</div>
                                <div class="flex justify-between">
                                    <div>x1</div>
                                    <div>Rp. 4.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-truck"></i>
                                <div>Pesanan telah sampai</div>
                            </div>
                            <div class="flex justify-end gap-4">
                                <div>Total Pesanan:</div>
                                <div class="text-primary">Rp. 8.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-4 flex-col bg-white w-full p-4 rounded-lg">
                            <div class="flex w-full gap-5">
                                <img class="w-20" src="images/makan  (8).png" alt="">
                                <div class="flex flex-col gap- w-full">
                                    <div>Makanan</div>
                                    <div class="flex justify-between">
                                        <div>x1</div>
                                        <div>Rp. 4.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full gap-5">
                                <img class="w-20" src="images/obat (6).png" alt="">
                                <div class="flex flex-col gap- w-full">
                                    <div>Obat</div>
                                    <div class="flex justify-between">
                                        <div>x1</div>
                                        <div>Rp. 4.000</div>
                                    </div>
                                </div>
                            </div>
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-truck"></i>
                                <div>Pesanan telah sampai</div>
                            </div>
                            <div class="flex justify-end gap-4">
                                <div>Total Pesanan:</div>
                                <div class="text-primary">Rp. 8.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

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
