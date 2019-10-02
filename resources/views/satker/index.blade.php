@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Balai</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNew">
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                </div>
            </div>
        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Satker</th>
                            <th>Nama Paket</th>
                            <th>Pagu</th>
                            <th>Rencana Keuangan</th>
                            <th>Rencana Fisik</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Satker ID</th>
                            <th>Modify</th>
                        </tr>

                    @foreach ($data_satker as $satker)  
                    
                        <tr>
                            <td>{{$satker->id}}</td>
                            <td>{{$satker->nmsatker}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="/satker/{{$satker->id}}/edit">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="/satker/{{$satker->id}}/delete">
                                    <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                </a>
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