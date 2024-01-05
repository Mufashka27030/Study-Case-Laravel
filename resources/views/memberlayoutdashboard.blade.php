@extends('mainmember')

    @section('container')
    <form>
        <div><br></div>
        <div class="nav justify-content-start"><a href="{{ route('peminjamanmember') }}">Pinjam</a></div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">ID Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($data as $loan)
                <tr>
                <th scope="row">{{ $loan->id }}</th>
                <th>{{ $loan->id_buku }}</th>
                <td>{{ $loan->buku->nama_buku}}</td>
                <td>{{ $loan->tanggal_peminjaman_buku }}</td>
                <td>{{ $loan->tanggal_pengembalian_buku }}</td>
                <td>{{ $loan->status == 0 ? "Dipinjam" : "Dikembalikan" }}</td>
                <td>
                    @if ($loan->status==0)
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal-{{$loan->id}}" href="#">Kembalikan</a>
                    @endif
                     <a href="{{ url('detailpeminjamanmember', $loan->id) }}">Detail Peminjaman</a>
                     <a href="{{ url('viewmember', $loan->id_buku) }}">Detail Buku</a></td>
                </tr>
                <div class="modal fade" id="exampleModal-{{$loan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Kembalikan Buku</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Do You Want to Return This Book : {{ $loan->buku->nama_buku }}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <a type="submit" class="btn btn-primary btn-block" href="{{ route('pengembalian', $loan->id) }}">Return</a>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
            </tbody>
          </table>
    </form>
          {{-- {{ $loan->buku->nama_buku }} --}}
    @endsection
