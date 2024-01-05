@extends('mainadmin')

    @section('container')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Member</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Pengembalian</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($peminjaman as $pinjam)
          <tr>
            <th scope="row">{{ $pinjam->memberid }}</th>
            <td>{{ $pinjam->id_buku }}</td>
            <td>{{ $pinjam->buku->nama_buku }}</td>
            <td>{{ $pinjam->tanggal_peminjaman_buku }}</td>
            <td>{{ $pinjam->tanggal_pengembalian_buku}}</td>
            <td><a href="{{ url('detailpeminjaman', $pinjam->id_buku) }}">Detail Peminjaman</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>

    @endsection

