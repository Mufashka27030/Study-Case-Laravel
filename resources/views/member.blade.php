@extends('mainadmin')

    @section('container')
    <div>
        <table class="table caption-top">
            <caption>List of Members</caption>
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($loginmember as $user)
              <tr>
                <th scope="row">{{ $user->memberid }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
    </div>
    @endsection

