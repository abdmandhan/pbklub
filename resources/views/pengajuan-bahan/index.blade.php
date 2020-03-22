@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pengajuan Bahan</h3>
        <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary">Tambah Pengajuan Bahan</a>
        </div>
    </div>
    <div class="card-body">
        <table id="example" class="table table-bordered table-hover table-striped table-light" style="width:100%">
            <thead>
                <tr>
                    <th>IDPengajuanBahan</th>
                    <th>User Peminjam</th>
                    <th>Nama Bahan</th>
                    <th>Jumlah Bahan</th>
                    <th>Status</th>
                    <th>ActionBy</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->IDPengajuanBahan}}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->bahan->Nama }}</td>
                    <td>{{ $item->Jumlah}}</td>
                    <td>{{ $item->Status}}</td>
                    <td>{{ $item->actionBy->name }}</td>
                    <td>
                        <a href="" class="fa fa-edit text-success"></a>
                        &nbsp;
                        <a href="" class="fa fa-trash text-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@stop