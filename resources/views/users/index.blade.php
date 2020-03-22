@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List User</h3>
        <div class="card-tools">
            <a href="" class="btn btn-sm btn-primary">Tambah User</a>
        </div>
    </div>
    <div class="card-body">
        <table id="example" class="table table-bordered table-hover table-striped table-light" style="width:100%">
            <thead>
                <tr>
                    <th>IDUser</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->getRoleNames() }}</td>
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