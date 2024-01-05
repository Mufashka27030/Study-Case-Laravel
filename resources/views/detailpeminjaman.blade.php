@extends('mainadmin')

    @section('container')
    <div class="nav justify-content-end" style="">
        <a class="icon-link" href="#">
            <a href="{{ url('/peminjamanadmin') }}">Back</a>
        </a>
    </div>
    <table>
        <tr>
            <td>
             ID Buku :  {{ $pinjam->id_buku }}
            </td>
        </tr>
        <tr>
            <td>
             Nama Buku :  {{ $pinjam->buku->nama_buku }}
            </td>
        </tr>
        <tr>
            <td class="justify-content-start">
            <p>Gambar Buku :</p>
                <img style="width:100px" src="{{ asset('gambar-buku').'/'.$pinjam->buku->gambar_buku }}">
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Peminjaman  : {{ $pinjam->tanggal_peminjaman_buku }}
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Pengembalian :  {{ $pinjam->tanggal_pengembalian_buku }}
            </td>
        </tr>
        <tr>
            <td>
                Status : {{ $pinjam->status == 0 ? "Dipinjam" : "Dikembalikan" }}
                @if ($pinjam->status==0)
                    {{-- <a data-bs-toggle="modal" data-bs-target="#exampleModal-{{$loan->id}}" href="#">Kembalikan</a> --}}
                @endif
            </td>
        </tr>
        <td><a></a>
        </table>
    @endsection
