@extends('layouts.master')
@section('content')

<div class="content">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img center" src="/img/logopu.jpg" alt="User profile picture">

    <h1 class="profile-username "><h1>{{$nmbalai}}</h1></h1>

      <p class="text-muted">Pusat Air Tanah dan Air Baku</p>

      <ul class="list-group list-group-unbordered">
          <div class="box">
              <div class="row">
                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ol"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Jumlah Paket</span>
                        <span class="info-box-number">
                          {{$paket->count()}}
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
                        <span class="info-box-text">Jumlah Pagu</span>
                        <span class="info-box-number">{{number_format($paket->sum('pagurmp'))}}</span>
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
                        <span class="info-box-text">Prosentase Keuangan</span>
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
                        <span class="info-box-text">Prosentase Fisik</span>
                        <span class="info-box-number">2,000</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-striped">
                  <tbody><tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Pagu</th>
                    <th>Progres </th>
                  </tr>
                  @foreach($paket as $no => $pkt)
                  <tr>
                  <td style="width: 10px"></a>{{$pkt->id}}</td>
                    <td><a href="#">{{$pkt->nmpaket}}</td>
                    <td class="text-right">{{number_format($pkt->pagurmp)}}</td>
                    <td></td>
                  </tr>
                  @endforeach
                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>
      </ul>

      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
    </div>
    <!-- /.box-body -->
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Jumlah Paket</span>
          <span class="info-box-number">{{$paket->count()}}<small>%</small></span>
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
          <span class="info-box-text">Pagu</span>
          <span class="info-box-number">{{number_format($paket->sum('pagurmp'))}}</span>
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
    <div class="row mt-5">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Jumah Paket</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>2 T</h3>

            <p>Total Pagu</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44
            <sup style="font-size: 20px">%</sup>
            </h3>

            <p>Progres Keuangan</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>
            65
            <sup style="font-size: 20px">%</sup>
            </h3>

            <p>Progres Fisik</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
@endsection
