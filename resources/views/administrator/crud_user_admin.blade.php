@extends('administrator.theme')
@section('content')
    <!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 text-white"><i data-feather="user" class="nav-icon icon-xs me-2"></i>Data Admin</h3>
                        </div>
                        <div>
                            <a href="{{ route ('admin_create') }}" class="btn btn-white"><i data-feather="plus" class="nav-icon icon-xs me-2"></i>Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4">
                        {{-- <h4 class="mb-0">Permohonan Peminjaman</h4> --}}
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $admin)
                                <tr>
                                    <td class="align-middle text-dark">
                                        {{ $admin->nama }}
                                    </td>
                                    <td class="align-middle">{{ $admin->email }}</td>
                                    <td class="align-middle">{{ $admin->username }}</td>
                                    <td class="align-middle">{{ $admin->password }}</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success">{{ $admin->jabatan }}</span>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm avatar-primary">
                                                <a class="btn btn-info btn-icon rounded-circle indicator indicator-primary text-dark" href="./tampilkan_data_admin/{{ $admin->id }}" role="button">
                                                    <i class="icon-xs" data-feather="edit"></i>
                                                    </a>
                                                    <a class="btn btn-danger btn-icon rounded-circle indicator indicator-primary text-dark" href="./delete_data_admin/{{ $admin->id }}" role="button">
                                                    <i class="icon-xs" data-feather="trash"></i>
                                                    </a>
                                                {{-- <a href="#" class="btn btn-white"><i data-feather="edit" data-feather="trash" class="nav-icon icon-xs me-2"> </i><i data-feather="trash" data-feather="trash" class="nav-icon icon-xs me-2"> </i></a> --}}
                                                {{-- <a href="#" class="btn btn-white"><i data-feather="trash" data-feather="trash" class="nav-icon icon-xs me-2"> </i></a> --}}
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection