@extends('layout')

@section('content')
   <div class="container-fluid"> 
      <div class="container" style="margin-top: 50px;margin-bottom: 30px;"> 
          <div class="row"> 
              <div class="col-md-12"> 
                  <h1><strong>Deposit</strong></h1>
                  <p>You could easily deposit your money anytime and anywhere.</p>
              </div>
          </div>  
      </div>
    </div>  

   <div class="container-fluid" style="background-color: #E0E0E0;">
     <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-login" style="padding: 20px; background-color: #EBEBEB; margin-top: 0px;">

            
            <div class="panel-body" style="background-color: #EBEBEB;">
              <div class="row">
                <div class="col-md-12">
                  <h2><b>Select Payment Method</b></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7" style="height: 500px;">
                  
                  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12 radio" style="background-color: #E0E0E0; height: 100px; padding:30px; border-radius: 10px;">
                      <label style="font-size: 20pt;"><input type="radio" name="" placeholder=""><b>Credit or Debit</b></label>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12 radio" style="background-color: #E0E0E0; height: 100px; padding:30px; border-radius: 10px;">
                      <label style="font-size: 20pt"><input type="radio" name="" placeholder=""><b>PayPal</b></label>
                    </div>
                  </div>

                 <!--  <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12 radio" style="background-color: #E0E0E0; height: 100px; padding:30px;">
                      <label style="font-size: 20pt"><input type="radio" name="" placeholder=""></label>
                    </div>
                  </div> -->

                </div>

                <div class="col-md-5">

                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="background-color: #E0E0E0; padding: 25px; border-radius: 10px;">
                      
                      <div class="row">
                       <h3><b>Detail Transaction</b></h3>
                       </div>

                      <div class="row">
                      <table class="table"> 
                        <tr style="background-color: #7F9938; color: white;">
                          <th style="text-align: center; border-radius: 5px 0px 0px 5px;">PROJECT NAME</th>
                          <th style="text-align: center;">PARTNER</th>
                          <th style="text-align: center; border-radius: 0px 5px 5px 0px;">PRICE</th>
                        </tr>

                        <tr style="text-align: center;">
                          <td>Company Webs..</td>
                          <td>Susilo</td>
                          <td>Rp.1.000.000,-</td>
                        </tr>

                        <tr style="text-align: center;">
                          <td>Network in....</td>
                          <td>Joko</td>
                          <td>Rp.2.000.000,-</td>
                        </tr>

                        <tr style="text-align: center;">
                          <td>Aplikasi</td>
                          <td>Jono</td>
                          <td>Rp.3.000.000,-</td>
                        </tr>
                        

                      </table>
                    </div>

                    <hr style="border-bottom: solid 1px black;">

                    <div class="row">
                      <div class="col-md-12" >
                        <b style="float: right;">Total : Rp.6.000.000.-</b>
                      </div>

                    </div>

                    <div class="row" style="margin-top: 20px;">
                      <div class="col-md-12" style="text-align: center;">
                        <button class="btn btn-warning"> Pay </button>
                      </div>
                    </div>

                    </div>
                    <div class="col-md-1"></div>
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