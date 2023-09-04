@extends('administrator.theme')
@section('content')
<!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 text-white"><i data-feather="user" class="nav-icon icon-xs me-2"></i>Edit Data Admin</h3>
                        </div>
                    </div>
                </div>
            </div>
        <!-- row  -->
        <div class="row mt-6 align-items-center justify-content-center">
            <div class="col-12 col-12">
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Form -->
                        <form action="/update_data_admin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" id="nama" class="form-control" name="nama" required="" value="{{ $data->nama }}">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email" required="" value="{{ $data->email }}">
                            </div>
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" id="username" class="form-control" name="username" required="" value="{{ $data->username }}">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required="" value="{{ $data->password }}">
                            </div>
                            <!-- Jabatan -->
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" id="jabatan" class="form-control" name="jabatan" required="" value="{{ $data->jabatan }}">
                            </div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection