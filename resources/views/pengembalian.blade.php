@extends('mainmember')

    @section('container')
    <form action="{{ route('pengembalianstore') }}" method="post">
    @csrf
        <div>
            <h4>Return Book</h4>
        </div>
        <div class="nav justify-content-end" style="">
            <a class="icon-link" href="#">
                <a href="{{ url('/memberdashboard') }}">Back</a>
            </a>
        </div>
        <div><br></div>
        <div class="nav justify-content-center nav-underline">
            <select class="form-control nama_buku" aria-label="Default select example name="buku">
                <option selected>Select Your Book</option>
                @foreach($buku as $key => $value)
                <option value="{{ $value->id }}">{{ $value->nama_buku }}</option>
                @endforeach
              </select>
        </div>
        <div><br></div>
        <div class="nav justify-content-center">
            <button type="submit">Save</button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.nama_buku').select2();
    })
    </script>

@endsection
