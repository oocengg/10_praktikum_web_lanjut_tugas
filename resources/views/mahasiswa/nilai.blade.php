@extends('mahasiswa.layout')

@section('content')
    <div class="container mt-3">
        <h3 class="text-center mb-4">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
        <h2 class="text-center mb-5">KARTU HASIL STUDI (KHS)</h2>
        
        <br><br><br>

        <b>Nama  :</b> {{ $mhs->mahasiswa->nama }} <br>
        <b>NIM   :</b> {{ $mhs->mahasiswa->nim }} <br>
        <b>Kelas :</b> {{ $mhs->mahasiswa->kelas->nama_kelas }} <br>

        <br>
        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mhs as $mk)
            <tr>
                <td>{{ $mk -> matakuliah -> nama_matkul }}</td>
                <td>{{ $mk -> matakuliah -> sks }}</td>
                <td>{{ $mk -> matakuliah -> semester }}</td>
                <td>{{ $mk -> nilai }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection