<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="{{ asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/css/custom.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="startTime()">
	

    <div class="container-fluid" style="background-color: white;">
      <div class="row">
        <div class="col-md-3">
          <a href="{{url('/indexUsers')}}"><img src="{{('img/LogoTyper.png')}}" class="img-responsive" style="float: right;"></a>
        </div>
        <div class="col-md-9"></div>
      </div>
    </div>







  <!--Navigator-->
   <div class="container-fluid header-black">
      <nav class="navbar navbar-default nav-custom">
      <div class="container-fluid">

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <ul class="nav navbar-nav" style="padding-left: 100px;">
        <li><a href="{{url('/projectPosters')}}">My Projects</a></li>
        <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
        <li><a href="{{ url('/inbox')}}">Inbox</a></li>
        <li><a href="{{ url('/ideas')}}">Ideas</a></li>
        <li><a href="{{ url('/partner')}}">Partners</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="{{url('/profile')}}">Profile</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{url('/payment')}}"><b>Deposit:</b> Rp. 52.000,-</a></li>
          <li role="separator" class="divider" style="margin-bottom: 20px"></li>
          <li><a href="indexGuest.html"><b>Log Out</b></a></li>

          </ul>
        </li>
        </ul>

        <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" style="background-color: ">
        </div>
        <button type="submit" class="btn btn-warning" style="background-color: black; color: orange;">Search</button>
        </form>

      </div>

      </div>
    </nav>
   </div>
   
	<!--Content-->
   @yield('content')

    <footer class="text-center" style="background-color: black; color: white; height: 50px; padding-top:10px;">&copy; {{$date}} | <strong id="clock"></strong> JobJobs . <a href="#">Privacy</a> . <a href="#">Terms</a> . </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('style/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('style/js/custom.js')}}"></script>
  </body>
</html>