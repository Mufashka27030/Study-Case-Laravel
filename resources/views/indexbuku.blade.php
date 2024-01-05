@extends('mainadmin')

    @section('container')

    <div class="nav justify-content-start"><br><a href="{{ url('add') }}">Add New Book</a></div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Kategori Buku</th>
            <th scope="col">Stok Buku</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($data as $key => $rs)
          <tr>
            <th scope="row">{{ $rs->id }}</th>
            <td>{{ $rs->nama_buku }}</td>
            <td>{{ $rs->kategori_buku }}</td>
            <td> {{ $rs->stok_buku }}</td>
            <td><a>
                <a href="{{ route('buku.view.update', $rs->id) }}">Update Book |</a>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal-{{$rs->id}}" href="#">Delete Book |</a>
                <a href="{{ url('view', $rs->id) }}">Detail Buku</a></td>
                </a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>

      @foreach($data as $keym => $rsm)

      <div class="modal fade" id="exampleModal-{{$rsm->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Book Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do You Want to Delete Book Title : {{ $rsm->nama_buku }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <a type="submit" class="btn btn-primary btn-block" href="{{ route('buku.view.delete', $rsm->id) }}">Delete</a>
            </div>
          </div>
        </div>
    </div>



      @endforeach


    @endsection
