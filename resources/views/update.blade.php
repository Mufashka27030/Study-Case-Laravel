@extends('mainadmin')

    @section('container')

    <form class="row g-3" action="{{ route('buku.edit') }}" method="post">
        @csrf
    <h5>Update Data Buku</h5>

    <div class="nav justify-content-end" style="">
        <a class="icon-link" href="#">
            <a href="{{ url('buku/index') }}">Back</a>
        </a>
    </div>

        <div class="col-md-6">
            <label for="IDBUKU" class="form-label">ID Buku</label>
            <input name="Id" class="form-control" id="IDBUKU"  value="{{ $buku->id }}">
          </div>
          <div class="col-md-6">
            <label for="NAMABUKU" class="form-label">Nama Buku</label>
            <input name="nama_buku" class="form-control" id="NAMABUKU"  value="{{ $buku->nama_buku }}" required="required">
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Gambar Buku</label>
                <input name="gambar_buku" class="form-control" type="file" id="formFile" value="{{ $buku->gambar_buku }}">
            </div>
          <div class="col-md-6">
            <label for="KATEGORIBUKU" class="form-label">Kategori Buku</label>
            <input name="kategori_buku" type="text" class="form-control" id="KATEGORIBUKU"  value="{{ $buku->kategori_buku }}" required="required">
          </div>
          <div class="form-floating col-md-6">
            <textarea name="deskripsi_buku" class="form-control" value="" id="floatingTextarea2" style="height: 100px" required="required">{{ $buku->deskripsi_buku }}</textarea>
            <label for="floatingTextarea2">Deskripsi Buku</label>
          </div>
          <div class="col-md-6">
            <label for="KATEGORIBUKU" class="form-label">Stok</label>
            <input name="stok_buku" type="text" class="form-control" id="KATEGORIBUKU"  value="{{ $buku->stok_buku }}" required="required">
          </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block" value="Update Data">Update</button>
          </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </form>
@endsection
