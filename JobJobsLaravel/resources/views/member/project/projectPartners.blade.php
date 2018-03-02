@extends('layout')

@section('content')
  <!--Content-->

    <div class="container-fluid"> 
      <div class="container" style="margin-top: 50px;margin-bottom: 30px;"> 
          <div class="row"> 
              <div class="col-md-6"> 
                  <h1><strong>My Projects</strong></h1>
                  <p>All the list of your ongoing and past project as partners or as a job posters.</p>
              </div>
              <div class="col-md-6" style="padding-top: 35px; text-align: center;"> 
                  <div class="row"> 
                      <div class="col-md-8"> </div>
                      <a href="{{url('/projectPosters')}}" style=" color: black"><div class="col-md-2" style="border-radius: 10px 0px 0px 10px; border:2px solid #4CAF50; background-color: #43A047;padding: 10px">
                        <div class="button1"><b>Posters</b></div>
                      </div>
                      </a>
                      <a href="{{url('/projectPosters')}}"><div class="col-md-2" style="border-radius: 0px 10px 10px 0px; border:2px solid #A5D6A7; background-color: #81C784; color: gray; padding: 10px">
                        <div class="button1"><b>Partners</b></div>
                      </div>
                      </a>
                  </div>
              </div>
          </div>  
      </div>
    </div>  




            


<!-- afsddddddddddddddddddddddddddddddddd -->
            <div class="container-fluid" style="background-color: #E0E0E0;">
     <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-login" style="padding: 20px; background-color: #EBEBEB; margin-top: 0px;">

            <div class="panel-body" style="background-color: #EBEBEB; border-radius: 10px;">
              
                <div class="row" style="border-bottom: solid black 4px; margin-bottom: 15px; padding-top: 15px;">
                  <div class="col-md-6">
                   <h4 style="padding-left:10PX; "><b>CURRENT PROJECTS</b></h4>
                  </div>

                  <div class="col-md-6">
                    <a style="float: right;margin-top: 5px;" href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-plus"></span> New </a>
                  </div>
                </div>

                <div class="panel panel-default" style="border-radius: 10px;">
                  <div class="panel-body" style="padding: 25px; box-shadow: 4px 4px 1px grey;"> 
                    <div class="row">
                      <table class="table"> 
                        <tr style="background-color: #7F9938; color: white;">
                          <th style="text-align: center; border-radius: 5px 0px 0px 5px;">PROJECT NAME</th>
                          <th style="text-align: center;">PROJECT CATEGORY</th>
                          <th style="text-align: center;">TOTAL BID</th>
                          <th style="text-align: center;">LAST BID</th>
                          <th style="text-align: center;">PARTNER</th>
                          <th style="text-align: center; border-radius: 0px 5px 5px 0px;">STATUS</th>
                        </tr>

                        <tr style="text-align: center;">
                          <td>Company website</td>
                          <td>Web Application</td>
                          <td>10</td>
                          <td>25/12/2017</td>
                          <td>PT. Perusahaan</td>
                          <td>Waiting</td>
                        </tr>

                        <tr style="text-align: center;">
                          <td>PT App</td>
                          <td>Mobile Application</td>
                          <td>10</td>
                          <td>1/1/2017</td>
                          <td>PT. Perusahaan</td>
                          <td>Waiting</td>
                        </tr>

                      </table>
                    </div>
                  </div>

                </div>
                
            </div>



            <div class="panel-body" style="background-color: #EBEBEB;">
              
                <div class="row" style="border-bottom: solid black 4px; margin-bottom: 15px; padding-top: 15px;">
                <h4 style="padding-left:10PX; "><b>PAST PROJECTS</b></h4>
                </div>

                <div class="panel panel-default" style="border-radius: 10px;">
                  <div class="panel-body" style="padding: 25px; box-shadow: 4px 4px 1px grey; border-radius: 10px;"> 
                    <div class="row">
                      <table class="table"> 
                        <tr style="background-color: #7F9938; color: white;">
                          <th style="text-align: center; border-radius: 5px 0px 0px 5px;">PROJECT NAME</th>
                          <th style="text-align: center;">PROJECT CATEGORY</th>
                          <th style="text-align: center;">TOTAL BID</th>
                          <th style="text-align: center;">LAST BID</th>
                          <th style="text-align: center;">PARTNER</th>
                          <th style="text-align: center; border-radius: 0px 5px 5px 0px;">STATUS</th>
                        </tr>

                        <tr style="text-align: center;">
                          <td>Company website</td>
                          <td>Web Application</td>
                          <td>10</td>
                          <td>25/12/2017</td>
                          <td>PT. Perusahaan</td>
                          <td>Completed</td>
                        </tr>

                        <tr style="text-align: center;">
                          <td>PT App</td>
                          <td>Mobile Application</td>
                          <td>10</td>
                          <td>1/1/2017</td>
                          <td>PT. Perusahaan</td>
                          <td>Completed</td>
                        </tr>

                        <tr style="text-align: center;">
                          <td>PT App</td>
                          <td>Network Infrastructure</td>
                          <td>10</td>
                          <td>1/1/2017</td>
                          <td>PT. Perusahaan</td>
                          <td>Completed</td>
                        </tr>

                        <tr style="text-align: center;">
                          <td>PT App</td>
                          <td>Mobile Application</td>
                          <td>10</td>
                          <td>1/1/2017</td>
                          <td>PT. Perusahaan</td>
                          <td>Completed</td>
                        </tr>

                      </table>
                    </div>
                  </div>

                </div>
                
            </div>



                  
        </div>

      </div>
    </div>

     </div>
   </div>
   
@endsection