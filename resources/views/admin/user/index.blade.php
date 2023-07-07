@extends('layouts.admin.app', ['title' => 'Data User'])

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                <div class="breadcrumb-item">User</div>
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

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data User</h4>
                        <div class="card-header-action">
                            <a href="/admin/user/create" class="btn btn-primary">Tambah User</a>
                        </div>
                    </div>
                    {{-- Search --}}
                    <div class="card-header">
                        @if (request('search'))
                            <div class="section-header-back">
                                <a href="{{ route('user.index') }}" class="btn btn-icon"><i
                                        class="fas fa-arrow-left"></i></a>
                            </div>
                        @endif
                        <form class="card-header-form" action="{{ route('user.index') }}">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $user->username }}</td>
                                            <td class="text-center">{{ $user->role }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit" href="/admin/user/{{ $user->id }}/edit">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="deleteUser({{ $user->id }})"><i
                                                        class="fas fa-trash"></i> </a>
                                                <form id="deleteForm-{{ $user->id }}" method="POST">
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
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function deleteUser(userId) {
            // Mengambil referensi formulir dengan menggunakan ID yang unik
            var form = document.getElementById('deleteForm-' + userId);

            // Mengatur atribut action pada formulir
            form.action = "user/" + userId; // Misalkan URL delete berisi parameter user ID

            // Melakukan submit formulir
            form.submit();
        }
    </script>
@endsection
