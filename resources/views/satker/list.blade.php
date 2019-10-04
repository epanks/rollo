@extends('layouts.master')
@section('content')
<div class="content">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">

    <h1 class="profile-username text-center">{{$data_satker->nmsatker}}</h1>

      <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
      
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">CPU Traffic</span>
          <span class="info-box-number">90<small>%</small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Sales</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">New Members</span>
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
                  @foreach ($data_satker->paket as $paket)
                  <tr>
                    <td style="width: 10px"></a>{{$paket->id}}</td>
                    <td>{{$paket->nmpaket}}</td>
                    <td>{{$paket->pagurmp}}</td>
                    <td></td>
                  </tr>
                  @endforeach                  
                </tbody>
              </table>
              {{$data_satker->links()}}
              </div>
              <!-- /.box-body -->
            </div>
      </ul>

      
    </div>
    <!-- /.box-body -->
  </div>

  </div>
@endsection