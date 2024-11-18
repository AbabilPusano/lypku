<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>



    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">

<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">


  <link rel="stylesheet" href="./assets/compiled/css/table-datatable.css">
  <link rel="stylesheet" href="./assets/compiled/css/app.css">
  <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">

        <div id="sidebar">
            <div class="sidebar-wrapper active">

                {{-- Sidebar --}}
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li
                            class="sidebar-item ">
                            <a href="{{route('admin')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>


                        </li>

                        <li
                            class="sidebar-item active">
                            <a href="{{route('artikelad')}}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Artikel</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">

                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Artikel</h3>
                            <p class="text-subtitle text-muted">Atur Artikel.</p>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Database Artikel
                            </h5>
                        </div>

                        <a href="#" class="btn btn-primary mb-4" data-bs-toggle="modal"
                        data-bs-target="#inlineForm">Tambah</a>

                        {{-- Modal --}}
                        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Tambah Artikel</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>

                                    <div class="alert alert-success" style="display: none;" id="berhasil"><i class="bi bi-check-circle"></i> Artikel berhasil ditambahkan.</div>

                                    <form id="formTambah" action="{{ route('artikelad.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <label for="gambar">Gambar:</label>
                                            <div class="form-group">
                                                <input id="gambar" name="gambar" type="file" accept="image/*" class="form-control" required>
                                            </div>
                                            <label for="judul">Judul: </label>
                                            <div class="form-group">
                                                <input id="judul" name="judul" type="text" placeholder="judul" class="form-control" required>
                                            </div>
                                            <label for="deskripsi">Deskripsi: </label>
                                            <div class="form-group">
                                                <input id="deskripsi" name="deskripsi" type="text" placeholder="deskripsi" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" id="btnSubmit" class="btn btn-primary ms-1">
                                                <span class="d-none d-sm-block">Tambah</span>
                                            </button>
                                        </div>
                                        <!-- Loading Indicator -->
                                        <div class="spinner-border text-primary" role="status" id="loadingIndicator" style="display: none; align-items: center;">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Edit Artikel</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>

                                    <div class="alert alert-success" style="display: none;" id="berhasiledit">
                                        <i class="bi bi-check-circle"></i> Artikel berhasil diedit.
                                    </div>

                                    <form id="formEdit">
                                        @csrf
                                        <div class="modal-body">
                                            <label for="gambar">Gambar:</label>
                                            <div class="form-group">
                                                <input id="gambar" name="gambar" type="file" accept="image/*" class="form-control">
                                            </div>
                                            <label for="judul">Judul: </label>
                                            <div class="form-group">
                                                <input id="judul" name="judul" type="text" placeholder="judul" class="form-control" required>
                                            </div>
                                            <label for="deskripsi">Deskripsi: </label>
                                            <div class="form-group">
                                                <input id="deskripsi" name="deskripsi" type="text" placeholder="deskripsi" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" id="btnupdate" class="btn btn-primary ms-1">
                                                <span class="d-none d-sm-block">Edit</span>
                                            </button>
                                        </div>
                                        <!-- Loading Indicator -->
                                        <div class="spinner-border text-primary" role="status" id="loadingIndicatoredit" style="display: none; align-items: center;">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artikels as $artikel)
                                        <tr>
                                            <td>
                                                <img src="{{ 'http://127.0.0.1:8000/gambars/' . $artikel['gambar'] }}" alt="Gambar Artikel" style="width: 100px; height: auto;">
                                            </td>
                                            <td>{{ $artikel['judul'] }}</td>
                                            <td>{{ $artikel['deskripsi'] }}</td>
                                            <td>
                                                <button class="btn btn-info btnEdit"
                                                        data-id="{{ $artikel['id'] }}"
                                                        data-gambar="{{ $artikel['gambar'] }}"
                                                        data-judul="{{ $artikel['judul'] }}"
                                                        data-deskripsi="{{ $artikel['deskripsi'] }}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                    Edit
                                                </button>
                                                <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus">Hapus</button>
                                            </td>
                                        </tr>
                                        <!--Hapus Modal -->
                                        <div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel1">Hapus Artikel</h5>
                                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Apakah kamu yakin ingin menghapus?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Tutup</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger ms-1 btnHapus" data-bs-dismiss="modal" data-id="{{ $artikel['id'] }}">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Hapus</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; Synergy</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="assets/compiled/js/app.js"></script>



