@extends('mainadmin')

    @section('container')

    <div class="nav justify-content-end" style="">
        <a class="icon-link" href="#">
            <a href="{{ url('buku/index') }}">Back</a>
        </a>
    </div>

    <h5>Add New Buku</h5>

      <form class="row g-3" action="{{ route('buku.create') }}" method="post">
        @csrf
        <div class="col-md-6">
            <label for="IDBUKU" class="form-label">ID Buku</label>
            <input name="Id" type="number" class="form-control" id="IDBUKU"  placeholder="1" required="required">
          </div>
          <div class="col-md-6">
            <label for="NAMABUKU" class="form-label">Nama Buku</label>
            <input name="nama_buku" type="text" class="form-control" id="NAMABUKU"  placeholder="Nama Buku" required="required">
            </div>
          <div class="col-md-6">
                <label for="formFile" class="form-label">Gambar Buku</label>
                <input name="gambar_buku" class="form-control" type="file" id="formFile" value="Upload" required="required">
            </div>
          <div class="col-md-6">
            <label for="KATEGORIBUKU" class="form-label">Kategori Buku</label>
            <input name="kategori_buku" type="text" class="form-control" id="KATEGORIBUKU"  placeholder="Kategori Buku" required="required">
          </div>
          <div class="form-floating col-md-6">
            <textarea name="deskripsi_buku" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required="required"></textarea>
            <label for="floatingTextarea2">Deskripsi Buku</label>
          </div>
          <div class="col-md-6">
            <label for="KATEGORIBUKU" class="form-label">Stok</label>
            <input name="stok_buku" type="text" class="form-control" id="KATEGORIBUKU"  placeholder="Jumlah Stok Buku" required="required">
          </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
          </div>
      </form>

@endsection
