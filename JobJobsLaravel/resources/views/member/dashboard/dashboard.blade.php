@extends('layout')
@section('content')
<div class="container-fluid"> 
      <div class="container" style="margin-top: 50px;margin-bottom: 30px;"> 
          <div class="row"> 
              <div class="col-md-12"> 
                  <h1><strong>Dashboard</strong></h1>
              </div>
          </div>  
      </div>
    </div>  

  <div class="container-fluid" style="background-color: #E0E0E0;">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
            <div class="panel-body">
              <img src="{{asset('img/instagram-ads-cost-guide.png')}}" alt="" class="img-responsive" height="50">
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-body">
              <h5>News Feed</h5>
              <hr>
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{asset('img/wordLogo.png')}}" alt="" class="img-responsive">
                  </div>
                  <div class="col-md-11">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nihil inventore incidunt reiciendis! Repudiandae expedita doloremque error, porro nemo, eum veniam saepe pariatur dicta sed repellat animi fugiat assumenda.
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{asset('img/wordLogo.png')}}" alt="" class="img-responsive">
                  </div>
                  <div class="col-md-11">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nihil inventore incidunt reiciendis! Repudiandae expedita doloremque error, porro nemo, eum veniam saepe pariatur dicta sed repellat animi fugiat assumenda.
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{asset('img/wordLogo.png')}}" alt="" class="img-responsive">
                  </div>
                  <div class="col-md-11">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nihil inventore incidunt reiciendis! Repudiandae expedita doloremque error, porro nemo, eum veniam saepe pariatur dicta sed repellat animi fugiat assumenda.
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{asset('img/wordLogo.png')}}" alt="" class="img-responsive">
                  </div>
                  <div class="col-md-11">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nihil inventore incidunt reiciendis! Repudiandae expedita doloremque error, porro nemo, eum veniam saepe pariatur dicta sed repellat animi fugiat assumenda.
                  </div>
                </div>
                <hr>
                <p class="text-center"><small>There are no more updates</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="{{asset('img/admin-icon.png')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8">
                  <small><b>Welcome Back,</b></small>
                  <br>
                  <strong><b>User1</b></strong>
                  <br>
                  <br>
                  <a href="#"><small>Free Member</small></a>
                  <br>
                  <a href="#" class="btn btn-success btn-sm">Upgrade Now</a>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <small><strong>Set Up Your Account</strong></small>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">30%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body">
              
              <hr style="border-bottom: dotted 2px orange;">
                              <div class="row" style="text-align: center;">
                                <h3><b>Level</b></h3>
                                <h4>Expert</h4>
                              </div>
                              <hr style="border-bottom: dotted 1px orange;">
                <div class="row">
                  <div class="col-md-6" style="text-align: center;">
                    <p style=" color: orange; font-weight:bold;">Project Compeleted <br></p>
                    <p>1,000</p>
                  </div>

                <div class="col-md-6" style="text-align: center;">
                  <p style=" color: green; font-weight:bold;">Seen <br></p>
                  <p>3,000 times</p>
                </div>
              </div>
              <hr style="border-bottom: dotted 2px orange;">
            </div>
          </div>

        </div>
        </div>
    </div>
  </div>
   @endsection




                