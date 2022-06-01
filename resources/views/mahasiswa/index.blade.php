@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
            <div class="float-left my-2" style="width: 70%;">
                <form action="{{ route('cari') }}" method="GET">
                    <input class="form-control" type="text" name="cari" placeholder="Masukkan Nama Mahasiswa.." value="{{ old('cari') }}" style="display: inline; width: 50%">
                    <input type="submit" class="btn btn-outline-primary" style="display: inline;" value="Cari">
                </form>
            </div>  
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs ->nim }}</td>
            <td>{{ $mhs ->nama }}</td>
            <td>{{ $mhs ->kelas->nama_kelas }}</td>
            <td>{{ $mhs ->jurusan }}</td>
            <td>{{ $mhs ->email }}</td>
            <td>{{ $mhs ->alamat }}</td>
            <td>{{ $mhs ->tanggal_lahir }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
                    <a class="btn btn-warning" href="{{ route('nilai',$mhs->nim) }}">Nilai</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- perhatikan script di bawah ini untuk membuat paginasi dan yang berkaitan dengan paginasi -->
    Current Page    : {{ $mahasiswa->currentPage() }}<br>
    Jumlah Data     : {{ $mahasiswa->total() }}<br>
    Data perhalaman : {{ $mahasiswa->perPage() }}<br>
    <br>
    <br>
    {{ $mahasiswa->links() }}
@endsection