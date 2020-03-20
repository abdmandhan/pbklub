@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
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
            <td>{{ $item->Harga}}</td>
            <td>{{ $item->Satuan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    console.log('Hi!'); 
</script>
@stop