{{-- @dd($kelas); --}}
@extends('layouts.admin.app', ['title' => 'Data Kelas'])

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('kelas.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Siswa Kelas {{ $kelas->tingkat_kelas }}  {{ $kelas->nama }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('kelas.index') }}">Kelas</a></div>
                <div class="breadcrumb-item">{{ $kelas->tingkat_kelas }} {{ $kelas->nama }}</div>
            </div>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade col-lg-12 col-md-12 col-12">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible show fade col-lg-12 col-md-12 col-12">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('error') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Siswa</h4>
                        @if (count($kelas->siswa) > 0)
                            <div class="card-header-action">
                                <a href="tambah-siswa/{{ $kelas->id }}" class="btn btn-primary">Tambah
                                    Siswa</a>
                            </div>
                        @endif
                    </div>
                    @if (count($kelas->siswa) > 0)
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas->siswa as $siswa)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $siswa->nis }}</td>
                                                <td class="text-center">{{ $siswa->nama }}</td>
                                                <td class="text-center">{{ $siswa->jk }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                        title="Delete"
                                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                        data-confirm-yes="deleteSiswa({{ $siswa->id }})">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <form id="deleteForm-{{ $siswa->id }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="empty-state" data-height="400">
                                <div class="empty-state-icon">
                                    <i class="fas fa-question"></i>
                                </div>
                                <h2>Tidak ada siswa dalam kelas ini</h2>
                                <p class="lead">
                                    Untuk menghilangkan pesan ini, tambahkan setidaknya 1 siswa kedalam kelas.
                                </p>
                                <a href="tambah-siswa/{{ $kelas->id }}" class="btn btn-primary mt-4">Tambah Siswa
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function deleteSiswa(kelasId) {
            // Mengambil referensi formulir dengan menggunakan ID yang unik
            var form = document.getElementById('deleteForm-' + kelasId);

            // Mengatur atribut action pada formulir
            form.action = "hapus-siswa/" + kelasId; // Misalkan URL delete berisi parameter kelas ID

            // Melakukan submit formulir
            form.submit();
        }
    </script>
@endsection
