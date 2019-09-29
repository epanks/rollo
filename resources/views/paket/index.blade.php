@extends('layouts.master')

@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Paket</h3>

                <div class="card-tools">
                    <button class="btn btn-success">
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
                            <th>Nama Paket</th>
                            <th>Pagu</th>
                            <th>Output</th>
                            <th>Satuan Output</th>
                            <th>Outcome</th>
                            <th>Satuan Outcome</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Modify</th>
                        </tr>

                    @foreach ($data_paket as $paket)  
                    
                        <tr>
                            <td>{{$paket->id}}</td>
                            <td>{{$paket->nmpaket}}</td>
                            <td>{{$paket->pagurmp}}</td>
                            <td>{{$paket->output}}</td>
                            <td>{{$paket->satoutput}}</td>
                            <td>{{$paket->outcome}}</td>
                            <td>{{$paket->satoutcome}}</td>
                            <td>{{$paket->progres_keu}}</td>
                            <td>{{$paket->progres_fisik}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#">
                                    <i class="fa fa-trash red"></i>
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