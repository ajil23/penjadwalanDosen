@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Prodi</h1>
            </div>
            <div class="co text-end mb-2">
                <a href="{{route('prodi.add')}}"><button type="button" class="btn btn-primary">Tambah Prodi</button></a>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Program Studi</th>
                            <th>Jenjang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allDataProdi as $item =>$row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->kodeProdi}}</td>
                            <td>{{$row->namaProdi}}</td>
                            <td>{{$row->jenjang}}</td>
                            <td colspan="2">
                                <a href="{{route('prodi.edit', $row->id)}}" class="btn btn-warning"> Edit </a>
                                <a href="{{route('prodi.delete', $row->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection
