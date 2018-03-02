@extends('layout')

@section('content')
<div class="container-fluid cont-pic">
     <div class="container content">
     		<div class="row">
     			<div class="col-md-2"></div>
     			<div class="col-md-8">
     				<div class="row">
              <div class="col-md-12" style="height: 250px; background-color: white;">
                <h5 style="font-size: 50pt; font-family: times new roman; text-align: center; padding-top: 80px;"><b>JOBJOBS</b></h5>
              </div>
            </div>
     			</div>
     			<div class="col-md-2"></div>
     		</div>

     </div>
   </div>


   <div class="container-fluid" style="background-color: white;">
     <div class="container">
       
       <div class="row OPENING">

        <div class="col-md-12">
          <div class="row" style="padding-bottom: 15px">
            <div class="col-md-12">
            WELCOME TO JOBJOBS WEBSITE<br>
           <b>WE HELP YOU MAKE YOUR PROJECT!</b>
           </div>
          </div>

          <div class="row DESCRIPTION">
            <div class="col-md-12">
            <p>We all been there! An idea strikes but don't know where to start. Finding software houses for projects seems really hard! Especially for someone who have no technology background finding the right software houses seems so hard. Search engines might help you to lead to a software houses, but finding the right one that suites your need are a lot of work! Same goes to software houses, finding and examining the right client pretty hard! Plus for a small software houses the chances you appeared in search engines are pretty low!<br><br>

            In JobJobs we help you solved these problems! </p>
            </div>
          </div>


          <div class="row OPENING">
            <div class="col-md-12" style="padding-bottom: 15px; text-align: center;">
              <p>WHY JOBJOBS</p>
            </div>
          </div>

          <div class="row" style="padding-bottom: 100px;">
            <div class="col-md-1"></div>
            <div class="col-md-5 DESCRIPTION2">
              <h2>For Software House</h2>
              <p>In JobJobs we help you to find the right client and project that suits you! Your company will also be more recognizeable than search engines especially if your company is still small and growing company, so we make sure your company could compete with existing software houses and fully interactable with the clients remotely!</p>
            </div>
            <div class="col-md-5">
              <img src="{{ asset('img/wordLogo.png')}}" class="img-responsive" style="float: right;">
            </div>
            <div class="col-md-1"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <img src="{{ asset('img/excelLogo.png')}}" class="img-responsive" style="float: left;">
            </div>
            <div class="col-md-5 DESCRIPTION2">
              <h2>For Project Maker</h2>
              <p>In JobJobs we help you to find the right software house that fit your need! Wheather you need a small or big project, JobJobs will help you match with the right software houses! So no more spending your precious hours browsing in search engines, just post your ideas, and software houses will come right at you!</p>
            </div>
            <div class="col-md-1"></div>
          </div>




          <div class="row OPENING">
            <div class="col-md-12" style="padding-bottom: 15px; text-align: center;">
              <p>DISCOVER PREMIUM SUBSCRIPTION</p>
            </div>
          </div>

          <div class="row" style="padding-bottom: 100px;">
            <div class="col-md-1"></div>
            <div class="col-md-5 DESCRIPTION2">
              <h2>For Software House</h2>
              <p>You could subscribe with our program for following benefits:</p>
              <ul>
                <li>Free from ads.</li>
                <li>Bid more than 2 project per month.</li>
                <li>VIP bidding queue.</li>
                <li>Message easily from our built in messaging app.</li>
              </ul>
            </div>
            <div class="col-md-5">
              <img src="{{ asset('img/wordLogo.png')}}" class="img-responsive" style="float: right;">
            </div>
            <div class="col-md-1"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <img src="{{ asset('img/wordLogo.png')}}" class="img-responsive" style="float: left;">
            </div>
            <div class="col-md-5 DESCRIPTION2">
              <h2>For Project Maker</h2>
              <p>You could subscribe with our program for following benefits:</p>
              <ul>
                <li>Free from ads.</li>
                <li>No more 1 day restriction! See your notification on each bid since day one!</li>
                <li>Publish more than 2 jobs per-month!</li>
                <li>Message easily from our built in messaging app.</li>
              </ul>
            </div>
            <div class="col-md-1"></div>
          </div>


        
        </div>
         
       </div>


     </div>
   </div>
@endsection