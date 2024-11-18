<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Your Pets</title>
    <link rel="icon" type="image/png" href="{{url('image/favicon.png')}}">

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
         class="text-[#D91656] border-2 md:mr-12 px-4 py-2 border-pink-600 cursor-pointer hover:bg-pink-100 hover:border-pink-500 focus:bg-pink-100 focus:border-pink-500" onclick="modal_login.showModal()">Masuk</button>
     @endif
     @if(session('access_token'))
        <li class="text-[#D91656] border-b-2 border-white md:mr-12 hover:border-pink-600 font-poppins font-bold">
            <a href="{{route('hem')}}">Hewan & Memori</a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" class="inline" id="logoutForm">
                @csrf
                <button type="button" class="text-[#D91656] border-2 md:mr-12 px-4 py-2 border-pink-600 cursor-pointer hover:bg-pink-100 hover:border-pink-500 focus:bg-pink-100 focus:border-pink-500" id="logoutButton">
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

    <section id="belanja" class="px-4 lg:px-40 py-40 bg-[#FBF6F0]">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ implode('', $errors->all(':message')) }}
            </div>
        @endif

        <div class="container mx-auto text-center">
            <h2 class="text-xl lg:text-4xl text-left font-poppins font-bold mb-8 text-black tracking-wide">
                Hewan <span class="text-[#D91656]">Peliharaanku</span></h2>

                    <p class="text-m lg:text-lg text-justify font-poppins text-gray-700">
                        Atur peliharaanmu dan jaga kenanganmu bersama mereka.
                    </p>
                    <button
                        class="bg-[#D91656] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#D91656] text-white text-center w-full hover:bg-white hover:text-[#D91656] mt-4"
                        onclick="modal_tambah.showModal()">
                        Tambah Hewan
                    </button>

                    <dialog id="modal_tambah" class="modal backdrop-blur-lg">
                        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
                            <div class="flex items-center bg-[#047D00] rounded-t-lg h-24 lg:h-40">
                                <h2 class="text-xl lg:text-2xl font-bold text-center text-white w-full m-4">Tambah Hewan</h2>
                            </div>
                            <div class="px-8 pt-4 pb-12">
                                <form id="tambahHewanForm" enctype="multipart/form-data" class="flex flex-col gap-2">
                                    @csrf
                                    <div class="flex flex-col">
                                        <label for="nama">Nama Hewan</label>
                                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama hewan"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="jenis_hewan">Jenis Hewan</label>
                                        <input type="text" id="jenis_hewan" name="jenis_hewan" placeholder="Masukkan jenis hewan"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select id="jenis_kelamin" name="jenis_kelamin"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]" required>
                                            <option value="jantan">Jantan</option>
                                            <option value="betina">Betina</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="spesies">Spesies</label>
                                        <input type="text" id="spesies" name="spesies" placeholder="Masukkan spesies (opsional)"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="keadaan">Keadaan</label>
                                        <select id="keadaan" name="keadaan"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                                            <option value="Hidup" selected>Hidup</option>
                                            <option value="Mati">Mati</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi (opsional)"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]"></textarea>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="foto">Foto</label>
                                        <input type="file" id="foto" name="foto" accept="image/*"
                                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                                    </div>
                                    <div class="flex flex-col mt-4">
                                        <button type="submit"
                                            class="p-2 rounded-md bg-[#047D00] text-white hover:bg-[#035700]">Tambah</button>
                                        <div class="spinner-border text-primary" role="status" id="loadingTambah" style="display: none;">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </dialog>


            <div class="divider my-20"><span class="font-poppins font-bold text-3xl text-[#D91656] px-8">Peliharaanku</span></div>
            <!-- Card -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 lg:justify-center">
                @foreach ($hewans as $hewan)
                    <a href="{{ route('detail_hewan', ['id' => $hewan['id']]) }}" class="flex flex-col w-full lg:w-full bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="{{ 'http://127.0.0.1:8000/gambars/' . $hewan['foto'] }}" alt="{{ $hewan['nama'] }}" class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#D91656]">
                            {{ $hewan['nama'] }}
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins font-semibold text-left ms-4 text-[#D91656]">
                            {{ $hewan['jenis_hewan'] }}
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">
                            {{ $hewan['spesies'] ?? '-' }}, {{ $hewan['umur'] ?? '-' }} tahun
                        </h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#D91656] mb-2">{{ $hewan['deskripsi'] ?? 'Tidak ada deskripsi.' }}</div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>

    <footer class="px-4 lg:px-36 py-8 bg-[#C30054] text-white">
        <div class="container mx-auto flex flex-wrap">
            <!-- Kolom Pertama -->
            <div class="w-full flex flex-col gap-4 lg:w-1/2">
                <!-- <h3 class="text-4xl font-poppins font-bold mb-4">TaniVerse.</h3> -->
                <img src="{{url('images/logo lv rev.png')}}" class="w-28 lg:w-32" alt="">
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
                        <img class="w-8" src="{{url('images/instagram_logo.png')}}" alt="">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61566865310788">
                        <img class="w-8" src="{{url('images/facebook_logo.png')}}" alt="">
                    </a>
                    <a href="http://wa.me/6287871790442">
                        <img class="w-8" src="{{url('images/whatsapp_logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- Kolom Ketiga -->
            <div class="w-full lg:w-1/4 flex flex-col gap-4 justify-center items-center">
                <img class="w-60" src="{{url('images/logo (11).png')}}" alt="">
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
            const navLinks = document.querySelectorAll("header div nav ul li a");

            window.addEventListener("scroll", handleNavbar);

            function handleNavbar() {

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

            const registerForm = document.getElementById('registerForm');
            const namaRegister = document.getElementById('namaRegister');
            const usernameRegister = document.getElementById('username-register');
            const toggleRegister = document.getElementById('toggle-pw');
            const passwordRegister = document.getElementById('password-register');
            const modalRegister = document.getElementById('modal_register');
            const modalLogin = document.getElementById('modal_login');

            registerForm.addEventListener('submit', async function (event) {
                event.preventDefault(); // Mencegah form reload halaman

                // Tampilkan spinner
                document.getElementById('loadreg').style.display = 'flex';

                // Validasi input
                const errors = [];
                if (!namaRegister.value.trim()) {
                    errors.push('Nama harus diisi.');
                }
                if (!usernameRegister.value.trim() || !/\S+@\S+\.\S+/.test(usernameRegister.value)) {
                    errors.push('Email harus valid.');
                }
                if (!passwordRegister.value.trim() || passwordRegister.value.length < 8) {
                    errors.push('Password minimal 8 karakter.');
                }

                if (errors.length > 0) {
                    // Sembunyikan spinner jika validasi gagal
                    document.getElementById('loadreg').style.display = 'none';
                    alert(errors.join('\n'));
                    return;
                }

                // Kirim data ke server
                try {
                    const response = await fetch('{{ route('register') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            name: namaRegister.value.trim(),
                            email: usernameRegister.value.trim(),
                            password: passwordRegister.value.trim(),
                        }),
                    });

                    const result = await response.json();

                    if (response.ok && result.status === 'success') {
                        // Jika sukses
                        document.getElementById('loadreg').style.display = 'none';
                        alert('Registrasi berhasil!');
                        modalRegister.close();
                        modalLogin.showModal();
                    } else {
                        // Jika gagal dari server
                        document.getElementById('loadreg').style.display = 'none';
                        alert(result.message || 'Terjadi kesalahan saat registrasi.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    document.getElementById('loadreg').style.display = 'none';
                    alert('Terjadi kesalahan saat menghubungi server.');
                }
            });


            toggleRegister.addEventListener('change', function () {
                if (this.checked) {
                    passwordRegister.type = 'text'; // Password terlihat
                } else {
                    passwordRegister.type = 'password'; // Password tersembunyi
                }
            });

            const loginForm = document.getElementById('loginForm');
            const emailLogin = document.getElementById('emailLogin');
            const passwordLogin = document.getElementById('passwordLogin');

            loginForm.addEventListener('submit', async function (event) {
                event.preventDefault(); // Mencegah form reload halaman

                // Validasi input
                if (!emailLogin.value.trim() || !/\S+@\S+\.\S+/.test(emailLogin.value)) {
                    alert('Email harus valid.');
                    return;
                }
                if (!passwordLogin.value.trim() || passwordLogin.value.length < 8) {
                    alert('Password minimal 8 karakter.');
                    return;
                }

                // Kirim data ke route Laravel
                try {
                    const response = await fetch('{{ route('login') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            email: emailLogin.value.trim(),
                            password: passwordLogin.value.trim(),
                        }),
                    });

                    const result = await response.json();

                    if (result.status === 'success') {
                        // Tampilkan pesan sukses dan redirect
                        alert(result.message);
                        modalLogin.close();
                        window.location.href = '/'; // Ubah sesuai dengan halaman tujuan
                    } else {
                        // Tampilkan pesan error
                        alert(result.message || 'Login gagal.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menghubungi server.');
                }
            });

            const logoutButton = document.getElementById('logoutButton');
            const logoutForm = document.getElementById('logoutForm');

            logoutButton.addEventListener('click', function (event) {
                event.preventDefault(); // Mencegah tombol langsung mengirimkan form

                const confirmLogout = confirm('Apakah Anda yakin ingin logout?');
                if (confirmLogout) {
                    logoutForm.submit(); // Kirim form jika konfirmasi logout
                }
            });

        });

        const tambahHewanForm = document.getElementById("tambahHewanForm");
        const loadingTambah = document.getElementById("loadingTambah");

        tambahHewanForm.addEventListener("submit", async function (event) {
            event.preventDefault(); // Mencegah form melakukan reload halaman

            // Tampilkan spinner loading
            loadingTambah.style.display = "block";

            // Ambil data dari form
            const formData = new FormData(tambahHewanForm);
            formData.append("user_id", "{{ session('user_id') }}"); // Tambahkan user_id dari session

            try {
                // Kirim data ke API menggunakan Fetch API
                const response = await fetch("http://127.0.0.1:8000/api/hewan", {
                    method: "POST",
                    headers: {
                        "Authorization": "Bearer {{ session('access_token') }}", // Tambahkan token dari session
                    },
                    body: formData,
                });

                const result = await response.json();

                if (response.ok) {
                    // Jika berhasil, sembunyikan spinner dan tampilkan pesan sukses
                    loadingTambah.style.display = "none";
                    alert("Hewan berhasil ditambahkan!");

                    // Tutup modal
                    document.getElementById("modal_tambah").close();

                    // Refresh halaman untuk memperbarui daftar hewan
                    location.reload();
                } else {
                    // Jika gagal, sembunyikan spinner dan tampilkan pesan error
                    loadingTambah.style.display = "none";
                    alert(result.message || "Terjadi kesalahan saat menambahkan hewan.");
                }
            } catch (error) {
                console.error("Error:", error);
                loadingTambah.style.display = "none";
                alert("Terjadi kesalahan saat menghubungi server.");
            }
        });

    </script>



</body>

</html>
