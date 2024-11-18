<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;

class fullController extends Controller
{
    private $url = 'http://127.0.0.1:8000/api';

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        try {
            // Kirim data ke API menggunakan Http Client Laravel
            $response = Http::post("{$this->url}/register", [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            // Jika API mengembalikan status sukses
            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Registrasi berhasil.',
                ]);
            }

            // Jika API mengembalikan error
            return response()->json([
                'status' => 'error',
                'message' => $response->json()['message'] ?? 'Gagal melakukan registrasi.',
            ], $response->status());

        } catch (\Exception $e) {
            // Tangani error jika API tidak dapat dihubungi
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghubungi server.',
            ], 500);
        }
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        try {
            // Kirim data ke API
            $response = Http::post('http://127.0.0.1:8000/api/login', [
                'email' => $request->email,
                'password' => $request->password,
            ]);

            // Periksa apakah respons berhasil
            if ($response->successful()) {
                $data = $response->json();

                // Simpan token dan user ID di session
                session([
                    'access_token' => $data['access_token'], // Token akses
                    'user_id' => $data['user']['id'], // ID pengguna
                    'user_name' => $data['user']['name'], // Nama pengguna
                    'user_email' => $data['user']['email'], // Email pengguna
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Login berhasil.',
                ]);
            }

            // Jika login gagal
            return response()->json([
                'status' => 'error',
                'message' => $response->json()['message'] ?? 'Email atau password salah.',
            ], $response->status());
        } catch (\Exception $e) {
            // Tangani error jika terjadi kesalahan saat menghubungi API
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghubungi server.',
            ], 500);
        }
    }


    public function logout(Request $request)
    {
        // Hapus session token
        $request->session()->forget('access_token');

        // Redirect ke halaman utama
        return redirect()->route('home');
    }

    public function index()
    {
        // Ambil data dari API
        $response = Http::get("{$this->url}/artikel");

        // Cek apakah API berhasil diakses
        if ($response->successful()) {
            $data = $response->json();
        } else {
            $data = []; // Jika gagal, gunakan array kosong
        }

        // Kirim data ke view
        return view('admin.artikelad', ['artikels' => $data]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        'judul' => 'required|string',
        'deskripsi' => 'required|string',
    ]);

    // Handle file upload
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');

        // Kirim request ke API
        $response = Http::attach(
            'gambar', // Key untuk gambar
            file_get_contents($file), // Isi file
            $file->getClientOriginalName() // Nama asli file
        )->post("{$this->url}/artikel", [
            'judul' => $validatedData['judul'],
            'deskripsi' => $validatedData['deskripsi'],
        ]);

        // Periksa respons API
        if ($response->successful()) {
            return response()->json([
                'message' => 'Artikel berhasil ditambahkan',
                'data' => $response->json(),
            ]);
        }

        // Jika gagal, kembalikan error
        return response()->json([
            'message' => 'Gagal menambahkan artikel',
            'error' => $response->body(),
        ], $response->status());
    }

    // Jika file gambar tidak ditemukan
    return response()->json(['message' => 'Gambar tidak ditemukan'], 400);
}


    public function destroy($id)
    {
        // Kirim request DELETE ke API
        $response = Http::delete("{$this->url}/artikel/{$id}");

        if ($response->successful()) {
            return response()->json(['message' => 'Artikel berhasil dihapus']);
        }

        // Jika gagal, kembalikan error
        return response()->json(['message' => 'Gagal menghapus artikel', 'error' => $response->body()], $response->status());
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar opsional
        'judul' => 'required|string',
        'deskripsi' => 'required|string',
    ]);

    // Kirim data ke API
    $requestData = [
        'judul' => $validatedData['judul'],
        'deskripsi' => $validatedData['deskripsi'],
    ];

    // Jika ada file gambar, lampirkan dalam request
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');

        $response = Http::attach(
            'gambar', // Key untuk gambar
            file_get_contents($file), // Isi file
            $file->getClientOriginalName() // Nama asli file
        )->put("{$this->url}/artikel/{$id}", $requestData);
    } else {
        // Jika tidak ada gambar, hanya kirim data lainnya
        $response = Http::put("{$this->url}/artikel/{$id}", $requestData);
    }

    // Periksa respons API
    if ($response->successful()) {
        return response()->json(['message' => 'Artikel berhasil diedit']);
    }

    // Jika gagal, kembalikan error
    return response()->json([
        'message' => 'Gagal mengedit artikel',
        'error' => $response->body(),
    ], $response->status());
}


    public function indexArtikel(Request $request)
    {
        // Ambil data artikel dari API
        $response = Http::get("{$this->url}/artikel");

        if ($response->successful()) {
            $artikels = collect($response->json()); // Konversi data ke koleksi Laravel
        } else {
            $artikels = collect([]); // Jika gagal, gunakan koleksi kosong
        }

        // Gunakan paginate manual dengan koleksi
        $perPage = 6;
        $page = $request->get('page', 1); // Ambil halaman saat ini
        $paginatedArticles = $artikels->forPage($page, $perPage); // Ambil data per halaman

        // Buat pagination
        $pagination = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginatedArticles, // Data artikel per halaman
            $artikels->count(), // Total artikel
            $perPage, // Jumlah artikel per halaman
            $page, // Halaman saat ini
            ['path' => $request->url(), 'query' => $request->query()] // URL dan query
        );

        // Kirim data ke view
        return view('artikel', ['artikels' => $pagination]);
    }

    public function showArtikel($id)
    {
        $response = Http::get("{$this->url}/artikel/{$id}");

    if ($response->successful()) {
        $artikel = $response->json();
    } else {
        $artikel = null; // Jika gagal, tampilkan null
    }

    return view('isi_artikel', ['artikel' => $artikel]);
    }

    public function indexListHem(Request $request)
    {
        // Periksa apakah user sudah login (cek session user_id)
        if (!session()->has('user_id')) {
            return redirect()->route('home')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil user_id dari session
        $userId = session('user_id');

        // Panggil API untuk mendapatkan data hewan
        $response = Http::withToken(session('access_token'))->get("http://127.0.0.1:8000/api/user/{$userId}/hewans");

        if ($response->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data hewan.');
        }

        $hewans = $response->json()['data'];

        $memoryResponse = Http::withToken(session('access_token'))->get("http://127.0.0.1:8000/api/user/{$userId}/memories");

        if ($memoryResponse->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data memori.');
        }

        $memories = $memoryResponse->json()['data'];

        return view('hewan_dan_memori', compact('hewans', 'memories'));
    }

    public function indexListHewan(Request $request)
    {
        // Periksa apakah user sudah login (cek session user_id)
        if (!session()->has('user_id')) {
            return redirect()->route('home')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil user_id dari session
        $userId = session('user_id');

        // Panggil API untuk mendapatkan data hewan
        $response = Http::withToken(session('access_token'))->get("http://127.0.0.1:8000/api/user/{$userId}/hewans");

        if ($response->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data hewan.');
        }

        $hewans = $response->json()['data'];

        return view('list_hewan', compact('hewans'));
    }

    public function showHewan($id)
    {
        // Panggil API untuk mendapatkan detail hewan berdasarkan ID
        $response = Http::get("http://127.0.0.1:8000/api/hewan/{$id}");

        // Jika gagal, redirect dengan pesan error
        if ($response->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data hewan.');
        }

        // Ambil data hewan dari respons API
        $hewan = $response->json()['data'];

        // Kirim data ke view
        return view('detail_hewan', compact('hewan'));
    }

    public function indexListMemori(Request $request)
    {
        // Periksa apakah user sudah login (cek session user_id)
        if (!session()->has('user_id')) {
            return redirect()->route('home')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil user_id dari session
        $userId = session('user_id');

        // Panggil API untuk mendapatkan data memori user
        $memoryResponse = Http::withToken(session('access_token'))->get("http://127.0.0.1:8000/api/user/{$userId}/memories");

        if ($memoryResponse->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data memori.');
        }

        // Panggil API untuk mendapatkan data hewan milik user
        $hewanResponse = Http::withToken(session('access_token'))->get("http://127.0.0.1:8000/api/user/{$userId}/hewans");

        if ($hewanResponse->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data hewan.');
        }

        // Ambil data memori dan hewan dari respons API
        $memories = $memoryResponse->json()['data'];
        $hewans = $hewanResponse->json()['data'];

        // Kirim data ke view
        return view('list_memori', compact('memories', 'hewans'));
    }

    public function showMemori($id)
    {
        // Panggil API untuk mendapatkan detail memori berdasarkan ID
        $response = Http::get("http://127.0.0.1:8000/api/memory/{$id}");

        // Jika gagal, redirect dengan pesan error
        if ($response->failed()) {
            return redirect()->route('home')->with('error', 'Gagal mengambil data memori.');
        }

        // Ambil data memori dari respons API
        $memori = $response->json()['data'];

        // Kirim data ke view
        return view('detail_memori', compact('memori'));
    }

    public function indexAdmin(){
        if (!session()->has('access_token')) {
            return redirect()->route('home')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('admin.dashboardad');
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('myPDF');

        return $pdf->download('itsolutionstuff.pdf');
    }

}
