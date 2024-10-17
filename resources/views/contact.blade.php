@extends('layouts.layout')

@section('title', 'Contact Page')

@section('content')
<h1>Contact Page</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        
        @php
            $mahasiswa = ['Gresia Desvani Dharmawan', 'didi mmmm', 'lili llll', 'Emi wwwww', ' dodo jjjjj'];
            $karyawan = ['putri', 'danu', 'budi', 'beni', 'dono'];
            $dosen = ['sasmito SPd, MM.', 'Deri S.Kom, MM', 'Dona S.T, MM'];
            $staff = ['Bella', 'fikri'];
        @endphp

        
        @foreach ($mahasiswa as $index => $nama)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $nama }}</td>
            <td>Mahasiswa</td>
        </tr>
        @endforeach

        
        @foreach ($karyawan as $index => $nama)
        <tr>
            <td>{{ $index + count($mahasiswa) + 1 }}</td>
            <td>{{ $nama }}</td>
            <td>Karyawan</td>
        </tr>
        @endforeach

        
        @foreach ($dosen as $index => $nama)
        <tr>
            <td>{{ $index + count($mahasiswa) + count($karyawan) + 1 }}</td>
            <td>{{ $nama }}</td>
            <td>Dosen</td>
        </tr>
        @endforeach

        
        @foreach ($staff as $index => $nama)
        <tr>
            <td>{{ $index + count($mahasiswa) + count($karyawan) + count($dosen) + 1 }}</td>
            <td>{{ $nama }}</td>
            <td>Staff</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
