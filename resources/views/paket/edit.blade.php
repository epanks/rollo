@extends('layouts.master')

@section('content')
<h1>Edit data paket</h1>
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-5">
    <div class="col-lg-12">
        <form action="/paket/{{$data_paket->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="kdsatker">Kode Satker</label>
                <input name="kdsatker" type="text" class="form-control" id="kdsatker" placeholder="Kode Satker" value="{{$data_paket->kdsatker}}">
            </div>
            <div class="form-group">
                <label for="nmpaket">Nama Paket</label>
                <input name="nmpaket" type="text" class="form-control" id="nmpaket" placeholder="Nama Paket" value="{{$data_paket->nmpaket}}">
            </div>
            <div class="form-group">
                <label for="pagurmp">Pagu</label>
                <input name="pagurmp" type="number" class="form-control" id="pagurmp" placeholder="Pagu" value="{{$data_paket->pagurmp}}">
            </div>
            <div class="form-group">
                <label for="rencana_keu">Rencana Keuangan</label>
                <input name="rencana_keu" type="number" step="0.01" class="form-control" id="rencana_keu" placeholder="Rencana Keuangan" value="{{$data_paket->rencana_keu}}">
            </div>
            <div class="form-group">
                <label for="rencana_fisik">Rencana Fisik</label>
                <input name="rencana_fisik" type="number" step="0.01" class="form-control" id="rencana_fisik" placeholder="Rencana Fisik" value="{{$data_paket->rencana_fisik}}">
            </div> 
            <div class="form-group">
                <label for="progres_keu">Progres Keuangan</label>
                <input name="progres_keu" type="number" step="0.01" class="form-control" id="progres_keu" placeholder="Progres Keuangan" value="{{$data_paket->progres_keu}}">
            </div>
            <div class="form-group">
                <label for="progres_fisik">Progres Fisik</label>
                <input name="progres_fisik" type="number" step="0.01" class="form-control" id="progres_fisik" placeholder="Progres Fisik" value="{{$data_paket->progres_fisik}}">
            </div>
            <div class="form-group">
                <label for="tblsatker_id">ID tblsatker</label>
                <input name="tblsatker_id" type="number" class="form-control" id="tblsatker_id" placeholder="ID tblsatker" value="{{$data_paket->tblsatker_id}}">
            </div>    
            <div class="modal-footer">                
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form> 
    </div>  
</div>

@endsection