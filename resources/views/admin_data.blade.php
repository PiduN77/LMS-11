@extends('layouts.template_admin')

@section('title')
    <title>Admin {{$class}} Table</title>
@endsection

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Table - {{$class}}</h1>
    <div class="card mb-4">
        <div class="card-header text-white">
            <span class="mdi mdi-table"></span>
            Data
        </div>
        <div class="card-body">
            <div class="form-outline">
                <input type="search" id="datasearch" class="form-control bg-white" placeholder="Cari Data" maxlength="255" onchange="search()" />
            </div>
            <div style="max-height:300px;overflow:auto;">
                <table class="table table-dark table-bordered font-monospace" id="datatable">
                    <thead>
                        <tr>
                            @for($i=0;$i<count($desc);$i++)
                                <th class="text-white" scope="col"><b>{{$desc[$i]->Field}}</b></th>
                            @endfor
                            <th class="text-white" scope="col"><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                @for($i=0;$i<count($desc);$i++)
                                    <?php $field=$desc[$i]->Field; ?>
                                    <td>
                                        {{$data->$field}}
                                        @if($desc[$i]->Type=='varchar(100)')
                                        <br><img src="
                                            @if($class=='Supplier')
                                            {{ asset('assets/img_supplier/'.$data->$field) }}
                                            @elseif($class=='Image')
                                            {{ asset('assets/img_product/'.$data->product_id.'/'.$data->$field) }}
                                            @endif
                                        " alt="" style="max-width:200px;">
                                        @endif
                                    </td>
                                @endfor
                                <td>
                                    <form action="{{-- {{ route('admin.delete', [$class, $data->id]) }} --}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                    @if(isset($data->status))
                                        <form action="{{-- {{ route('admin.orders.update', $data->id) }} --}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-warning btn-sm"
                                                @if($data->status=='preparing')
                                                >Kirim?
                                                @elseif($data->status=='shipping')
                                                >Sampai?
                                                @else
                                                style="display:none;">
                                                @endif
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header text-white">
                    <span class="mdi mdi-plus-box"></span>
                    Tambah
                </div>
                <div class="card-body">
                    <form action="{{-- {{ route('admin.store', $class) }} --}}" method="POST" id="add" enctype="multipart/form-data">
                        @csrf
                        {{-- @for($i=1;$i<count($desc)-2;$i++)
                            {{$desc[$i]->Type}}
                        @endfor
                        {{$fks["Country"]}} --}}
                        <button type="submit" class="btn btn-primary m-2">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header text-white">
                    <span class="mdi mdi-pencil-box"></span>
                    Edit
                </div>
                <div class="card-body">
                    <form action="" method="POST" id="edit">
                        @csrf
                        <button type="submit" class="btn btn-primary m-2" disabled>Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<?php 
for($i=1;$i<count($desc)-2;$i++) {
    $type = $desc[$i]->Type; 
    $field = $desc[$i]->Field; 
    echo '<script>input("'.$type.'","'.$field;
    if($type=="bigint unsigned") {
        $name = ucwords(substr($desc[$i]->Field, 0, -3), "_");
        $fkey = $fks[$name];
        $fkname = $colname[$name][1]->Field;
        echo '",'.$fkey.',"'.$fkname;
    }
    echo'");</script>';
} ?>
@endsection