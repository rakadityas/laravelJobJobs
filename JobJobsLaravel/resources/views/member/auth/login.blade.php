@extends('layout')

@section('content')
<div class="container-fluid"> 
      <div class="container" style="margin-top: 50px;margin-bottom: 30px;"> 
          <div class="row"> 
              <div class="col-md-12"> 
                  <h1><strong>Log In</strong></h1>
                  <p>You could log in or <a href="{{url('/register')}}">register here</a> to be able to use this website!</p>
              </div>
          </div>  
      </div>
    </div> 


   <div class="container">
   	<div class="row">
   		<div class="col-md-2"></div>
   		<div class="col-md-8">
   			<div class="panel panel-default panel-login">
   				<div class="panel-heading">
   					Login
   				</div>
			  	<div class="panel-body">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<form class="form-horizontal">
						  								  
							  	<div class="form-group">
									<label for="email" class="col-sm-2 control-label">E-mail Address</label>
									<div class="col-sm-10">
								  		<input type="email" class="form-control" id="email" placeholder="E-mail Address">
									</div>
							  	</div>
							  
							  	<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
								 		<input type="password" class="form-control" id="password" placeholder="Password">
									</div>
							  	</div>
							  
							  	<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
								 		<div class="checkbox">
											<label>
									  			<input type="checkbox"> Remember me
											</label>
								  		</div>
									</div>
							  </div>
							  
							  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
								  		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</button>
									</div>
							  </div>
							</form>
						</div>
						<div class="col-md-2"></div>
					</div>
			  	</div>
			</div>
   		</div>
   		<div class="col-md-2"></div>
   	</div>
   </div>
@endsection