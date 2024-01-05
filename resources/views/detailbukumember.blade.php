<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="nav justify-content-end">
        <a type="button" class="btn btn-primary position-relative" href="{{ url('/') }}">
            Log Out
        </a>
    </div>
    <div>
        <ul class="nav justify-content-center">
            <h2>Library Website</h2>
          </ul>
    </div>
    <div>
        <ul class="nav justify-content-center nav-underline">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('peminjaman') }}">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('member') }}">Member</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Master</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="{{ url('buku/index') }}">BUKU</a></li>
                </ul>
              </li>
          </ul>
    </div>
    <div class="nav justify-content-end" style="">
        <a class="icon-link" href="#">
            <a href="{{ url('/memberdashboard') }}">Back</a>
        </a>
    </div>
    <h4>View Detail Buku</h4>
    <h5>Detail Buku</h5>
    <p>ID Buku : #01</p>
    <p>Nama Buku : Sejarah Dunia Yang Disembunyikan</p>
    <img src="ImageBook.jpg" class="img-thumbnail" alt="Book" width="200">
    <p>Kategori Buku : Sejarah</p>
    <p>Sinopsis : Sejarah Dunia yang Disembunyikan adalah salah satu buku dari sekian banyaknya buku yang menceritakan tentang sejarah, buku ini sangat menarik dan wajib untuk ditambahkan kedalam koleksi buku semua orang karena topiknya yang menarik dan universal. Buku ini memberi pengetahuan menarik sejarah dunia yang mungkin tidak diketahui semua orang dan bahkan mungkin saja sengaja disembunyikan oleh pihak-pihak yang tidak ingin sejarah tersebut diketahui oleh orang banyak. Buku sejarah ini didukung oleh berbagai fakta, mitos, dan legenda dalam sejarah manusia sehingga topik yang terlihat berat ini menjadi menarik untuk dibaca. Pemaparan tentang sejarah-sejarah ini akan membuat pembaca merenungkan kembali tentang sejarah yang sudah berkembang dan bagaimana cara-cara manusia termasuk pembaca sendiri, dalam memandang suatu sejarah.</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
