@extends('layouts.admin.app', ['title' => 'Edit Siswa'])

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('siswa.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Siswa</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a></div>
                <div class="breadcrumb-item">Edit Siswa</div>
            </div>
        </div>
        <div class="section-body">
            <form method="post" action="/admin/siswa/{{ $siswa->id }}">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Siswa</h4>
                            </div>
                            <div class="card-body">
                                {{-- NIS --}}
                                <div id="nis" class="form-group row mb-4">
                                    <label for="name"
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIS</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="nis" type="text"
                                            class="form-control @error('nis') is-invalid @enderror""
                                            value="{{ $siswa->nis }}" autofocus>
                                        @error('nis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Nama --}}
                                <div id="nama" class="form-group row mb-4">
                                    <label for="name"
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror""
                                            value="{{ $siswa->nama }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                 {{-- Kelas --}}
                                <div class="form-group row mb-4">
                                    <label for="kelas_id"
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelas</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="kelas_id" id="kelas_id"
                                            class="form-control selectric @error('kelas_id') is-invalid @enderror">
                                            <option>{{ $siswa->kelas->tingkat_kelas }} {{ $siswa->kelas->nama }}</option>
                                            @foreach ($kelas as $k)
                                                <option value="{{ $k->id }}"
                                                    {{ old('kelas_id') == $k->id ? 'selected' : '' }}>
                                                    {{ $k->tingkat_kelas . ' ' . $k->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kelas_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Jenis Kelamin --}}
                                <div class="form-group row mb-4">
                                    <label for="name"
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="jk" id="jk" class="form-control selectric">
                                            <option>{{ $siswa->jk }}</option>
                                            @if ($siswa->jk == 'L')
                                                <option>P</option>
                                            @elseif ($siswa->jk == 'P')
                                                <option>L</option>
                                            @endif
                                        </select>
                                        @error('jk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Daftar --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Update Siswa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('js')
@endsection
