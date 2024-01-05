@extends('mainmember')

    @section('container')
    <div class="nav justify-content-end" style="">
        <a class="icon-link" href="#">
            <a href="{{ url('memberdashboard') }}">Back</a>
        </a>
    </div>
    <h4>View Detail Buku Member</h4>
    <h5>Detail Buku</h5>
    <table>
    <tr>
        <td>
         Nama Buku :  {{ $data->nama_buku }}
        </td>
    </tr>
    <tr>
        <td class="justify-content-start">
        <p>Gambar Buku :</p>
            <img style="width:100px" src="{{ asset('gambar-buku').'/'.$data->gambar_buku }}">
        </td>
    </tr>
    <tr>
        <td>
            Kategori Buku : {{ $data->kategori_buku }}
        </td>
    </tr>
    <tr>
        <td>
            Deskripsi Buku :  {{ $data->deskripsi_buku }}
        </td>
    </tr>
    <tr>
        <td>
            Stok Buku :  {{ $data->stok_buku }}
        </td>
    </tr>
    <td><a></a>
    </table>

    @endsection
