@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Data Prodi</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('prodi.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="kodeProdi" class="form-label">Kode Prodi</label>
                  <input type="text" class="form-control" id="kodeProdi" name="kodeProdi">
                </div>
                <div class="mb-3">
                    <label for="namaProdi" class="form-label">Nama Prodi</label>
                    <input type="text" class="form-control" id="namaProdi" name="namaProdi">
                </div>
                <div class="mb-3">
                    <label for="jenjang" class="form-label">Jenjang Prodi</label>
                    <input type="text" class="form-control" id="jenjang" name="jenjang">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button onclick="history.back()" type="button" class="btn btn-danger">Batal</button>
              </form>
        </div>
    </div>
</div>
@endsection
