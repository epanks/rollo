@extends('layouts.master')
@section('content')
<div class="content">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">

    <h1 class="profile-username text-center"></h1>

      <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
      
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ol"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Paket</span>
              <span class="info-box-number">
                {{$data_satker->count()}}
                <small>paket</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-dollar-sign"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pagu</span>
              <span class="info-box-number">{{number_format($data_satker->sum('pagurmp'))}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-pie"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Progres Keuangan</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-chart-line"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Progres Fisik</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
    <!-- Small boxes (Stat box) -->

      <ul class="list-group list-group-unbordered">
          <div class="box">
             
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-striped">
                  <tbody><tr>
                    <th>No</th>
                    <th>Nama Satker</th>
                    <th>Pagu</th>
                    <th>Progres </th>
                  </tr>
                  @foreach ($data_satker as $no =>$paket)
                  <tr>
                    <td style="width: 10px"></a>{{++$no}}</td>
                    <td>{{$paket->nmpaket}}</td>
                    <td class="text-right">{{number_format($paket->pagurmp)}}</td>
                    <td></td>
                    <th></th>
                  </tr>
                  @endforeach                  
                </tbody>
              </table>
              
              </div>
              <!-- /.box-body -->
            </div>
      </ul>

      
    </div>
    <!-- /.box-body -->
  </div>

  </div>
@endsection
