@extends('mainmember')

    @section('container')
    <form action="{{ route('peminjamanmemberstore') }}" method="post">
    @csrf
        <div>
            <h4>Loan Book</h4>
        </div>
        <div class="nav justify-content-end" style="">
            <a class="icon-link" href="#">
                <a href="{{ url('/memberdashboard') }}">Back</a>
            </a>
        </div>
        <div><br></div>
        <div class="nav justify-content-center nav-underline">
            <select class="form-control nama_buku" aria-label="Default select example" name="buku" required>
                <option selected>Select Your Book</option>
                @foreach($buku as $key => $value)
                @if ($value->stok_buku != 0)
                <option value="{{ $value->id }}">{{ $value->nama_buku }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div><br></div>
        <div class="nav justify-content-center nav-underline">
            <label for="birthday">Select Date Loan Book</label>
            <input name="tanggal_peminjaman_buku" type="date" id="loanbook" required>
        </div>
        <div><br></div>
        <div class="nav justify-content-center nav-underline">
            <label for="birthday">Select Date Return Book</label>
            <input name="tanggal_pengembalian_buku" type="date" id="returnbook" required>
        </div>
        <div><br></div>
        <div class="nav justify-content-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
    @endsection
