@extends('mainlayout')
@section('maintable')
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Pemain</th>
            <th scope="col">No Punggung</th>
            <th scope="col">Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pemains as $tabeldatapemain)
        <tr>
            <td>{{$tabeldatapemain->id}}</td>
            <td>{{$tabeldatapemain->nama_pemain}}</td>
            <td>{{$tabeldatapemain->no_punggung}}</td>
            <td>{{$tabeldatapemain->posisi}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection