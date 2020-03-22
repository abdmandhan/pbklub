@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Bahan</h3>
        <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary">Tambah Bahan</a>
        </div>
    </div>
    <div class="card-body">
        <table id="example" class="table table-bordered table-hover table-striped table-light" style="width:100%">
            <thead>
                <tr>
                    <th>IDBahan</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Tempat Penyimpanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->IDBahan}}</td>
                    <td>{{ $item->Kode}}</td>
                    <td>{{ $item->Nama}}</td>
                    <td>{{ $item->Jenis}}</td>
                    <td>{{ $item->TempatPenyimpanan}}</td>
                    <td>{{ $item->Jumlah}}</td>
                    <td>Rp. {{ number_format($item->Harga,2,',','.')}}</td>
                    <td>{{ $item->Satuan}}</td>
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