<script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/static/js/pages/simple-datatables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btnSubmit').on('click', function () {
        // Tampilkan loading indicator
        $('#loadingIndicator').show();

        // Ambil data dari form termasuk file
        const formData = new FormData();
        formData.append('_token', $('input[name="_token"]').val());
        formData.append('gambar', $('#gambar')[0].files[0]); // Ambil file gambar
        formData.append('judul', $('#judul').val());
        formData.append('deskripsi', $('#deskripsi').val());

        $.ajax({
            url: '{{ route('artikelad.store') }}',
            method: 'POST',
            data: formData,
            processData: false, // Wajib untuk FormData
            contentType: false, // Wajib untuk FormData
            success: function (response) {
                // Sembunyikan loading indicator
                $('#loadingIndicator').hide();

                // Tampilkan alert success
                $('#berhasil').fadeIn();

                // Reload halaman setelah beberapa detik
                setTimeout(function () {
                    location.reload(); // Refresh halaman
                }, 500);
            },
            error: function (xhr) {
                // Sembunyikan loading indicator
                $('#loadingIndicator').hide();

                // Jika gagal, tambahkan logika lain di sini
                alert('Gagal menambahkan artikel!');
                console.error(xhr.responseText);
            }
        });
    });


        $(document).on('click', '.btnHapus', function () {
            const artikelId = $(this).data('id'); // Ambil ID artikel
            const url = `{{ route('artikelad.destroy', ':id') }}`.replace(':id', artikelId);

            $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert('Artikel berhasil dihapus!');
                        location.reload(); // Refresh halaman
                    },
                    error: function (xhr) {
                        alert('Gagal menghapus artikel!');
                        console.error(xhr.responseText);
                    }
                });
        });

        $(document).on('click', '.btnEdit', function () {
            const artikelId = $(this).data('id');
            const gambar = $(this).data('gambar');
            const judul = $(this).data('judul');
            const deskripsi = $(this).data('deskripsi');

            // Isi input form dengan nilai default
            $('#edit #gambar').val(gambar);
            $('#edit #judul').val(judul);
            $('#edit #deskripsi').val(deskripsi);

            // Handle tombol Submit di modal Edit
            $('#btnupdate').off('click').on('click', function () {
                // Tampilkan loading indicator
                $('#loadingIndicatoredit').show();

                const artikelId = $(this).closest('.modal').data('id');

                // Ambil data dari form termasuk file
                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('_method', 'PUT'); // Laravel butuh method PUT
                formData.append('gambar', $('#edit #gambar')[0].files[0]); // Ambil file gambar
                formData.append('judul', $('#edit #judul').val());
                formData.append('deskripsi', $('#edit #deskripsi').val());

                // Kirim data dengan AJAX (PUT request)
                $.ajax({
                    url: `{{ url('/artikelad') }}/${artikelId}`,
                    method: 'POST', // Laravel butuh POST dengan _method PUT
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Sembunyikan loading indicator
                        $('#loadingIndicatoredit').hide();

                        // Tampilkan alert sukses
                        $('#berhasiledit').fadeIn();

                        // Refresh tabel data setelah beberapa detik
                        setTimeout(function () {
                            location.reload(); // Reload halaman
                        }, 500); // 2 detik
                    },
                    error: function (xhr) {
                        // Sembunyikan loading indicator
                        $('#loadingIndicatoredit').hide();

                        // Beri notifikasi error
                        alert('Gagal mengedit artikel!');
                        console.error(xhr.responseText);
                    }
                });
            });

        });
    });

</script>




</body>

</html>
