@extends('mainadmin')

    @section('container')

    <div>
        <div>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Buku</h5>
                      <p class="card-text">Jika Ingin Mengetahui Informasi Mengenai Total Buku Saat Ini.</p>
                      <a href="#" class="btn btn-primary">X</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Member</h5>
                      <p class="card-text">Jika Ingin Mengetahui Informasi Mengenai Member Saat Ini.</p>
                      <a href="#" class="btn btn-primary">X</a>
                    </div>
                  </div>
                </div>
              </div>
           </div>
            <div>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Terpinjam</h5>
                      <p class="card-text">Jika Ingin Mengetahui Informasi Mengenai Buku Mana Yang Sedang Dipinjam Saat Ini.</p>
                      <a href="#" class="btn btn-primary">X</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Dikembalikan</h5>
                      <p class="card-text">Jika Ingin Mengetahui Informasi Mengenai Buku Yang Sudah Dikembalikan Saat Ini.</p>
                      <a href="#" class="btn btn-primary">X</a>
                    </div>
                  </div>
                </div>
              </div>
           </div>
    </div>

    @endsection
